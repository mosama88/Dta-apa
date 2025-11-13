<?php

namespace App\Livewire\Dashboard;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\InternetLine;

class InternetLineTable extends Component
{
    use WithPagination;


    public $name_search = '';



    public function render()
    {
        $query = InternetLine::query();
        if ($this->name_search) {
            $query->where('name', 'like', '%' . $this->name_search . '%');
        }


        $data =  $query->orderByDesc('id')->paginate();
        return view('dashboard.internet_lines.internet-line-table',compact('data'));
    }
}