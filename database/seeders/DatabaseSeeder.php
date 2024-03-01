<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Booking;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Booking::create(
            [
                'guestName' => 'Amy Wong',
                'phoneNumber' => '4389568765',
                'emailAddress' => 'awong@gmail.com',
                'check_in_date' => '2023-11-08',
                'check_out_date' => '2023-11-09',
                'roomType' => 'Double',
                'numberOfAdults' => 2,
                'numberOfChildren' => 1,
                'notes' => '',
                'totalPrice' => 310.00,
                'paymentStatus' => 'paid',
                'paymentMethod' => 'Credit card',
                'bookingDate' => '2023-11-02',
            ]
        );
        Booking::create(
            [
                'guestName' => 'Emily Davis',
                'phoneNumber' => '5147889654',
                'emailAddress' => 'ed@gmail.com',
                'check_in_date' => '2023-11-11',
                'check_out_date' => '2023-11-12',
                'roomType' => 'Single',
                'numberOfAdults' => 1,
                'numberOfChildren' => 0,
                'notes' => '',
                'totalPrice' => 300.00,
                'paymentStatus' => 'paid',
                'paymentMethod' => 'Credit card',
                'bookingDate' => '2023-11-03',
            ]
        );

        Booking::factory(6)->create();
    }
}
