<?php

namespace Database\Factories;

use App\Models\Donation;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class DonationFactory extends Factory
{
    protected $model = Donation::class;

    public function definition()
    {
        $timestamp = Carbon::now()->subMonths(3)->addDays(rand(0, 90));
        return [
            'user_id' => 1,
            'name' => fake()->name(),
            'amount' => number_format(fake()->randomFloat(2, 1, 100), 2, '.', ''),
            'currency' => fake()->currencyCode(),
            'message' => fake()->sentence(),
            'created_at' => $timestamp,
            'updated_at' => $timestamp,
        ];
    }
}
