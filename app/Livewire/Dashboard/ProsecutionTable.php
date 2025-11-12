<?php

namespace App\Livewire\Dashboard;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Prosecution;

class ProsecutionTable extends Component
{
    use WithPagination;


    public $name_search = '';



    public function render()
    {
        $query = Prosecution::query();
        if ($this->name_search) {
            $query->where('name', 'like', '%' . $this->name_search . '%');
        }


        $data =  $query->orderByDesc('id')->paginate();
        return view('dashboard.prosecutions.prosecution-table',compact('data'));
    }
}