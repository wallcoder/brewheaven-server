<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Process;
use Spatie\Permission\Models\Role as ModelsRole;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $user = User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password')
        ]);


        $superRole = ModelsRole::create(['name' => 'super_admin']);

        $user->assignRole($superRole);


        Process::run("php artisan shield:generate --all --panel=admin --ignore-existing-policies");
        Process::run("php artisan shield:super-admin --user={$user->id} --panel=admin");


    }


      
        


    
}
