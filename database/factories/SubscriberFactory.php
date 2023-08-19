<?php

namespace Database\Factories;

use App\Models\Subscriber;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class SubscriberFactory extends Factory
{
    protected $model = Subscriber::class;

    public function definition()
    {
        $timestamp = Carbon::now()->subMonths(3)->addDays(rand(0, 90));
        return [
            'user_id' => 1,
            'name' => fake()->name(),
            'tier_id' => rand(1, 3),
            'created_at' => $timestamp,
            'updated_at' => $timestamp,
        ];
    }
}
