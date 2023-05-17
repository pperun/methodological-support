<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\DocumentType;
use App\Models\EducationLevel;
use App\Models\Group;
use App\Models\Speciality;
use App\Models\User;
use App\Models\Specialization;
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
            'name' => 'Павло Перун',
            'email' => 'pperun@gmail.com',
            'password' => Hash::make('12345678'),
        ]);

        User::create([
            'name' => 'Іванов',
            'surname' => 'Іван',
            'patronymic' => 'Іванович',
            'position_at_work' => 'доцент',
        ]);
        User::create([
            'name' => 'Василенко',
            'surname' => 'Василь',
            'patronymic' => 'Васильович',
            'position_at_work' => 'професор',
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

        Group::create([
            'name' => 'ТФ',
        ]);

        Group::create([
            'name' => 'ТК',
        ]);

        EducationLevel::create([
            'name' => 'Бакалаври',
        ]);

        EducationLevel::create([
            'name' => 'Магістри',
        ]);

        Speciality::create([
            'id' => 1,
            'name' => 'Інженерія програмного забезпечення',
            'code' => '121',
        ]);

        Speciality::create([
            'id' => 2,
            'name' => 'Комп\'ютерні науки',
            'code' => '122',
        ]);

        Speciality::create([
            'id' => 3,
            'name' => 'Енергетичне машинобудування',
            'code' => '142',
        ]);

        Speciality::create([
            'id' => 4,
            'name' => 'Атомна енергетика',
            'code' => '143',
        ]);

        Speciality::create([
            'id' => 5,
            'name' => 'Теплоенергетика',
            'code' => '144',
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

        Specialization::create([
            'name' => 'Інженерія програмного забезпечення в енергетиці',
            'speciality_id' => 1,
        ]);

        Specialization::create([
            'name' => 'Веб-розробка',
            'speciality_id' => 1,
        ]);

        Specialization::create([
            'name' => 'Комп\'ютерне моделювання',
            'speciality_id' => 2,
        ]);

        Specialization::create([
            'name' => 'Комп\'ютерне моделювання енергетичних процесів',
            'speciality_id' => 2,
        ]);

        Specialization::create([
            'name' => 'Прикладне енергетичне машинобудування',
            'speciality_id' => 3,
        ]);

        Specialization::create([
            'name' => 'Моделювання поведніки енергетичних систем',
            'speciality_id' => 3,
        ]);

        Specialization::create([
            'name' => 'Атомні реактори',
            'speciality_id' => 4,
        ]);

        Specialization::create([
            'name' => 'Атомні станції',
            'speciality_id' => 4,
        ]);

        Specialization::create([
            'name' => 'Термічні процеси',
            'speciality_id' => 5,
        ]);

        Specialization::create([
            'name' => 'Хімічні процеси',
            'speciality_id' => 5,
        ]);
    }
}
