<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ingredient>
 */
class IngredientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $fakerArrayOfNames = ['vodka','rum','whisky','coca cola','gin','soda','vermouth','water','orange juice'];
        $name = $this->faker->randomElement($fakerArrayOfNames);
        $description = "this is a faker's description";
        $is_alcoholic = $this->faker->numberBetween(0,1);
        $grade =$this->faker->numberBetween(0,40);

        return [
            'name' => $name,
            'description' => $description,
            'is_alcoholic' => $is_alcoholic,
            'grade' => $grade
        ];
    }
}
