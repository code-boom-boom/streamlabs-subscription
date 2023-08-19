<?php

namespace Database\Factories;

use App\Models\Item;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class ItemFactory extends Factory
{
    protected $model = Item::class;

    public function definition()
    {
        $timestamp = Carbon::now()->subMonths(3)->addDays(rand(0, 90));
        return [
            'user_id' => 1,
            'name' => ucfirst(fake()->word()) . ' ' . ucfirst(fake()->word()),
            'price' => number_format(fake()->randomFloat(2, 1, 1000), 2, '.', ''),
            'created_at' => $timestamp,
            'updated_at' => $timestamp,
        ];
    }
}
