<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $role1 = Role::create(["name"=> "Admin"]);
        $role2 = Role::create(["name"=> "Operador"]);

        Permission::create(["name"=> "admin.index"])->syncRoles([$role1, $role2]);

        Permission::create(["name"=> "admin.usuarios.index"])->syncRoles([$role1, $role2]);
        Permission::create(["name"=> "admin.usuarios.create"])->syncRoles([$role1, $role2]);
        Permission::create(["name"=> "admin.usuarios.edit"])->syncRoles([$role1, $role2]);
        Permission::create(["name"=> "admin.usuarios.destroy"])->syncRoles([$role1, $role2]);
        
        Permission::create(["name"=> "admin.zonas.index"])->syncRoles([$role1, $role2]);
        Permission::create(["name"=> "admin.zonas.create"])->syncRoles([$role1, $role2]);
        Permission::create(["name"=> "admin.zonas.edit"])->syncRoles([$role1, $role2]);
        Permission::create(["name"=> "admin.zonas.destroy"])->syncRoles([$role1, $role2]);


    }
}
