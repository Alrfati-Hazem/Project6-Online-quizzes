<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionTwoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // CSS
         DB::table('questions')->insert([
            [
              'content'         => 'CSS1 Developed in _____ by the W3C, describes CSS language and simple visual formatting for all HTML tags.',
              'option1'         => '1996',
              'option2'         => '1999',
              'option3'         => '1995',
              'option4'         => '1994',
              'correct_answer'  => '1996',
              'point'           => '2',
              'exam_id'         => '2'
            ],
            [
              'content'         => 'From which version of CSS under development since the late 1990s, added a lot of extra features ?',
              'option1'         => 'CSS3',
              'option2'         => 'none',
              'option3'         => 'CSS1',
              'option4'         => 'CSS2',
              'correct_answer'  => 'CSS3',
              'point'           => '2',
              'exam_id'         => '2'
            ],
            [
              'content'         => 'How many types of levels in style sheets ?',
              'option1'         => 'two level',
              'option2'         => 'One level',
              'option3'         => 'three level',
              'option4'         => 'four level',
              'correct_answer'  => 'three level',
              'point'           => '2',
              'exam_id'         => '2'
            ],
            [
              'content'         => 'An external style sheet is ideal when the style is applied to',
              'option1'         => 'many pages',
              'option2'         => 'few pages',
              'option3'         => 'none',
              'option4'         => 'all',
              'correct_answer'  => 'many pages',
              'point'           => '2',
              'exam_id'         => '2'
            ],
            [
              'content'         => 'Which of the style sheet is also known as Embedded Style Sheet ?',
              'option1'         => 'none',
              'option2'         => 'all',
              'option3'         => 'External Style Sheet',
              'option4'         => 'Document Style Sheet:',
              'correct_answer'  => 'Document Style Sheet:',
              'point'           => '2',
              'exam_id'         => '2'
            ],
            [
              'content'         => 'Which of the following is the superior styles of html ?',
              'option1'         => 'css',
              'option2'         => 'none',
              'option3'         => 'all',
              'option4'         => 'html',
              'correct_answer'  => 'css',
              'point'           => '2',
              'exam_id'         => '2'
            ],
            [
              'content'         => 'To use inline styles you use the style attribute in the _____ tag',
              'option1'         => 'css',
              'option2'         => 'none',
              'option3'         => 'all',
              'option4'         => 'relevant tag',
              'correct_answer'  => 'relevant tag',
              'point'           => '2',
              'exam_id'         => '2'
            ],
            [
              'content'         => 'The Disadvantages of Cascading Style Sheets is',
              'option1'         => 'css',
              'option2'         => 'none',
              'option3'         => 'all',
              'option4'         => 'Browsers Compatibility',
              'correct_answer'  => 'Browsers Compatibility',
              'point'           => '2',
              'exam_id'         => '2'
            ],
            [
              'content'         => 'A _____ tag is used to specify that the browser is to fetch and use an external style sheet file',
              'option1'         => 'all',
              'option2'         => 'none',
              'option3'         => '<sheet>',
              'option4'         => '<link>',
              'correct_answer'  => '<link>',
              'point'           => '2',
              'exam_id'         => '2'
            ],
            [
              'content'         => 'CSS provided the basic styles such as',
              'option1'         => 'setting margins',
              'option2'         => 'All of the above',
              'option3'         => 'none',
              'option4'         => 'applying colors',
              'correct_answer'  => 'All of the above',
              'point'           => '2',
              'exam_id'         => '2'
            ],
        ]);
    }
}
