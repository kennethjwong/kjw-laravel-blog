<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class   PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'=>User::factory(),
            'category_id'=>Category::factory(),
            'title'=>$this->faker->sentence,
            'slug'=>$this->faker->slug,
//            'excerpt'=>'<p>' . implode('</p><p>', $this->faker->paragraph(2)) . '</p>',
//            'body'=>'<p>' . implode('</p><p>', $this->faker->paragraph(7)) . '</p>',
            'excerpt' => implode("",
                array_map(
                    function ($paragraph) {
                        return "<p>$paragraph</p>";
                    },
                    $this->faker->paragraphs(2),
                )
            ),
            'body' => implode("",
                array_map(
                    function ($paragraph) {
                        return "<p>$paragraph</p>";
                    },
                    $this->faker->paragraphs(7),
                )
            ),

            'published_at'=>$this->faker->dateTime,
        ];
    }
}

