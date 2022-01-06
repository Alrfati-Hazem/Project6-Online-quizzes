<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('exams')->insert([
            [
            'name'          => 'HTML',
            'description'   => 'HTML is a primary markup language for creating websites. Test your knowledge with this basic HTML quiz made especially for beginners.',
            'image'         => 'html-5.png',
            'category_id'   => "1"
            ],
            [
            'name'          => 'CSS',
            'description'   => '(CSS) Add the style and graphics to your page to make it interactive.Test your knowledge with this basic CSS quiz made especially for beginners.',
            'image'         => 'css-3.png',
            'category_id'   => "1"
            ],
            [
            'name'          => 'JavaScript',
            'description'   => 'JS is programming language that adds interactivity to your website. Test your knowledge with this basic JS quiz made especially for beginners.',
            'image'         => 'js.png',
            'category_id'   => "1"
            ]
        ]);
    }
}
