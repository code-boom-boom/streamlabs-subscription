<?php

namespace Database\Factories;

use App\Models\Follower;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class FollowerFactory extends Factory
{
    protected $model = Follower::class;

    public function definition()
    {
        $timestamp = Carbon::now()->subMonths(3)->addDays(rand(0, 90));
        return [
            'user_id' => 1,
            'name' => fake()->name(),
            'created_at' => $timestamp,
            'updated_at' => $timestamp,
        ];
    }
}
