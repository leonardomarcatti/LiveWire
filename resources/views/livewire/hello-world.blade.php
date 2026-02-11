<div class="mb-3 col-4 offset-4 p-4" style="background-color: {{ $color }}">
    <h3>Olá {{ $name }}</h3>
    <input type="text" id="name" name="name" wire:model="newValue" class="form-control" />
    <button type="button" wire:click="updateName('{{$newValue}}')" class="btn btn-outline-warning">Update name</button>
    <select name="" id="" wire:model.change="name" class="form-control">
        <option value="null" selected>Select Value</option>
        <option value="Fulano">Fulano</option>
        <option value="Beltrano">Beltrano</option>
        <option value="Ciclano">Ciclano</option>
    </select>
    <div class="mt-4">
        <label for="color" class="form-label">Selecione a cor de fundo:</label>
        <input type="color" id="color" name="color" wire:model.live="color" class="form-control" />
    </div>
</div>
