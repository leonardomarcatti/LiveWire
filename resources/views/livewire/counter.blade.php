<div>
    <h1>{{$number}}</h1>
    <button type="button" class="btn btn-success" wire:click="updateValue('+')">Add ( + )</button>
    <button type="button" class="btn btn-warning" wire:click="updateValue('-')">Del ( - )</button>
    <button type="button" class="btn btn-warning" wire:click="$set('number', 3)">Set 3</button>
</div>
