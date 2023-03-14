<div class="p-8">
    <form wire:submit.prevent="add">
  <div>
     <label for="title" > </label>
     <input id="title"  class="block mt-1 w-full" type="text" wire:model.defer="item.title"/>
  </div>
  <div>
     <label for="description" > </label>
     <input id="description"  class="block mt-1 w-full" type="text" wire:model.defer="item.description"/>
  </div>
    </form>
 </div>
