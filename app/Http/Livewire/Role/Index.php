<?php

namespace App\Http\Livewire\Role;

use Livewire\Component;
use Livewire\WithPagination;
use Spatie\Permission\Models\Role;

class Index extends Component
{
    use WithPagination;

    // protected $paginationTheme = "";
    public $search;

    public $confirmingRoleDeletion = false;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $roles = Role::where('name', 'LIKE', '%' . $this->search . '%')
            ->paginate();

        return view('livewire.role.index', compact('roles'));
    }

    public function confirmRoleDeletion($id) {
        // $role->delete();
        $this->confirmingRoleDeletion = $id;
    }

    public function deleteRole( Role $role ) {
        $role->delete();
        $this->confirmingRoleDeletion = false;
    }
}
