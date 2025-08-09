<?php

namespace App\Livewire;

use Livewire\Component;

class Select extends Component
{

    public $options = [];
    public $selected = [];

    public function mount()
    {
        $this->options = [
            ['id' => 1, 'name' => 'Opção A'],
            ['id' => 2, 'name' => 'Opção B'],
            ['id' => 3, 'name' => 'Opção C'],
            ['id' => 4, 'name' => 'Opção D'],
        ];

        $this->selected = [3];
    }
    

    public function render()
    {
        return view('livewire.select');
    }
}
