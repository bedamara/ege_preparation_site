<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $administrator = new User();
        $administrator -> name = 'Maria Beda';
        $administrator -> email = 'mnb.trouble@gmail.com';
        $administrator -> password = Hash::make(123456);
        $administrator -> user_role_id = 1;
        $administrator -> last_login =Carbon::now();
        $administrator -> save();
    }
}
