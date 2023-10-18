<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\contactu;
use Illuminate\Support\Facades\File;

class ContactuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // by for loop data insert in database  
        // $json = File::get(path:'./database/json/usercontacts.json');
        // $contactus = collect(json_decode($json));

            //for loop condition 5 time multiple database insert to db
            // for($i =1; $i <= 2; $i++){
            //     $contactus->each(function($contactu){
            //         contactu::create([
            //        'user_name' => $contactu->user_name,
            //        'user_email' => $contactu->user_email,
            //        'user_subject' => $contactu->user_subject,
            //        'user_message' => $contactu->user_message
       
            //        ]);
            //    });
            // }
    
       

       

        // Multiple Entery insert in database with by json file 
        // $json = File::get(path:'./database/json/usercontacts.json');
        // $contactus = collect(json_decode($json));

        // $contactus->each(function($contactu){
        //      contactu::create([
        //     'user_name' => $contactu->user_name,
        //     'user_email' => $contactu->user_email,
        //     'user_subject' => $contactu->user_subject,
        //     'user_message' => $contactu->user_message

        //     ]);
        // });
        
        // simple one database insert to db
        // contactu::create([
        //     'user_name' => 'Yahoo Baba',
        //     'user_email' => 'shahrukh@gmail.com',
        //     'user_subject' => 'test subject for yahoo baba',
        //     'user_message' => 'test message'

        // ]);  
    }
}
