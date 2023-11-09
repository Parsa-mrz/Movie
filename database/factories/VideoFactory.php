<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Video>
 */
class VideoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'url' => 'http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/BigBuckBunny.mp4',
            'length' => $this->faker->randomNumber(3),
            'slug' => $this->faker->slug(2),
            'description' => $this->faker->realText(),
            'thumbnail' => 'https://loremflickr.com/320/240?random=' . rand(1, 99),
            'category_id' => Category::first() ?? Category::factory(),
        ];
    }
}
