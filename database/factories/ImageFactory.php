<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Image;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Image>
 */
class ImageFactory extends Factory
{
   protected $model = Image::class;



    public function definition(): array {
        function numeroAleatorio($inicio,$fin): array
        {
            $no = [rand($inicio,$fin)];

            return $no;
        }

        return [
            'description' =>$this->faker->paragraph(),
            'image' => $this->faker->randomElement([
                '6XJU6zxS8GH8J3klkU2nCX5Jp61LNCj4CISIRlrp.png',
                'F1NKjOYRbUmDMaXjMAO8vFxx3vXvocNKX47zS63r.jpg',
                'nUMQPnGwfcEyFGE7fkNyAR52xIJIj7XhzRcVOlBB.webp',
                'PASVOuHLP5XpKcejWVwbZjhqj2aX3mdRYUincN5Y.jpg'
            ]),
            'user_id' => $this->faker->randomElement(numeroAleatorio(1,100))
        ];
    }
}
