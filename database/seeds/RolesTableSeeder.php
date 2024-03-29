<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            'manager',
            'developer',
        ];

        foreach ($roles as $role) {
            \App\Models\Role::firstOrCreate([
                'name' => $role,
            ]);
        }
    }
}
