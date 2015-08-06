<?php
use App\Agent;
use App\Supplier;
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
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
        Model::reguard();
    }
}

class AgentTableSeeder extends Seeder {

    public function run()
    {
        DB::table('agents')->delete();
        
        Agent::create(['email' => 'agent@livingadventure.com', 'first_name' => 'Kalyan', 'last_name' => 'Dey', 'password' => md5('123456livingadventure')]);
    }

}
class SupplierTableSeeder extends Seeder {

    public function run()
    {
        DB::table('suppliers')->delete();

        Supplier::create(['email' => 'supplier@livingadventure.com', 'first_name' => 'Samim', 'last_name' => 'Almamun', 'password' => md5('123456livingadventure'),'status' => 'Active']);
    }

}
