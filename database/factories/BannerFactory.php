<?php

namespace Database\Factories;

use App\Models\Store;
use Illuminate\Database\Eloquent\Factories\Factory;

class BannerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'store_id' => Store::all()->random()->id,
            'image_path' => '69Utd2Pljj7Npse4Dd8O7xxdelne17IRUFANVwGy.png',
        ];
    }

    public function storeID($attribute){
        return $this->state(['store_id' => $attribute]);
    }
}
