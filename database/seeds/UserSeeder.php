<?php

use Illuminate\Database\Seeder;
use App\User;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'usr_name' => 'Admin',
            'usr_email' => 'admin@gmail.com',
            'usr_phone' => '08213456789',
            'usr_password' => Hash::make('admin123'),
            'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
            'usr_is_active' => true,
        ]);

        $admin->assignRole('admin');

        $user = User::create([
            'usr_name' => 'User',
            'usr_email' => 'user@gmail.com',
            'usr_phone' => '08213456789',
            'usr_password' => Hash::make('user123'),
            'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
            'usr_is_active' => true,
        ]);

         $user->assignRole('user');
       $user = User::create([
            'usr_name' => 'Dian',
            'usr_email' => 'Dian@gmail.com',
            'usr_phone' => '08213456789',
            'usr_password' => Hash::make('user123'),
            'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
            'usr_is_active' => true,
        ]);

         $user->assignRole('user');
         $user = User::create([
            'usr_name' => 'Eka',
            'usr_email' => 'eka@gmail.com',
            'usr_phone' => '08213456789',
            'usr_password' => Hash::make('user123'),
            'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
            'usr_is_active' => true,
        ]);

         $user->assignRole('user');
         $user = User::create([
            'usr_name' => 'Evi',
            'usr_email' => 'evi@gmail.com',
            'usr_phone' => '08213456789',
            'usr_password' => Hash::make('user123'),
            'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
            'usr_is_active' => true,
        ]);

         $user->assignRole('user');
         $user = User::create([
            'usr_name' => 'Fina',
            'usr_email' => 'fina@gmail.com',
            'usr_phone' => '08213456789',
            'usr_password' => Hash::make('user123'),
            'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
            'usr_is_active' => true,
        ]);

         $user->assignRole('user');
         $user = User::create([
            'usr_name' => 'Serli',
            'usr_email' => 'serli@gmail.com',
            'usr_phone' => '08213456789',
            'usr_password' => Hash::make('user123'),
            'usr_email_verified_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'usr_verification_token' => str_replace('/', '', Hash::make(Str::random(12))),
            'usr_is_active' => true,
        ]);

         $user->assignRole('user');

       
    }
}
