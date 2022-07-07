<?php

namespace App\Http\Livewire\Admin;

use App\Models\ProductAttributes;
use Livewire\Component;

class AdminAttributesComponent extends Component
{
    public function deleteAttribute($attribute_id)
    {
        $pattributes = ProductAttributes::find($attribute_id);
        $pattributes->delete();
        session()->flash('message','Attribute has been deleted successfully!');
    }
    public function render()
    {
        $pattributes = ProductAttributes::paginate(10);
        return view('livewire.admin.admin-attributes-component',['pattributes'=>$pattributes])->layout('layouts.base');
    }
}
