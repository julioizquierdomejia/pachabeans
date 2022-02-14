<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;



class RoleSedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $role_admin = Role::create(['name' => 'Admin']);
        $role_user = Role::create(['name' => 'User']);

        Permission::create(['name' => 'admin'])->syncRoles([$role_admin]);
        Permission::create(['name' => 'user'])->syncRoles([$role_user]);
    }
}
