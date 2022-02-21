<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PracticeSection;
use Carbon\Carbon;

class PracticeSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $firstSection = new PracticeSection();
        $firstSection -> title = 'Первая часть';
        $firstSection -> description = 'Первая часть ЕГЭ по информатике';
        $firstSection -> creator_id = 1;
        $firstSection -> creation_date = Carbon::now();
        $firstSection -> save();

        $firstSection = new PracticeSection();
        $firstSection -> title = 'Вторая часть';
        $firstSection -> description = 'Вторая часть ЕГЭ по информатике';
        $firstSection -> creator_id = 1;
        $firstSection -> creation_date = Carbon::now();
        $firstSection -> save();
    }
}
