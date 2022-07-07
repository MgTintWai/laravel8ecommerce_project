<?php

namespace App\Http\Livewire\Admin;

use App\Models\ProductAttributes;
use Livewire\Component;

class AdminEditAttributesComponent extends Component
{
    public $name;
    public $attribute_id;

    public function mount($attribute_id)
    {
        $pattribute = ProductAttributes::find($attribute_id);
        $this->attribute_id = $pattribute->id;
        $this->name = $pattribute->name;
    }
    public function updated($fields){
        $this->validateOnly($fields,[
            'name' => 'required',
        ]);
    }

    public function updateAttribue()
    {
        $this->validate([
            'name' => 'required',
        ]);
        $pattribute = ProductAttributes::find($this->attribute_id);
        $pattribute->name = $this->name;
        $pattribute->save();
        session()->flash('message','Attribute has been updated successfully!');
    }

    public function render()
    {
        return view('livewire.admin.admin-edit-attributes-component')->layout('layouts.base');
    }
}
