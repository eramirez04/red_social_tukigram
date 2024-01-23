<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Comments;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comments>
 */
class CommentsFactory extends Factory
{

    protected $model = Comments::class;

    public function definition(): array
    {
        return [
            'comment' => $this->faker->paragraph(),
            'fk_id_user' => $this->faker->randomElement([1,2,3,4,5,6,7,8,9,10]),
            'fk_id_image' => $this->faker->randomElement([1,2,3,4])
        ];
    }
}
