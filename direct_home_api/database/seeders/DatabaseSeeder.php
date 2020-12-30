<?php

namespace Database\Seeders;

use App\Models\Property;
use App\Models\User;
use App\Models\Address;
use App\Models\Payment;
use App\Models\PropertyFeature;
use App\Models\PropertyImage;
use App\Models\Subscription;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesTableSeeder::class);

        User::factory(50)->create();

        Address::factory(150)->create();
        PropertyImage::factory(150)->create();
        PropertyFeature::factory(150)->create();

        for ($i=1; $i < 151 ; $i++) {

            $user = rand(1,50);

            Property::factory()->create([
                'address_id' => $i,
                'property_feature_id' => $i,
                'property_image_id' => $i,
                'user_id' => $user
            ]);

            Payment::factory()->create([
                'user_id' => $user
            ]);

            Subscription::factory()->create([
                'payment_id' => $i,
                'property_id' => $i
            ]);
        }




    }
}
