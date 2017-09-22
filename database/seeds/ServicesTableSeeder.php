<?php

use Illuminate\Database\Seeder;
use App\Service;
class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            [
                'title'=>'Inbound Services',
                'description'=>''
            ],
            [
                'title'=>'',
                'description'=>'Customer service'
            ],
            [
                'title'=>'',
                'description'=>'Information support'
            ],
            [
                'title'=>'',
                'description'=>'Delivery information'
            ],
            [
                'title'=>'',
                'description'=>'Dispatching'
            ],
            [
                'title'=>'',
                'description'=>'Technical support'
            ],
            [
                'title'=>'',
                'description'=>'Help desk'
            ],
            [
                'title'=>'',
                'description'=>'Business feedback'
            ],
            [
                'title'=>'',
                'description'=>'Product survey'
            ],
            [
                'title'=>'',
                'description'=>'Order taking'
            ],
            [
                'title'=>'',
                'description'=>'Complaints and escalations.'
            ],
            [
                'title'=>'Outbound Services',
                'description'=>''
            ],
            [
                'title'=>'',
                'description'=>'Telemarketing'
            ],
            [
                'title'=>'',
                'description'=>'Appointment fixing'
            ],
            [
                'title'=>'',
                'description'=>'Sales'
            ],
            [
                'title'=>'',
                'description'=>'Market research'
            ],
            [
                'title'=>'',
                'description'=>'Customer satisfaction surveys'
            ],
            [
                'title'=>'',
                'description'=>'Follow-up calls and mailers.'
            ],
            [
                'title'=>'Interactive services',
                'description'=>''
            ],
            [
                'title'=>'',
                'description'=>'Live chat'
            ],
            [
                'title'=>'',
                'description'=>'Interactive voice response'
            ],
            [
                'title'=>'',
                'description'=>'Email customer service.'
            ],
            [
                'title'=>'Web services',
                'description'=>''
            ],
            [
                'title'=>'',
                'description'=>'Web development'
            ],
            [
                'title'=>'',
                'description'=>'Web design'
            ],
            [
                'title'=>'',
                'description'=>'Online marketing.'
            ]

        ]);
    }
}
