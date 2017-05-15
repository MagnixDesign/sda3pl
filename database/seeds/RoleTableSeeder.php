<?php

namespace Lavalite\User;

use DB;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('roles')->insert([
            
        ]);

        DB::table('permissions')->insert([
            [
                'name'          => 'user.role.view',
                'readable_name' => 'View Role',
            ],
            [
                'name'          => 'user.role.create',
                'readable_name' => 'Create Role',
            ],
            [
                'name'          => 'user.role.edit',
                'readable_name' => 'Update Role',
            ],
            [
                'name'          => 'user.role.delete',
                'readable_name' => 'Delete Role',
            ],
        ]);

        DB::table('settings')->insert([
            // Uncomment  and edit this section for entering value to settings table.
            /*
            [
                'key'      => 'user.role.key',
                'name'     => 'Some name',
                'value'    => 'Some value',
                'type'     => 'Default',
            ],
            */
        ]);
    }
}
