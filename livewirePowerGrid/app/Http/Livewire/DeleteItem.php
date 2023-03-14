<?php

namespace App\Http\Livewire;

use App\Models\Item;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class DeleteItem extends ModalComponent
{
    
    public Item $item;

    public function mount($id)
    {
        $this->item = Item::find($id);;
    }

    public function delete()
    {
    
        $this->item->delete();
        $this->skipPreviousModal()->closeModalWithEvents([
            $this->getTitle() => 'ItemDeleted'
        ]);
    }
    public function render()
    {
        return view('livewire.delete-item');
    }
}
