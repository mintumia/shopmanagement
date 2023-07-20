<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Carbon\Carbon;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;


class Othertest extends Component
{

    public $count = 0;
    public $text = "";


    public function increment(){
    if($this->count>=10){


        return redirect('errors.404');
    }
     $this->text =  "Hellow = " .++$this->count." (". Carbon::now().")";
    }

    public function decrement(){

        $this->text = "Bye = " .--$this->count." (". Carbon::now().")";
    }

    public function render()
    {
        return view('livewire.othertest');
    }
}
