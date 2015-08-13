<?php
use App\Agent;
use App\Supplier;
use App\Admin;
use App\Sitesetting;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        
        $this->call(AgentTableSeeder::class);
        $this->call(SupplierTableSeeder::class);
         $this->call(AdminTableSeeder::class);
        $this->call(SitesettingTableSeeder::class);
        
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
        Model::reguard();
    }
}

class AgentTableSeeder extends Seeder {

    public function run()
    {
        DB::table('agents')->delete();
        
        Agent::create(['email' => 'agent@livingadventure.net', 'first_name' => 'Kalyan', 'last_name' => 'Dey', 'password' => '123456']);
    }

}
class SupplierTableSeeder extends Seeder {

    public function run()
    {
        DB::table('suppliers')->delete();
        Supplier::create(['email' => 'supplier@livingadventure.net', 'first_name' => 'Samim', 'last_name' => 'Almamun', 'password' => md5('123456livingadventure'),'status' => 'Active']);

    }

}

class AdminTableSeeder extends Seeder {

    public function run()
    {
        DB::table('admins')->delete();

        Admin::create(['email' => 'admin@livingadventure.net', 'first_name' => 'Kalyan', 'last_name' => 'Dey', 'password' => '123456']);
    }

}

class SitesettingTableSeeder extends Seeder {

    public function run()
    {
        DB::table('sitesettings')->delete();

        Sitesetting::create(['site_name' => 'Living Adventure', 'default_page_title' => 'Welcome to Living Adventure', 'default_meta_keywords' => 'Car, Hotel, Flight search & booking', 'default_meta_description' => 'Car, Hotel, Flight search & booking', 'contact_email' => 'admin@livingadventure.net']);
    }

}
