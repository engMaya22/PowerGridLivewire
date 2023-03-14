<?php

namespace App\Http\Livewire;

use App\Models\Item;
use LivewireUI\Modal\ModalComponent;

class EditItem extends ModalComponent
{
    public Item $item;

    public function mount($id)
    {
    
        $this->item = Item::find($id);
    }
    public function update()
    {
        $this->validate();
        $this->item->save();
        $this->skipPreviousModal()->closeModalWithEvents([
            $this->getTitle() => 'ItempUpdated'
        ]);
    }


    public function render()
    {
        return view('livewire.edit-item');
    }
    protected function rules(): array
     {
            return [
                'item.title' => ['required' , 'string'],
                'item.description' => ['required' ]
            ];
     }
    
}
