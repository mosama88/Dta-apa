<?php

namespace App\Livewire\Dashboard;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Governorate;

class GovernorateTable extends Component
{
    use WithPagination;


    public $name_search = '';



    public function render()
    {
        $query = Governorate::query();
        if ($this->name_search) {
            $query->where('name', 'like', '%' . $this->name_search . '%');
        }


        $data =  $query->orderByDesc('id')->paginate();
        return view('dashboard.governorates.governorate-table',compact('data'));
    }
}