<?php

use Illuminate\Database\Seeder;
use App\About;
class AboutsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abouts')->insert([
            [
                'title'=>'We offer the Solution',
                'description'=>'Teleyan Call Center is a growing company operating worldwide focusing on inbound/outbound call center services, and web design. We are offering high quality services in all major voice and non- voice segments for small and large enterprises worldwide by meeting all quality standards and delivering requirements successfully. Our solutions and effective call center strategies are here to ensure that business runs smoothly and effectively, and at a low cost to you.'
            ],
            [
                'title'=>'We work 24/7/365',
                'description'=>'Customers, partners, and suppliers do business round the clock. With Teleyan Call Center customers are able to get their questions answered when they demand them. They will appreciate the fact that they can reach you in person whenever it is convenient for them. Also, we get internet from different providers at the same time, so there will not be availability problem.'
            ],
            [
                'title'=>'We have a professional staff',
                'description'=>'We are experts at what we do and will only hire the best agents after a demanding recruiting process. Once part of the team, our call center agents undergo one-on-one training that they are fully qualified and capable of meeting all your goals. Agents carry themselves in a friendly and professional matter projecting only the best image to your clients.'
            ],
            [
                'title'=>'We are flexible',
                'description'=>'Businesses constantly change, and we understand that. Our outsourcing services, solutions, and strategies are designed to provide you with the flexibility you need when things change. We have many qualified agents available for work, and who can quickly adapt to the needs of your business without you having to endure the cost that comes with a changing environment.'
            ],
            [
                'title'=>'And finally, because WE CARE about our partners!',
                'description'=>''
            ]
        ]);
    }
}
