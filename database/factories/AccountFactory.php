<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class AccountFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $currencyArray = [
            'VND' => '₫',
            'USD' => '$',
            'EUR' => '€',
            'JPY' => '¥',
            'GBP' => '£',
            'CHF' => 'CHF',
            'CNY' => '¥',
            'AUD' => '$',
            'CAD' => '$',
            'INR' => '₹',
        ];
        return [
            'name' => $this->faker->name(),
            'type' => $this->faker->randomDigit(),
            'currency' => $this->faker->randomKey($currencyArray),
            'balance' => $this->faker->randomFloat(),
            'initial_amount' => $this->faker->randomFloat(),
        ];
    }
}
