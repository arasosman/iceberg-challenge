<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Contact::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        $postcodes = [
            "TW118RR",
            "EC1A1BB",
            "CR26XH",
            "DN551PT",
            "B11HQ",
            "BX11LT",
            "BX47SB",
            "BX55AT",
            "DA11RT",
            "DH981BT"
        ];

        return [
            'name' => $this->faker->name,
            'email' => $this->faker->email,
            'phone' => $this->faker->phoneNumber,
            'address' => $this->faker->address,
            'postcode' => $this->faker->randomElement($postcodes)
        ];
    }
}
