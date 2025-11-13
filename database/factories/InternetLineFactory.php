<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Governorate;
use App\Models\Prosecution;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\InternetLine>
 */
class InternetLineFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'prosecution_id' => Prosecution::all()->random(),
            'slug' => fake()->slug(),
            'code_line' => fake()->unique()->phoneNumber(),
            'order_number' => fake()->unique()->regexify('[0-9]{8}'),
            'internet_speed' => fake()->randomElement([4, 6, 8, 16, 32]) . ' Mbps',
            'type_line' => fake()->randomElement(["VPN Over Fiber", "IP Transit Over Fiber"]),
            'ip_address' => fake()->unique()->ipv4(),
            'mac_address' => fake()->unique()->macAddress(),
            'governorate_id' => Governorate::all()->random(),
            'created_by' => 1,
        ];
    }
}
