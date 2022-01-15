<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionThreeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // PHP
         DB::table('questions')->insert([
            [
              'content'         => 'What does isset() function do in PHP?',
              'option1'         => 'It checks whether variable is set or not ',
              'option2'         => 'It checks whether variable is free or not',
              'option3'         => 'all',
              'option4'         => 'none',
              'correct_answer'  => 'It checks whether variable is set or not ',
              'point'           => '2',
              'exam_id'         => '4'
            ],
            [
              'content'         => 'What is the use of strlen( ) function in PHP?',
              'option1'         => 'all',
              'option2'         => 'none',
              'option3'         => 'It returns the value of a string',
              'option4'         => 'It returns the length of a string ',
              'correct_answer'  => 'It returns the length of a string ',
              'point'           => '2',
              'exam_id'         => '4'
            ],
            [
              'content'         => 'How many types of levels in style sheets ?',
              'option1'         => 'none',
              'option2'         => 'all',
              'option3'         => 'Search for a character/text within a string',
              'option4'         => 'Search for a number within a string',
              'correct_answer'  => 'Search for a character/text within a string',
              'point'           => '2',
              'exam_id'         => '4'
            ],
            [
              'content'         => 'What will be the result of combining a string with another data type in PHP?',
              'option1'         => 'string',
              'option2'         => 'float',
              'option3'         => 'int',
              'option4'         => 'double',
              'correct_answer'  => 'string',
              'point'           => '2',
              'exam_id'         => '4'
            ],
            [
              'content'         => 'Which of the following is not PHP Loops?',
              'option1'         => 'do while ',
              'option2'         => 'for',
              'option3'         => 'while',
              'option4'         => 'do for',
              'correct_answer'  => 'do for',
              'point'           => '2',
              'exam_id'         => '4'
            ],
        ]);
    }
}
