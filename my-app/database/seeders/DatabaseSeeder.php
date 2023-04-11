<?php


namespace Database\Seeders;
use App\Models\Listing;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $user = User::factory()->create([
            'name'=>'Test User',
            'email'=>'test@mail.com'

        ]);

        Listing::factory(40)->create(
            [
                'user_id' => $user->id
            ]
        );

    }
}
