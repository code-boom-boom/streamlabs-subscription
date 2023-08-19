<?php

namespace Database\Factories;

use App\Models\Item;
use App\Models\MerchSale;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class MerchSaleFactory extends Factory
{
    protected $model = MerchSale::class;

    public function definition()
    {
        $timestamp = Carbon::now()->subMonths(3)->addDays(rand(0, 90));
        return [
            'user_id' => 1,
            'name' => fake()->name(),
            'item_id' => 1,
            'amount' => rand(1, 10),
            'created_at' => $timestamp,
            'updated_at' => $timestamp,
        ];
    }

    // Fill products belongs to the certain user
    public function fromUser($userId, $items)
    {
        return $this->state([
            'user_id' => $userId,
            'item_id' => $items->random()->id,
        ]);
    }
}
