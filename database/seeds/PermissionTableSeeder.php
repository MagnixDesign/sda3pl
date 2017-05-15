<?php

namespace Lavalite\User;

use DB;
use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('permissions')->insert([
            
        ]);

        DB::table('permissions')->insert([
            [
                'name'          => 'user.permission.view',
                'readable_name' => 'View Permission',
            ],
            [
                'name'          => 'user.permission.create',
                'readable_name' => 'Create Permission',
            ],
            [
                'name'          => 'user.permission.edit',
                'readable_name' => 'Update Permission',
            ],
            [
                'name'          => 'user.permission.delete',
                'readable_name' => 'Delete Permission',
            ],
        ]);

        DB::table('settings')->insert([
            // Uncomment  and edit this section for entering value to settings table.
            /*
            [
                'key'      => 'user.permission.key',
                'name'     => 'Some name',
                'value'    => 'Some value',
                'type'     => 'Default',
            ],
            */
        ]);
    }
}
