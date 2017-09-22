<?php

use Illuminate\Database\Seeder;
use App\Team;
class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*Team::create([
            //
                [ErrorException]
                preg_match() expects parameter 2 to be string, array given

            ]);*/
            Team::create([
            [
                'title'=>'John Doe',
                'position'=>'EO & Founder',
                'desc'=>'Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.',
                'image'=>'team2.jpg'
            ],
            [
                'title'=>'Anja Doe',
                'position'=>'Art Director',
                'desc'=>'Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.',
                'image'=>'team1.jpg'
            ],
            [
                'title'=>'Mike Ross',
                'position'=>'Web Designer',
                'desc'=>'Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.',
                'image'=>'team3.jpg'
            ]
        ]);
    }
}
