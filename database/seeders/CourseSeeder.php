<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        Course::create([
            'name_course' => 'Sola Scriptura',
            'descricao_course' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur consectetur volutpat nibh nec mattis. Suspendisse facilisis odio vel sagittis tincidunt. Sed congue, mauris sed mattis euismod, dolor dui ornare nisl, in posuere dolor orci non mi. Duis dapibus urna et arcu dictum pretium. Pellentesque tincidunt vehicula congue. Donec nec elit metus. Aliquam venenatis eleifend lacus at suscipit.',
            'value_course' => '499.00',
            'duracao_course' => '2 anos',
            'instrutor_course' => 'Fabio José',
            'img_course' => 'teste',
            'msg_course' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur consectetur volutpat nibh nec mattis.',
            'status_course' => '1',
            'type_course' => '2',
        ]);
        Course::create([
            'name_course' => 'Sola Scriptura 2',
            'descricao_course' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur consectetur volutpat nibh nec mattis. Suspendisse facilisis odio vel sagittis tincidunt. Sed congue, mauris sed mattis euismod, dolor dui ornare nisl, in posuere dolor orci non mi. Duis dapibus urna et arcu dictum pretium. Pellentesque tincidunt vehicula congue. Donec nec elit metus. Aliquam venenatis eleifend lacus at suscipit.',
            'value_course' => '80.00',
            'duracao_course' => '2 anos',
            'instrutor_course' => 'Fabio José',
            'img_course' => 'teste',
            'msg_course' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur consectetur volutpat nibh nec mattis.',
            'status_course' => '1',
            'type_course' => '1',
        ]);
        Course::create([
            'name_course' => 'Sola Scriptura 3',
            'descricao_course' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur consectetur volutpat nibh nec mattis. Suspendisse facilisis odio vel sagittis tincidunt. Sed congue, mauris sed mattis euismod, dolor dui ornare nisl, in posuere dolor orci non mi. Duis dapibus urna et arcu dictum pretium. Pellentesque tincidunt vehicula congue. Donec nec elit metus. Aliquam venenatis eleifend lacus at suscipit.',
            'value_course' => '100.00',
            'duracao_course' => '2 anos',
            'instrutor_course' => 'Fabio José',
            'img_course' => 'teste',
            'msg_course' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur consectetur volutpat nibh nec mattis.',
            'status_course' => '1',
            'type_course' => '1',
        ]);

    }
}
