<?php

use Illuminate\Database\Seeder;
use App\Home;
class HomesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Home::create([
            'title'=>'WELCOME TO TELEYAN',
            'text'=>'Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.',
            'image'=>'welcom.jpg'
        ]);
    }
}
