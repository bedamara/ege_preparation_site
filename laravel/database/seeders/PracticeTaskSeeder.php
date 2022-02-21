<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PracticeTask;
use Carbon\Carbon;


class PracticeTaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $task = new PracticeTask();
        $task -> title = 'Первое задание';
        $task -> text = '2+2=';
        $task -> answer = '4';
        $task -> section_id = 1;
        $task -> creator_id = 1;
        $task -> creation_date = Carbon::now();
        $task -> save();
    }
}
