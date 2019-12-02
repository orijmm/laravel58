<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = App\User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'phone' => '+585454645654',
            'address' => 'direccion',
            'birthday' => '02-02-2000',
            'active' => 1,
            'remember_token' => Str::random(10),
        ]);

        $admin->assignRole('admin');

        factory(App\User::class, 4)->create()->each(function ($basicuser) {
            $basicuser->assignRole('user');
        });
        //factory(App\User::class, 4)->create();
        /*factory(App\User::class, 4)->create()->each(function ($user) {
        $user->posts()->save(factory(App\Post::class)->make());
        });*/

    }
}
