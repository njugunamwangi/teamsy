<div>
    <input wire:model="name" type="text" />
    <button wire:click="save" >Submit</button>
    @if($succeed)
        Saved
    @endif
</div>
