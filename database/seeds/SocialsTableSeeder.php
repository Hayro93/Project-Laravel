<?php

use Illuminate\Database\Seeder;
use App\Social;
class SocialsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Social::create([
            'facebook'=>'https://www.facebook.com/CallCenterInArmenia/',
            'google'=>'https://plus.google.com',
            'linkedin'=>'https://www.linkedin.com/company-beta/16260619'
        ]);
    }
}
