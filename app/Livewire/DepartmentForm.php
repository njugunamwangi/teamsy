<?php

namespace App\Livewire;

use App\Models\Department;
use Livewire\Component;

class DepartmentForm extends Component
{
    public $name = 'Accounting';
    public $succeed = false;

    public function mount($departmentId = null) {
        if ($departmentId) {
            $this->name = Department::findorfail($departmentId)->name;
        }
    }

    public function save() {
        Department::create([
            'name' => $this->name
        ]);

        $this->succeed = true;
    }

    public function render()
    {
        return view('livewire.department-form');
    }
}
