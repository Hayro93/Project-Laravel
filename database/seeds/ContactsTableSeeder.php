<?php

use Illuminate\Database\Seeder;
use App\Contact;
class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contact::create([
            'image'=>'call-center-in-armenia-teleyan-contact-us.png',
            'addres'=>'Yerevan, Armenia',
            'phone1'=>'+1 631 707 8394',
            'phone2'=>'+1 226 783 0816',
            'phone3'=>'+374 95 229 225',
            'email'=>'info@teleyan.com'
        ]);
    }
}
