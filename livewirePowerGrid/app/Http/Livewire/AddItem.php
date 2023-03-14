<?php

namespace App\Http\Livewire;

use App\Models\Item;
use LivewireUI\Modal\ModalComponent;
use Livewire\Component;
class AddItem extends  ModalComponent
{
   
   public Item $item;

    public function add()
    {   $this->validate();
        $newItem = new Item();
        $newItem ->title = $this->item->title;
        $newItem ->description = $this->item->description;
        $newItem ->status = Item::NOT_COMPLETED ;
        $newItem->save();
        $this->closeModal();

    }
    public function render()
    {
        return view('livewire.add-item');
    }
    protected function rules(): array
     {
            return [
                'item.title' => ['required' , 'string'],
                'item.description' => ['required' ]
            ];
     }
}
