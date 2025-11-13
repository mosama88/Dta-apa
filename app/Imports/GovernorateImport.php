<?php

namespace App\Imports;

use App\Models\Governorate;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\ToModel;

class GovernorateImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        $userId = Auth::user()->id;
        return new Governorate([
            'name' => $row[0],
            'created_by' => $userId
        ]);
    }
}