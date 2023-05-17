<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Enums;
use App\Models\DocumentType;
use App\Models\EducationLevel;
use App\Models\Group;
use App\Models\Speciality;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\Admin::create([
            'name' => 'Олександр Коваль',
            'role' => Enums\Admin\Role::SUPER_ADMIN,
            'email' => 'super_admin@gmail.com',
            'password' => Hash::make('12345678'),
        ]);

        \App\Models\Admin::create([
            'name' => 'Владислав Щербина',
            'role' => Enums\Admin\Role::ADMIN,
            'email' => 'vlad@gmail.com',
            'password' => Hash::make('12345678'),
        ]);

        \App\Models\Admin::create([
            'name' => 'Заповнювач',
            'role' => Enums\Admin\Role::WRITER,
            'email' => 'teacher@kpi.com',
            'password' => Hash::make('12345678'),
        ]);

        User::create([
            'name' => 'Володимир',
            'surname' => 'Денисенко',
            'patronymic' => 'Віталійович',
            'position_at_work' => 'доцент',
        ]);
        User::create([
            'name' => 'Василь',
            'surname' => 'Парахомин',
            'patronymic' => 'Петрович',
            'position_at_work' => 'Викладач математики',
        ]);
        User::create([
            'name' => 'Галина',
            'surname' => 'Іванівна',
            'patronymic' => 'Мельниченковв',
            'position_at_work' => 'Викладач Історії',
        ]);

        Group::create([
            'name' => 'ТІ',
        ]);

        Group::create([
            'name' => 'ТН',
        ]);

        Group::create([
            'name' => 'ТВ',
        ]);

        EducationLevel::create([
            'name' => 'Бакалаври',
        ]);

        EducationLevel::create([
            'name' => 'Магістри',
        ]);

        Speciality::create([
            'name' => 'Інженерія програмного забезпечення',
            'code' => '121',
        ]);

        Speciality::create([
            'name' => 'Комп\'ютерні науки',
            'code' => '122',
        ]);

        DocumentType::create([
            'name' => 'Силабус',
        ]);

        DocumentType::create([
            'name' => 'Підручник',
        ]);

        DocumentType::create([
            'name' => 'Посібник',
        ]);

        DocumentType::create([
            'name' => 'Конспект лекцій',
        ]);

    }
}
