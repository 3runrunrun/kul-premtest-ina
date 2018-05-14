<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->truncate();
      $user = app()->make('App\User');
      $hasher = app()->make('hash');

      $password = $hasher->make('kulina');
      $api_token = sha1(time());
      $user->fill([
        'name' => 'Fathir Qisthi',
        'email' => 'fathiriq@gmail.com',
        'password' => $password,
        'api_token' => $api_token,
      ]);
      $user->save();
    }
}
