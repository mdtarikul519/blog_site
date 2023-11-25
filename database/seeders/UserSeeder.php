<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserRole;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
//         UserRole::truncate();
//         DB::table('user_user_role')->truncate();
//         // DB::table('user_user_permission')->truncate();


//         $user_role = new UserRole();
//         $user_role->id = 10;
//         $user_role->name = 'super_admin';
//         $user_role->serial = 1;
//         $user_role->save();

//         $user_role = new UserRole();
//         $user_role->id = 20;
//         $user_role->name = 'admin';
//         $user_role->serial = 2;
//         $user_role->save();

//         $user_role = new UserRole();
//         $user_role->id = 40;
//         $user_role->name = 'user';
//         $user_role->serial = 4;
//         $user_role->save();



//         // UserPermission::truncate();

//         // $permission = new UserPermission();
//         // $user_role->id = 10;
//         // $permission->title = 'can_create';
//         // $permission->permission_serial = 1;
//         // $permission->save();

//         // $permission = new UserPermission();
//         // $user_role->id = 20;
//         // $permission->title = 'can_edit';
//         // $permission->permission_serial = 2;
//         // $permission->save();

//         // $permission = new UserPermission();
//         // $user_role->id = 30;
//         // $permission->title = 'can_delete';
//         // $permission->permission_serial = 3;
//         // $permission->save();

//         User::truncate();
//         $user = new User();
//         $user->name = 'super_admin';
   
//         $user->role_id = 1;
//         $user->phone_number = '016123';
//         $user->email = 'superadmin@gmail.com';
//         $user->password = Hash::make('12345678');
//         $user->save();
//         // $user->roles()->attach([1]);
//         // $user->permissions()->attach([1,2,3]);

//         $user = new User();
//         $user->name = 'admin';
//    ;
//          $user->role_id = 2;
//         $user->phone_number = '016124';
//         $user->email = 'admin@gmail.com';
//         $user->password = Hash::make('12345678');
//         $user->save();
//         // $user->roles()->attach([2]);
//         // $user->permissions()->attach([1,2]);

//         $user = new User();
//         $user->first_name = 'user';
//          $user->role_id = 3;
//         $user->phone_number = '01236485';
//         $user->email = 'coursemanager@gmail.com';
//         $user->password = Hash::make('12345678');
//         $user->save();
//         // $user->roles()->attach([3]);
//         // $user->permissions()->attach([1,2,3]);


//     }
  }
}