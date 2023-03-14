<div class="p-8">
   <form wire:submit.prevent="update">
 <div>
    <label for="title" :value="__('Title')"> </label>
    <input id="title"  class="block mt-1 w-full" type="text" wire:model.defer="item.title"/>
 </div>
 <div>
    <label for="description" :value="__('Description')"> </label>
    <input id="description"  class="block mt-1 w-full" type="text" wire:model.defer="item.description"/>
 </div>
   </form>
</div>
