<?php

namespace Database\Factories;

use App\Models\Contact;
use App\Models\Store;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
  protected $model = Contact::class;

    public function definition()
    {
        return [
            'store_id' => Store::factory(),
            'contact_num' => $this->faker->phoneNumber(),
            'contact_email' => $this->faker->safeEmail(),
            'contact_location' => $this->faker->address()
        ];
    }
}
