<?php
    
    namespace database\seeds;
    
    use Illuminate\Database\seeds;
    
    class UsersTableSeeder extends \DatabaseSeeder
    {
        // create 100 User table records that Will be created in the database
        public function run()
        {
            factory('App\User', 100)->create();
        }
    }