<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Donation;
use App\Models\Follower;
use App\Models\Item;
use App\Models\MerchSale;
use App\Models\Subscriber;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->command->info('======== CREATING 10 USERS ========');
        // Create 10 users as default
        $users = User::factory(10)->create();
        $this->command->info('======== USERS CREATED SUCCESSFULLY ========');

        $users->each(function ($user) {
            $this->command->info('======== CREATING DATA FOR USER 1 ========');
            Follower::factory(rand(300, 500))->create(['user_id' => $user->id]);
            Subscriber::factory(rand(300, 500))->create(['user_id' => $user->id]);
            Donation::factory(rand(300, 500))->create(['user_id' => $user->id]);
            $items = Item::factory(rand(3, 10))->create(['user_id' => $user->id]);
            MerchSale::factory(rand(300, 500))->fromUser($user->id, $items)->create();
        });
    }
}
