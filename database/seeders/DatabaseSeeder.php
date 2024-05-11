<?php

namespace Database\Seeders;

use App\Models\Answer;
use App\Models\Course;
use App\Models\Question;
use App\Models\QuestionAnswer;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         Course::factory(1)->create();

        Question::factory()->create([
            'question' => '¿Cuál es uno de los propósitos principales de la reforestación en México en los últimos años?',
            'course_id' => 4,
        ]);

        Question::factory()->create([
            'question' => '¿Quiénes han participado en los esfuerzos de reforestación a nivel nacional y local en México?',
            'course_id' => 4,
        ]);

        Question::factory()->create([
            'question' => '¿Qué ha liderado el gobierno municipal de Tuxtla Gutiérrez, Chiapas, en colaboración con otras entidades?',
            'course_id' => 4,
        ]);

        Question::factory()->create([
            'question' => '¿Cuál ha sido uno de los avances más destacados en la reforestación en Tuxtla Gutiérrez, Chiapas?',
            'course_id' => 4,
        ]);

        Question::factory()->create([
            'question' => '¿Qué beneficios se mencionan en el texto como resultado de las acciones de reforestación en Tuxtla Gutiérrez?',
            'course_id' => 4,
        ]);

        Answer::factory()->create([
            'answer' => 'Fomentar la expansión agrícola'
        ]);

        Answer::factory()->create([
            'answer' => 'Combatir la deforestación y mitigar los efectos del cambio climático'
        ]);

        Answer::factory()->create([
            'answer' => 'Promover la urbanización descontrolada'
        ]);

        Answer::factory()->create([
            'answer' => 'El gobierno, organizaciones no gubernamentales, empresas y comunidades locales'
        ]);

        Answer::factory()->create([
            'answer' => 'Únicamente el gobierno municipal'
        ]);

        Answer::factory()->create([
            'answer' => 'Solo organizaciones ambientales'
        ]);

        Answer::factory()->create([
            'answer' => 'Proyectos de minería'
        ]);

        Answer::factory()->create([
            'answer' => 'Iniciativas significativas de reforestación'
        ]);

        Answer::factory()->create([
            'answer' => 'Programas de expansión industrial'
        ]);

        Answer::factory()->create([
            'answer' => 'La promoción de la caza deportiva'
        ]);

        Answer::factory()->create([
            'answer' => 'La restauración de áreas urbanas y periurbanas'
        ]);

        Answer::factory()->create([
            'answer' => 'La construcción de centros comerciales'
        ]);

        Answer::factory()->create([
            'answer' => 'Aumento de la contaminación atmosférica'
        ]);

        Answer::factory()->create([
            'answer' => 'Mejora del paisaje urbano y reducción de la contaminación atmosférica'
        ]);

        Answer::factory()->create([
            'answer' => 'Deterioro del entorno urbano'
        ]);

        QuestionAnswer::factory()->create([
            'question_id' => 26,
            'answer_id' => 75,
            'isCorrect' => false
        ]);

        QuestionAnswer::factory()->create([
            'question_id' => 26,
            'answer_id' => 76,
            'isCorrect' => false
        ]);

        QuestionAnswer::factory()->create([
            'question_id' => 26,
            'answer_id' => 77,
            'isCorrect' => true
        ]);

        QuestionAnswer::factory()->create([
            'question_id' => 27,
            'answer_id' => 78,
            'isCorrect' => false
        ]);

        QuestionAnswer::factory()->create([
            'question_id' => 27,
            'answer_id' => 79,
            'isCorrect' => true
        ]);

        QuestionAnswer::factory()->create([
            'question_id' => 27,
            'answer_id' => 80,
            'isCorrect' => false
        ]);

        QuestionAnswer::factory()->create([
            'question_id' => 28,
            'answer_id' => 81,
            'isCorrect' => false
        ]);

        QuestionAnswer::factory()->create([
            'question_id' => 28,
            'answer_id' => 82,
            'isCorrect' => false
        ]);

        QuestionAnswer::factory()->create([
            'question_id' => 28,
            'answer_id' => 83,
            'isCorrect' => true
        ]);

        QuestionAnswer::factory()->create([
            'question_id' => 29,
            'answer_id' => 84,
            'isCorrect' => true
        ]);

        QuestionAnswer::factory()->create([
            'question_id' => 29,
            'answer_id' => 85,
            'isCorrect' => false
        ]);

        QuestionAnswer::factory()->create([
            'question_id' => 29,
            'answer_id' => 86,
            'isCorrect' => false
        ]);

        QuestionAnswer::factory()->create([
            'question_id' => 30,
            'answer_id' => 87,
            'isCorrect' => true
        ]);

        QuestionAnswer::factory()->create([
            'question_id' => 30,
            'answer_id' => 88,
            'isCorrect' => false
        ]);

        QuestionAnswer::factory()->create([
            'question_id' => 30,
            'answer_id' => 89,
            'isCorrect' => false
        ]);

    }
}
