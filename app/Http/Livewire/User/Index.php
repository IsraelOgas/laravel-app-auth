<?php

namespace App\Http\Livewire\User;

use App\Models\User;

use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    // protected $paginationTheme = "";
    public $search;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $users = User::where('name', 'LIKE', '%' . $this->search . '%')
            ->orWhere('email', 'LIKE', '%' . $this->search . '%')
            ->paginate();

        return view('livewire.user.index', compact('users'));
    }
}
