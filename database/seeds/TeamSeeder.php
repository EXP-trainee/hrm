<?php

use Illuminate\Database\Seeder;
use App\Team;
class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Team::truncate();
        Team::create([
            'name'=>'Base',
        ]);
        Team::create([
            'name'=>'Giran',
        ]);
        Team::create([
            'name'=>'Hunter Village',
        ]);
        Team::create([
            'name'=>'Gludin',
        ]);
        Team::create([
            'name'=>'Talking Island',
        ]);
        Team::create([
            'name'=>'Arcan',
        ]);
    }
}
