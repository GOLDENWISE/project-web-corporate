<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Cooperation;
use App\Models\Country;
use App\Models\Industry;
use App\Models\OrganizationType;

class DatabaseSeeder extends Seeder {

  public function run(){

    User::create([
      'username' => 'Admin',
      'password' => bcrypt('adminpassword')
    ]);

    // Cooperation::factory(20)->create();
    // Country::factory(14)->create();
    // Industry::factory(8)->create();
    // OrganizationType::factory(4)->create();

    // Cooperation::create([
    //   'name' => 'Pertamina',
    //   'cooperation_started_from' => '2023-08-12',
    //   'organization_type' => 'Development Agency',  
    //   'industry_type' => 'Renewable Energy',  
    //   'country' => 'Indonesia'  
    // ]);
    
    // Cooperation::create([
    //   'name' => 'Petronas',
    //   'cooperation_started_from' => '2023-08-14',
    //   'organization_type' => 'Finance/Banking',  
    //   'industry_type' => 'Others',  
    //   'country' => 'Indonesia' 
    // ]);
    
    // Cooperation::create([
    //   'name' => 'Shell',
    //   'cooperation_started_from' => '2023-08-16',
    //   'organization_type' => 'Commercial Company',  
    //   'industry_type' => 'Hydrogen, ammonia',  
    //   'country' => 'Indonesia' 
    // ]);

  }

}