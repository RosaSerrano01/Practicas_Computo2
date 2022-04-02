<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Pet;


class Crud extends Component
{
    public $pets;
    public function render()
    {
        $this->pets=Pet::all();
        return view('livewire.crud');
    }
}
