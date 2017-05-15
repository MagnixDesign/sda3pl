<?php

namespace Lavalite\User;

use DB;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            
        ]);

        DB::table('permissions')->insert([
            [
                'name'          => 'user.user.view',
                'readable_name' => 'View User',
            ],
            [
                'name'          => 'user.user.create',
                'readable_name' => 'Create User',
            ],
            [
                'name'          => 'user.user.edit',
                'readable_name' => 'Update User',
            ],
            [
                'name'          => 'user.user.delete',
                'readable_name' => 'Delete User',
            ],
        ]);

        DB::table('settings')->insert([
            // Uncomment  and edit this section for entering value to settings table.
            /*
            [
                'key'      => 'user.user.key',
                'name'     => 'Some name',
                'value'    => 'Some value',
                'type'     => 'Default',
            ],
            */
        ]);
    }
}
