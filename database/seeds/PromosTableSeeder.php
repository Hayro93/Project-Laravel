<?php

use Illuminate\Database\Seeder;
use App\Promo;
class PromosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('promos')->insert([
            [
                'title'=>'4+',
                'desc'=>'Partners'
            ],
            [
                'title'=>'13+',
                'desc'=>'Projects Done'
            ],
            [
                'title'=>'8+',
                'desc'=>'Clients'
            ]
        ]);
    }
}
