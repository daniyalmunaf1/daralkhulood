<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        // DB::table('role_user')->truncate();

        // $adminRole = Role::where('name','admin')->first();
        // $silverRole = Role::where('name','silver')->first();
        // $goldRole = Role::where('name','gold')->first();


        User::create([
            'name' => 'Admin',
            'number' => '(+968) 9521-9590',
            'address' => '35 Oakridge Lane, NJ 08102',
            'map' => 'https://goo.gl/maps/XdgZbYX9V62UpBwc7',
            'worktime' => 'Monday to Saturday: 9am to 7pm Sunday: Closed',
            'facebook' => 'https://facebook.com',
            'twitter' => 'https://twitter.com',
            'instagram' => 'https://instagram.com',
            'linkedin' => 'https://linkedin.com',
            'youtube' => 'https://youtube.com',
            'videolink' => 'https://youtu.be/IUYs3mYgEPI',
            'email' => 'equipments@domain.net',
            'password' => Hash::make('qwertyuiop'),
            'email_verified_at' => '2022-08-19 18:34:11',
            'logo' => '/app/public/Logo/logo.png',
            'titleicon' => '/app/public/Logo/favicon.png',
            'logodark' => '/app/public/Logo/logo-white.png',
            'slider' => 'Reasons to Choose DAR AL KHULOOD UNITED LLC.  Buy a Part or Equipment in Best Shape with Fully Maintainence.  Need an Equipment on Rent? Get Experts Help.  Get the best rental service that is more cost effective, efficient and Safest.',
        ]);



        
    }
}
