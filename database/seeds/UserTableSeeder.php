<?php

use App\Models\Auth\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create(['email'=>'abdul@webequator.com', 'password' => '$2y$10$2dX36HtUXXHB.gC7YOkpV.6jzfEOK.UzJCKlueK5ANkkRFVYnd1WW']); //Xplm@911
        factory(User::class, 30)->create();
    }
}
