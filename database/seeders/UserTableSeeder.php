<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Hash;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // run the seeder 
        // php artisan make:seeder UserTableSeeder
        $user = User::create([
            'name' => 'Wandie Admin ', 
            'email' => 'wandieinnocent2@gmail.com',
            'password' => Hash::make('wandie22')
        ]);
         
        $role = Role::find(1);

        $permissions = Permission::pluck('id', 'id')->all();
   
        $role->syncPermissions($permissions);
     
        $user->assignRole([$role->id]);

        // run the seeder commands
        //seeder
       /* 
       php artisan db:seed --class=PermissionTableSeeder
        php artisan db:seed --class=RoleTableSeeder
        php artisan db:seed --class=UserTableSeeder 
        
        */    
    }
}
