<div>
    <form wire:submit.prevent="create">
        <input type="text" wire:model="mark">
        <input type="text" wire:model="model">
        <input type="text" wire:model="number">
        <input type="submit">
    </form>

    <select name="" id="">
        @foreach ($automobiles as $automobile)
            <option value="">{{$automobile->mark}} {{$automobile->model}} {{$automobile->number}}</option>
        @endforeach
    </select>
</div>
