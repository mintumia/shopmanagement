<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Livewire\Component;

class Formtest extends Component
{

    /*public  $comments =[
        ['body'=>'Comments','created_at'=>'5 minutes ago!','created_by'=>'Md. Mintu Mia']
    ];*/
    //public  $comments;
    public  $comments =[
        ['body'=>'Comments','created_at'=>'5 minutes ago!','created_by'=>'Md. Mintu Mia']
    ];
    public $newComments;



/*public function updated(){

    echo $this->comments;

}*/


public function addComments(){

array_unshift($this->comments,['body'=>$this->newComments,
    'created_at'=>Carbon::now()->diffForHumans(),
    'created_by'=>'Md. Mintu Mia']);

   /* $this->comments[] =['body'=>'Comments2',
        'created_at'=>'10 minutes ago!',
        'created_by'=>'Md. Mintu Mia2'];*/

}



    public function render()
    {
        return view('livewire.formtest');
    }
}
