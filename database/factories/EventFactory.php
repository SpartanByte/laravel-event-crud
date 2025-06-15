<?php

namespace Database\Factories;

use App\Models\Event;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    // you do NOT need to set a protected $model variable for the model class, Laravel now returns an array
    public function definition(): array
    {

        return [
            //
            'event_date' => $this->faker->dateTimeBetween('now', '+1 year'), // Generates a DateTime object
            'artist_name' => $this->faker->name(),
            'venue' => $this->faker->company() . ' Auditorium',
            'city_state' => $this->faker->city() . ', ' . $this->faker->state(),
            'description' => $this->faker->paragraph(1),
        ];
    }
}
