<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesandPerms extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
       Role::Create(array('name' => 'guest','name' => 'client','name' => 'boss'));

        Permission::create(['name'=>'create guest','name'=>'create client','name'=>'create boss']);



//$this->call(RolesandPerms::class);




    }
}
