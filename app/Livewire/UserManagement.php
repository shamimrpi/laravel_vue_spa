<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class UserManagement extends Component
{
    public $users;
    public $name;
    public $email;
    public $selectedUserId;
    public $showCreateForm = false;
    public $showEditForm = false;
    
    public function render()
    {
        $this->users = User::all();
        return view('livewire.user.index');
    }

    public function showCreateForm()
    {
        dd('ok');
        $this->resetForm();
        $this->showCreateForm = true;
    }

    public function showEditForm($userId)
    {
        $this->resetForm();
        $user = User::findOrFail($userId);
        $this->selectedUserId = $user->id;
        $this->name = $user->name;
        $this->email = $user->email;
        $this->showEditForm = true;
    }

    public function store()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
        ]);

        User::create([
            'name' => $this->name,
            'email' => $this->email,
        ]);

        $this->resetForm();
    }

    public function update()
    {
        $this->validate([
            'name' => 'required',
            'email' => "required|email|unique:users,email,{$this->selectedUserId}",
        ]);

        $user = User::findOrFail($this->selectedUserId);
        $user->update([
            'name' => $this->name,
            'email' => $this->email,
        ]);

        $this->resetForm();
    }

    public function delete($userId)
    {
        User::findOrFail($userId)->delete();
    }

    public function resetForm()
    {
        $this->name = '';
        $this->email = '';
        $this->selectedUserId = null;
        $this->showCreateForm = false;
        $this->showEditForm = false;
    }
}
