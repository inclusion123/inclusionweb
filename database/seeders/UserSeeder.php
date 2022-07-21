<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $keys = [
            'name',
            'email',
            'password',
            'email_verified_at',
            'role'
        ];

        $values = [
            ['Admin', 'admin@inclusionsoft.com', bcrypt('12345678'), '2022-06-23 10:44:35', 1],
        ];

        $insert_array = [];

        foreach ($values as $value) {
            $insert_array[] = array_combine($keys, $value);
        }

        DB::table('users')->delete();
        DB::table('users')->insert($insert_array);
    }
}
