<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Carbon\Carbon;
use Carbon\Traits;

class MintuHomeTest extends Controller
{

    public function home(){

    //$role = Role::create(["name" => "writer"]);
    //$permission = Permission::create(['name' => 'update article']);

/*$role = Role::findById(1);
$permission = Permission::findById(1);
$role->givePermissionTo($permission);*/

     /*$permission = Permission::findById(3)->name;

      auth()->user(2)->givePermissionTo($permission);*/


echo "Hello from Homes! ".Carbon::now();





    }

    public function testlivewire(Request $request ){
    if (!empty($request->post('comments'))){
        echo "<pre>";
        print_r($request->all());

    }


        return view('layouts.livetest');
    }

    public function formstore(Request $request ){
        if (!empty($request->post('comments'))){
            /*echo "<pre>";
            print_r($request->all());*/

        }


        return view('layouts.livetest');
    }


    //
}
