<?php

namespace App\Imports;

use App\Models\InternetLine;
use App\Models\Prosecution;
use App\Models\Governorate;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\ToModel;
use App\Enums\TypeLineEnum;

class InternetLineImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        try {
            $userId = Auth::user()->id;

            $typeMap = [
                'IP Transit Over Fiber' => TypeLineEnum::Internet,
                'VPN Over Fiber' => TypeLineEnum::VPN,
            ];

            $rawType = strtolower(trim($row[4]));
            $typeLine = $typeMap[$rawType] ?? null;
            $prosecutionId = Prosecution::where('name', trim($row[0]))->first();
            $governorateId = Governorate::where('name', trim($row[5]))->first();

            return new InternetLine([
                'prosecution_id' => $prosecutionId ? $prosecutionId->id : null,
                'code_line' => $row[1],
                'order_number' => $row[2],
                'internet_speed' => $row[3],
                'type_line' => $typeLine ? $typeLine->value : 1,
                'governorate_id' => $governorateId ? $governorateId->id : null,
                'ip_address' => !empty($row[6]) ? $row[6] : null,
                'mac_address' => !empty($row[7]) ? $row[7] : null,
                'created_by' => $userId
            ]);
        } catch (\Exception $e) {

            dd("Import Error: " . $e->getMessage());
        }
    }
}
