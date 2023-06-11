<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            'name' => 'Михаил',
            'surname' => 'Осипов',
            'patronymic' => 'Сергеевич',
            'login' => 'michael',
            'email' => 'misha@mail.ru',
            'password' => '123456'
        ];

        User::create($user);
    }
}
