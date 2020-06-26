<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Date;

class AdminsTableSeeder extends Seeder
{
     /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'first_name' => 'Super',
            'last_name' => "Admin",
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin123'),
            'email_verified_at' => $this->freshTimestamp(),
            'is_super' => true,
            'created_at' => $this->freshTimestamp(),
            'updated_at' => $this->freshTimestamp(),
        ]);
    }

    /**
     * Get a fresh timestamp for the model.
     *
     * @return \Illuminate\Support\Carbon
     */
    public function freshTimestamp()
    {
        return Date::now();
    }
}
