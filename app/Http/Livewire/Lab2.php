<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Log;
use Livewire\Component;

class Lab2 extends Component
{
    public $value;
    public $hello;

    public function writeToConsole()
    {
        Log::info('Hello world!');
    }

    public function mount()
    {
        $this->hello = 'Hello' . rand(0, 2000);
    }

    public function render()
    {

        return view('livewire.lab2',
        [
            'hello' => $this->hello,
        ]);
    }
}
