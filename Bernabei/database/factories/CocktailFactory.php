<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cocktail>
 */
class CocktailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $fakeArrayOfName = ['Gin Tonic','Whisky Sour','Rum and Cola','Mojito','Caipiroska','Vodka Tonic'];
        $fakeArrayOfIngredients = ['vodka','rum','whisky','coca cola','gin','soda','vermouth','water','orange juice'];
        $name = $this->faker->randomElement($fakeArrayOfName);
        $category = 'fake category';
        $alcoholic = $this->faker->numberBetween(0,1);
        $suggestedGlass = $this->faker->randomElement(['glass1','glass2']);
        $instructions = 'these are some fakers intstructions';
        $ingredient1 = $this->faker->randomElement($fakeArrayOfIngredients);
        $ingredient2 = $this->faker->randomElement($fakeArrayOfIngredients);
        $ingredient3 = $this->faker->randomElement($fakeArrayOfIngredients);
        $ingredient4 = $this->faker->randomElement($fakeArrayOfIngredients);
        $ingredient5 = $this->faker->randomElement($fakeArrayOfIngredients);
        $ingredient6 = $this->faker->randomElement($fakeArrayOfIngredients);
        $ingredient7 = $this->faker->randomElement($fakeArrayOfIngredients);
        $ingredient8 = $this->faker->randomElement($fakeArrayOfIngredients);
        $measure1 = strval($this->faker->numberBetween(0,10));
        $measure2 = strval($this->faker->numberBetween(0,10));
        $measure3 = strval($this->faker->numberBetween(0,10));
        $measure4 = strval($this->faker->numberBetween(0,10));
        $measure5 = strval($this->faker->numberBetween(0,10));
        $measure6 = strval($this->faker->numberBetween(0,10));
        $measure7 = strval($this->faker->numberBetween(0,10));
        $measure8 = strval($this->faker->numberBetween(0,10));


        return [
            'name' => $name,
            'category' => $category,
            'suggested_glass' => $suggestedGlass,
            'is_alcoholic' => $alcoholic,
            'instructions' => $instructions,
            'ingredient1' => $ingredient1,
            'ingredient2' => $ingredient2,
            'ingredient3' => $ingredient3,
            'ingredient4' => $ingredient4,
            'ingredient5' => $ingredient5,
            'ingredient6' => $ingredient6,
            'ingredient7' => $ingredient7,
            'ingredient8' => $ingredient8,
            'measure1' => $measure1,
            'measure2' => $measure2,
            'measure3' => $measure3,
            'measure4' => $measure4,
            'measure5' => $measure5,
            'measure6' => $measure6,
            'measure7' => $measure7,
            'measure8' => $measure8
        ];
    }
}
