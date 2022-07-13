<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\countries;

class countryseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $country=new countries;
        $country->name="pakistan";
        $country->description="Pakistan is a country in South Asia. It is next to India, Iran, Afghanistan, and China. ";
        $country->IP="127.0.0.1";
        $country->save();
    }
}
