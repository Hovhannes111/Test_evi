<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::query()->updateOrCreate(
            ['email' => 'admin@gmail.com'],
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('1111'),
                'role_id' => 2
            ]
        );

        for ($i = 0; $i < 10; $i++) {
            DB::table('users')->insert([
                'name' => Str::random(10),
                'email' => Str::random(10) . '@gmail.com',
                'password' => bcrypt('1111'),
                'role_id' => 1
            ]);
        }

        $roles = [
          [
              'id' => 1,
              'name' => 'user'
          ],
          [
              'id' => 2,
              'name' => 'admin'
          ]
        ];

        Role::query()->upsert(
            $roles,
            ['id']
        );
    }
}
