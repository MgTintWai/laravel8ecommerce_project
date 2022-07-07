<?php

namespace App\Http\Livewire\Admin;

use App\Models\ProductAttributes;
use Attribute;
use Livewire\Component;

class AdminAddAttributesComponent extends Component
{
    public $name;

    public function updated($fields){
        $this->validateOnly($fields,[
            'name' => 'required',
        ]);
    }

    public function storeAttributes()
    {
        $this->validate([
            'name' => 'required',
        ]);
        $attributes = new ProductAttributes();
        $attributes->name = $this->name;
        $attributes->save();
        session()->flash('message','Attributes has been updated successfully!');
    }
    public function render()
    {
        return view('livewire.admin.admin-add-attributes-component')->layout('layouts.base');
    }
}
