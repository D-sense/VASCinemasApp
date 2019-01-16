<?php

namespace Modules\Cinema\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SeedCinemasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cinemas')->insert([
            'name' => 'Ozone',
            'address' => "No 3. Festac town. Mainland. Lagos",
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);

        DB::table('cinemas')->insert([
            'name' => 'Filmhouse',
            'address' => "No 3. Yaba road. Mainlan. Lagos",
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);

        DB::table('cinemas')->insert([
            'name' => 'Ground Zero',
            'address' => "No 12. Admiralty way. VI. Lagos",
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
    }
}
