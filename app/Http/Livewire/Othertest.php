<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Carbon\Carbon;

class Othertest extends Component
{
    public $count = 0;
    public $text = "";


    public function increment(){

     $this->text =  "Hellow = " .$this->count++." (". Carbon::now().")";
    }

    public function decrement(){

        $this->text = "Bye = " .$this->count--." (". Carbon::now().")";
    }

    public function render()
    {
        return view('livewire.othertest');
    }
}
