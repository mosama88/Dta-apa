<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class GovernorateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $egyptGovernorates = [
            "القاهرة",
            "الجيزة",
            "الإسكندرية",
            "الدقهلية",
            "البحر الأحمر",
            "البحيرة",
            "الفيوم",
            "الجيزة",
            "المنوفية",
            "المنيا",
            "القليوبية",
            "الوادي الجديد",
            "السويس",
            "أسوان",
            "أسيوط",
            "الأقصر",
            "البنـة",
            "بورسعيد",
            "دمياط",
            "الشرقية",
            "الغربية",
            "الإسماعيلية",
            "كفر الشيخ",
            "مطروح",
            "الأقصر",
            "قنا",
            "سوهاج"
        ];


        return [
            'name' => fake()->unique()->randomElement($egyptGovernorates),
            'slug' => fake()->slug(),
            'created_by' => fake()->numberBetween(1, 20),
        ];
    }
}