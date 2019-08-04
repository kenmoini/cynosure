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
            'setting_type' => 'int_boolean',
            'description' => 'Has initial setup been completed?',
            'configurable' => '0'
        ]);
        DB::table('cynosure_settings')->insert([
            'name' => 'Registration Type',
            'key' => 'global.registration_type',
            'value' => 'open',
            'system_default' => 'open',
            'setting_type' => 'select',
            'description' => 'Registration limits on either if anyone can register, closed to public registration, or only whitelist domains are allowed to register.',
            'available_options' => json_encode([['open' => 'Open - Anyone can register', 'closed' => 'Closed - Registration page disabled', 'whitelist' => 'Whitelist - Only specific domains can register']]),
            'available_options_data_type' => 'json',
            'configurable' => '1'
        ]);
        DB::table('cynosure_settings')->insert([
            'name' => 'Registration Whitelist',
            'key' => 'global.registration_domain_whitelist',
            'value' => '',
            'system_default' => '',
            'setting_type' => 'input-textarea',
            'description' => 'Domains allowed to register with Cynosure.  Separate by new line, a single domain per line.',
            'configurable' => '1'
        ]);
        DB::table('cynosure_settings')->insert([
            'name' => 'Default Registration Role',
            'key' => 'global.registration_default_role',
            'value' => 'cynosure-admin',
            'system_default' => 'cynosure-admin',
            'setting_type' => 'select',
            'description' => 'What roles are set for a newly registered user?',
            'available_options' => 'RoleController@jsonListOfRolesAJAX',
            'available_options_data_type' => 'class_function',
            'configurable' => '1'
        ]);
    }
}
