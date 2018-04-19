<?php
    
    namespace database\seeds;

    use Illuminate\Database\Seeder;
    use Illuminate\Support\Facades\DB;
    
    
    class CountriesTableSeeder extends \DatabaseSeeder
    {
        public function run()
        {
            DB::table('countries')->delete();
            
            $countries = array(
                array(
                    'id' => 1,
                    'code' => 'US',
                    'name' => 'United States'
                ),
                array(
                    'id' => 2,
                    'code' => 'CA',
                    'name' => 'Canada'
                ),
                array(
                    'id' => 3,
                    'code' => 'AF',
                    'name' => 'Afghanistan'
                ),
                array(
                    'id' => 4,
                    'code' => 'AL',
                    'name' => 'Albania'
                ),
            );
            
            DB::table('countries')->insert($countries);
        }
    }