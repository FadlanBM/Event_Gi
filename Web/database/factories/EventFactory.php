<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker,
            'uraian' => $this->faker,
            'tujuan' => $this->faker,
            'tanggal' => $this->faker,
            'waktu' => $this->faker,
            'users_id' => 1
        ];
    }
}
