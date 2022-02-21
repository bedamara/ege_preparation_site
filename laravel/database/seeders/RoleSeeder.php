<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new Role();
        $admin -> role = 'администратор';
        $admin -> save();
        
        $moderator = new Role();
        $moderator -> role = 'модератор';
        $moderator -> save();

        $user = new Role();
        $user -> role = 'пользователь';
        $user -> save();
    }
}
