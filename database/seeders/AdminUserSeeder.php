<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name="Admin";
        $user->email="manuelromeromiguel@gmail.com";
        $user->password =  Hash::make('ManuelRomero1');
        $user->assignRole("");
        $user->save();
        //
    }
}
