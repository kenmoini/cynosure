<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $defaultRoles = [
            ['name' => 'Confined', 'slug' => 'confined', 'description' => 'Users with no access at all outside of authentication.  Useful for deposting users into a quarantine.'],
            ['name' => 'Read Only', 'slug' => 'read-only', 'description' => 'Users can see all of their resources except they cannot perform any actions.'],
            ['name' => 'Standard User', 'slug' => 'standard-user', 'description' => 'Generic role - has basic functionality.'],
            ['name' => 'Developers', 'slug' => 'developers', 'description' => 'Developers with access to more app-centric functions.'],
            ['name' => 'Operators', 'slug' => 'operators', 'description' => 'Operators have access to more comprehensive cluster operation tools.'],
            ['name' => 'Security', 'slug' => 'security', 'description' => 'SOC Team Access'],
            ['name' => 'Site Reliability Enginer', 'slug' => 'site-reliability-engineer', 'description' => 'SREs have access to DevSecOps utilities and aggregated monitoring.'],
            ['name' => 'Cynosure Admins', 'slug' => 'cynosure-admin', 'description' => 'Cynosure Admins can access everything that has been configured on this Cynosure instance.']
        ];

        Role::insert($defaultRoles);
    }
}
