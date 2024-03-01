<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Booking>
 */
class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'guestName' => $this->faker->name(),
            'phoneNumber' => $this->faker->phoneNumber(),
            'emailAddress' => $this->faker->unique()->safeEmail(),
            'check_in_date' => $this->faker->date(),
            'check_out_date' => $this->faker->date(),
            'roomType' => $this->faker->randomElement(['Single', 'Double', 'Delux']),
            'numberOfAdults' => $this->faker->numberBetween(1, 4),
            'numberOfChildren' => $this->faker->numberBetween(0, 3),
            'notes' => $this->faker->paragraph(),
            'totalPrice' => $this->faker->randomFloat(2, 100, 1000),
            'paymentStatus' => $this->faker->randomElement(['paid', 'pending']),
            'paymentMethod' => $this->faker->randomElement(['Credit card', 'Cash', 'Online Transfer']),
            'bookingDate' => $this->faker->date(),
        ];
    }
}
