<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name_course' => 'Acciones para proteger los bosques',
            'image' => 'proteccion.jpg',
            'description' => 'En México, la reforestación ha sido una prioridad en los últimos años como parte de los esfuerzos para combatir la deforestación y mitigar los efectos del cambio climático. Se han implementado programas y proyectos a nivel nacional y local para promover la plantación de árboles y la restauración de ecosistemas degradados. Estos esfuerzos han involucrado a diferentes sectores de la sociedad, incluyendo al gobierno, organizaciones no gubernamentales, empresas y comunidades locales.
            En el caso específico de Tuxtla Gutiérrez, Chiapas, se han llevado a cabo iniciativas significativas de reforestación para recuperar áreas boscosas perdidas o degradadas en la región. Estas iniciativas han sido lideradas por el gobierno municipal, en colaboración con organizaciones ambientales y la participación activa de la comunidad. Se han establecido viveros municipales para la producción de plántulas de especies nativas, y se han realizado jornadas de siembra y actividades de educación ambiental para sensibilizar a la población sobre la importancia de la reforestación.Uno de los avances más destacados en la reforestación en Tuxtla Gutiérrez ha sido la restauración de áreas urbanas y periurbanas, como parques, ríos y áreas verdes públicas. Se han realizado proyectos de revegetación y arborización en parques y espacios recreativos para mejorar la calidad de vida de los habitantes y aumentar la biodiversidad en la ciudad. Estas acciones no solo contribuyen a la conservación del medio ambiente, sino que también tienen beneficios sociales y económicos, como la mejora del paisaje urbano, la reducción de la contaminación atmosférica y la generación de empleo en actividades relacionadas con la reforestación. Además, se han implementado programas de reforestación en zonas rurales y comunidades indígenas en las cercanías de Tuxtla Gutiérrez, con el objetivo de restaurar los ecosistemas forestales y mejorar los medios de vida de las poblaciones locales. Estos programas incluyen la plantación de árboles frutales, maderables y medicinales, así como la implementación de prácticas agroforestales y sistemas de manejo sostenible de los recursos naturales. La reforestación en estas áreas contribuye a la conservación de la biodiversidad, la protección de los suelos, la captura de carbono y la diversificación de los ingresos de las comunidades.',
            'questions' => 5,
        ];
    }
}
