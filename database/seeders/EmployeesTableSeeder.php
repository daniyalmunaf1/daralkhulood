<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Employee;
use App\Models\Equipment;
use App\Models\Service;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Employee::truncate();
        Employee::create([
            'name' => 'James Daniel',
            'designation' => 'Rental Manager',
            'image' => '/app/public/team/team-user-1.jpg',
            'facebook' => 'https://facebook.com',
            'twitter' => 'https://twitter.com',
            'instagram' => 'https://instagram.com',
            'linkedin' => 'https://linkedin.com',
            'youtube' => 'https://youtube.com',
        ]);

        Employee::create([
            'name' => 'James Daniel',
            'designation' => 'Rental Manager',
            'image' => '/app/public/team/team-user-2.jpg',
            'facebook' => 'https://facebook.com',
            'twitter' => 'https://twitter.com',
            'instagram' => 'https://instagram.com',
            'linkedin' => 'https://linkedin.com',
            'youtube' => 'https://youtube.com',
        ]);

        Employee::create([
            'name' => 'James Daniel',
            'designation' => 'Rental Manager',
            'image' => '/app/public/team/team-user-3.jpg',
            'facebook' => 'https://facebook.com',
            'twitter' => 'https://twitter.com',
            'instagram' => 'https://instagram.com',
            'linkedin' => 'https://linkedin.com',
            'youtube' => 'https://youtube.com',
        ]);

        Employee::create([
            'name' => 'James Daniel',
            'designation' => 'Rental Manager',
            'image' => '/app/public/team/team-user-4.jpg',
            'facebook' => 'https://facebook.com',
            'twitter' => 'https://twitter.com',
            'instagram' => 'https://instagram.com',
            'linkedin' => 'https://linkedin.com',
            'youtube' => 'https://youtube.com',
        ]);

        


        Service::truncate();
        Service::create([
            'title' => 'Power Generation',
            'description' => 'Excepteur sint occaecat cupidata proident in culpa qui officia deserunt mollit anim labor Sed ut perspiciatis unde omnis.',
            'image' => '/app/public/service/solution-item-1.jpg',
            'subtitle' => 'For any power needs.',
        ]);
        Service::create([
            'title' => 'Power Generation',
            'description' => 'Excepteur sint occaecat cupidata proident in culpa qui officia deserunt mollit anim labor Sed ut perspiciatis unde omnis.',
            'image' => '/app/public/service/solution-item-2.jpg',
            'subtitle' => 'For any power needs.',
        ]);
        Service::create([
            'title' => 'Power Generation',
            'description' => 'Excepteur sint occaecat cupidata proident in culpa qui officia deserunt mollit anim labor Sed ut perspiciatis unde omnis.',
            'image' => '/app/public/service/solution-item-3.jpg',
            'subtitle' => 'For any power needs.',
        ]);

        Equipment::truncate();
        Equipment::create([
            'title' => 'Aerial Machines',
            'description' => 'Excepteur sint occaecat cupidata proident in culpa qui officia deserunt mollit anim labor Sed ut perspiciatis unde omnis.',
            'image' => '/app/public/equipment/cat-item-1.jpg',
            'logo' => '/app/public/equipment/ico-cat-item-1.png',
        ]);
        Equipment::create([
            'title' => 'Aerial Machines',
            'description' => 'Excepteur sint occaecat cupidata proident in culpa qui officia deserunt mollit anim labor Sed ut perspiciatis unde omnis.',
            'image' => '/app/public/equipment/cat-item-2.jpg',
            'logo' => '/app/public/equipment/ico-cat-item-2.png',
        ]);
        Equipment::create([
            'title' => 'Aerial Machines',
            'description' => 'Excepteur sint occaecat cupidata proident in culpa qui officia deserunt mollit anim labor Sed ut perspiciatis unde omnis.',
            'image' => '/app/public/equipment/cat-item-3.jpg',
            'logo' => '/app/public/equipment/ico-cat-item-3.png',
        ]);
        Equipment::create([
            'title' => 'Aerial Machines',
            'description' => 'Excepteur sint occaecat cupidata proident in culpa qui officia deserunt mollit anim labor Sed ut perspiciatis unde omnis.',
            'image' => '/app/public/equipment/cat-item-4.jpg',
            'logo' => '/app/public/equipment/ico-cat-item-4.png',
        ]);
        Equipment::create([
            'title' => 'Aerial Machines',
            'description' => 'Excepteur sint occaecat cupidata proident in culpa qui officia deserunt mollit anim labor Sed ut perspiciatis unde omnis.',
            'image' => '/app/public/equipment/cat-item-5.jpg',
            'logo' => '/app/public/equipment/ico-cat-item-5.png',
        ]);
    }
}
