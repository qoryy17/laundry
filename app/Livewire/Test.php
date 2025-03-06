<?php

namespace App\Livewire;

use Livewire\Component;

class Test extends Component
{
    public $count = 0;

    public function increment()
    {
        $this->count++;
    }

    public function render()
    {
        return view('livewire.test', ['title' => 'ada'])->layout('layouts.body');
    }
}
