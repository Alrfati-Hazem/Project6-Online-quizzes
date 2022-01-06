<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('questions')->insert([

            [
              'content'         => 'Which of the following is used to create Web Pages ?',
              'option1'         => 'C++',
              'option2'         => 'HTML',
              'option3'         => 'Java',
              'option4'         => 'CSS',
              'correct_answer'  => 'HTML',
              'point'           => '2',
              'exam_id'         => '1'
            ],
            [
              'content'         => 'HTML is a set of markup ?',
              'option1'         => 'tags',
              'option2'         => 'sets',
              'option3'         => 'attributes',
              'option4'         => 'none',
              'correct_answer'  => 'tags',
              'point'           => '2',
              'exam_id'         => '1'
            ],
            [
              'content'         => 'HTML tags are used to describe document ?',
              'option1'         => 'definition',
              'option2'         => 'content',
              'option3'         => 'language',
              'option4'         => 'model',
              'correct_answer'  => 'content',
              'point'           => '2',
              'exam_id'         => '1'
            ],
            [
              'content'         => 'HTML program is saved using ?',
              'option1'         => '.htmn',
              'option2'         => '.html',
              'option3'         => '.htnl',
              'option4'         => '.index',
              'correct_answer'  => '.html',
              'point'           => '2',
              'exam_id'         => '1'
            ],
            [
              'content'         => 'HTML program can be read and rendered by ?',
              'option1'         => 'Compiler',
              'option2'         => 'Server',
              'option3'         => 'Web Browser',
              'option4'         => 'Interpreter',
              'correct_answer'  => 'Web Browser',
              'point'           => '2',
              'exam_id'         => '1'
            ],
            [
              'content'         => 'HTML tags are surrounded by ______ brackets ?',
              'option1'         => 'Angle',
              'option2'         => 'Curly',
              'option3'         => 'Round',
              'option4'         => 'Squart',
              'correct_answer'  => 'Angle',
              'point'           => '2',
              'exam_id'         => '1'
            ],
            [
              'content'         => 'HTML document can contain _______ ?',
              'option1'         => 'Tags',
              'option2'         => 'Attributes',
              'option3'         => 'Plain Text',
              'option4'         => 'All the above',
              'correct_answer'  => 'All the above',
              'point'           => '2',
              'exam_id'         => '1'
            ],
            [
              'content'         => 'Page designed in HTML is called as ?',
              'option1'         => 'Server Page',
              'option2'         => 'Web page',
              'option3'         => 'Media Page',
              'option4'         => 'none of the above',
              'correct_answer'  => 'Web page',
              'point'           => '2',
              'exam_id'         => '1'
            ],
            [
              'content'         => 'Which of the following is the first web browser ?',
              'option1'         => 'Nexus',
              'option2'         => 'Netscape Navigator',
              'option3'         => 'Internet Explorer',
              'option4'         => 'Mosaic',
              'correct_answer'  => 'Netscape Navigator',
              'point'           => '2',
              'exam_id'         => '1'
            ],
            [
              'content'         => 'Who created the first web browser ?',
              'option1'         => 'Tim Berners Lee',
              'option2'         => 'Jacobs',
              'option3'         => 'Marc Andeersen',
              'option4'         => 'Mozilla foundation',
              'correct_answer'  => 'Tim Berners Lee',
              'point'           => '2',
              'exam_id'         => '1'
            ],
        ]);
    }
}
