<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        
        // generate 3 users/author
        DB::table('users')->insert([
            [
                'name' => "Montassar",
                'email' => "montasar.hermi@gmail.com",
                'password' => bcrypt('secret'),
                'test' => 1,
                
            ]
            
            
        ]);

       
       DB::table('post_types')->insert([
            [
                'type' => "Membre",              
            ],
            [
                'type' => "Public",              
            ],
           
            
            
        ]);

        DB::table('listroles')->insert([
            [
                'title' => "admin",              
            ],
            [
                'title' => "author",              
            ],
            [
                'title' => "editor",              
            ],
            
            
        ]);


        $user=DB::table('users')->where('email','=','montasar.hermi@gmail.com')->first();

  
        DB::table('roles')->insert([


               'title'=>'admin',
               'user_id'=>$user->id

            ]);


     
         
            
    }
}
