// app/database/seeds/UserTableSeeder.php

<?php

/*
 Populate the User's Table with some fake data
*/

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UserTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->delete();
        User::create(array(
            'firstName'     => 'guest',
            'lastName'     => 'user',
            'username' => 'guest',
            'email'    => 'guest@gmail.com',
            'password' => Hash::make('guestpassword'),
            'isSuperAdmin' => 'No'
        ));
        User::create(array(
            'firstName'     => 'default',
            'lastName'     => 'user',
            'username' => 'default',
            'email'    => 'default.user@gmail.com',
            'password' => Hash::make('defaultpassword'),
            'isSuperAdmin' => 'No'
        ));
        User::create(array(
            'firstName'     => 'Super',
            'lastName'     => 'Admin',
            'username' => 'superadmin',
            'email'    => 'super.admin@gmail.com',
            'password' => Hash::make('superpassword'),
            'isSuperAdmin' => 'Yes'
        ));
        User::create(array(
            'firstName'     => 'Admin',
            'lastName'     => 'Super',
            'username' => 'adminsuper',
            'email'    => 'admin.super@gmail.com',
            'password' => Hash::make('adminpassword'),
            'isSuperAdmin' => 'Yes'
        ));
    }
}