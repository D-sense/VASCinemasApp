<?php

namespace Modules\Cinema\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Cinema\Entities\Cinema;
use Illuminate\Support\Facades\DB;


class CinemaDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $this->call(SeedCinemasTableSeeder::class);
    }

    
}
