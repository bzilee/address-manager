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
    public function definition()
    {
        return [
            'fullname' => $this->faker->name,
            'mobile1' => $this->faker->name
            'mobile2' => $this->faker->name
            'domicile1' => $this->faker->name
            'domicile2' => $this->faker->name
            'favori' => $this->faker->name
            'group_contact_id' => $this->faker->name
            'email' => $this->faker->unique()->safeEmail,

        ];
    }
}
