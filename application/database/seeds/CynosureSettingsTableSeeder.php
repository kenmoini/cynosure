<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CynosureSettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cynosure_settings')->insert([
            'name' => 'OOBE Finished',
            'key' => 'global.oobe_finished',
            'value' => '0',
            'system_default' => '0',
            'description' => 'Has initial setup been completed?',
            'configurable' => '0'
        ]);
        DB::table('cynosure_settings')->insert([
            'name' => 'registration_type',
            'key' => 'global.registration_type',
            'value' => '0',
            'system_default' => '0',
            'description' => 'Registration limits',
            'configurable' => '1'
        ]);
        DB::table('cynosure_settings')->insert([
            'name' => 'Registration Whitelist',
            'key' => 'global.registration_domain_whitelist',
            'value' => '',
            'system_default' => '',
            'description' => 'Domains allowed to register with Cynosure',
            'configurable' => '1'
        ]);
        DB::table('cynosure_settings')->insert([
            'name' => 'Default Registration Role',
            'key' => 'global.registration_default_role',
            'value' => 'cynosure-admin',
            'system_default' => 'cynosure-admin',
            'description' => 'What roles are set for a newly registered user?',
            'configurable' => '1'
        ]);
    }
}
