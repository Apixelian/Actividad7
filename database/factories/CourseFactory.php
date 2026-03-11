<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Course;
use Faker\Generator as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */

    // public function up(): void
    // {
    //     Schema::create('courses', function (Blueprint $table) {
    //         $table->increments('course_id');
    //         $table->string('course_key', 50);
    //         $table->string('title', 100);
    //         $table->string('cover', 255);
    //         $table->string('content', 255);

    //         // Relaciones con otras tablas
    //         $table->integer('group_id')->unsigned();
    //         $table->foreign('group_id')->references('group_id')->on('groups');
    //         $table->integer('kit_id')->unsigned();
    //         $table->foreign('kit_id')->references('kit_id')->on('kits');

    //     });
    // }

    // crea una fábrica para los cursos y registre 100 cursos; 
    // recuerda consultar la documentación de FakerPHP para que los registros falsos 
    // tengan un tipo de dato acorde con el que la base de datos almacenará en producción

class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'course_key' => $this->faker->unique()->regexify('[A-Z]{3}[0-9]{3}'), // REGEX para una clave única con formato ABC123
            'title' => $this->faker->sentence(3), // Genera un título de 3 palabras
            'cover' => $this->faker->imageUrl(640, 480, 'education'), // Genera una URL de imagen aleatoria relacionada con educación
            'content' => $this->faker->paragraph(), // Genera un párrafo de texto para el contenido
            'group_id' => $this->faker->numberBetween(1, 3), // Hay 3 grupos en la base de datos
            'kit_id' => $this->faker->numberBetween(1, 3), // Hay 3 kits en la base de datos
        ];
    }
}
