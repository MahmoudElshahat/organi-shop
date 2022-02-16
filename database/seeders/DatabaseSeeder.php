<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Multitenancy\Models\Tenant;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */

        public function run()
    {
        Tenant::checkCurrent()
           ? $this->runTenantSpecificSeeders()
           : $this->runLandlordSpecificSeeders();
    }

    public function runTenantSpecificSeeders()
    {
        // run tenant specific seeders
        $this->call([
            
            categoriSeeder::class,

            attr_valueSeeder::class,

            attr_nameSeeder::class,

            blogSeeder::class,

            productSeeder::class,


        ]);
    }

    public function runLandlordSpecificSeeders()
    {
        // run landlord specific seeders
    }



}//end class
