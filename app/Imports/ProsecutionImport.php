<?php

namespace App\Imports;

use App\Models\Prosecution;
use Maatwebsite\Excel\Concerns\ToModel;

class ProsecutionImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Prosecution([
            'name' => $row[0]
        ]);
    }
}
