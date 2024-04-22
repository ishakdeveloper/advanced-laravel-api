<?php

namespace Database\Factories;

use App\Models\Board;
use App\Models\Space;
use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    protected $model = Task::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'description' => fake()->text(),
            'completed' => fake()->boolean(),
            'space_id' => Space::factory(),
            'board_id' => Board::factory(),
            'user_id' => User::factory(),
        ];
    }
}
