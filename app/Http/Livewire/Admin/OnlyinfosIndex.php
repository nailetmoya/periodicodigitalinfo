<?php

namespace App\Http\Livewire\Admin;

use Livewire\WithPagination;
use Livewire\Component;
use App\Models\Onlyinfo;

class OnlyinfosIndex extends Component
{
    use WithPagination;
    protected $paginationTheme = "bootstrap";

    public $search;
    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {   
         $onlyinfos = Onlyinfo::where('user_id', auth()->user()->id)
                         ->where('name', 'LIKE', '%' . $this->search . '%')
                        ->latest('id')
                        ->paginate();
          return view('livewire.admin.onlyinfos-index', compact('onlyinfos'));
    }
}
