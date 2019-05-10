<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;
class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        //DB::table('roles')->truncate();
        //create admin role
        
        $admin=new Role();

        $admin->name="admin";
        $admin->display_name="Admin";
        $admin->save();

        //create Author role

        $author=new Role();
        $author->name="author";
        $author->display_name="Author";
        $author->save();
         

        //create Editor role
        $editor=new Role();
        $editor->name="editor";
        $editor->display_name="Editor";
        $editor->save();
         
               

        
    }
}
