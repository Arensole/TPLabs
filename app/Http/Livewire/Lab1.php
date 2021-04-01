<?php

namespace App\Http\Livewire;

use App\Models\Automobiles;
use Livewire\Component;

class Lab1 extends Component
{
    public $mark;
    public $model;
    public $number;

    public function create()
    {
        $this->validate([
            'mark' => 'required|min:5',
            'model' => 'required|min:5',
            'number' => 'required|min:5',
        ]);
        Automobiles::create([
            'mark' => $this->mark,
            'model' => $this->model,
            'number' => $this->number,
        ]);
    }

    public function render()
    {
        return view('livewire.lab1', [
            'automobiles' => Automobiles::all(),
        ]);
    }
}
