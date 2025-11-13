<?php

namespace Database\Seeders;

use App\Models\Governorate;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str; // مهم جدًا

class GovernorateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
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

        shuffle($egyptGovernorates);

        for ($i = 0; $i < count($egyptGovernorates); $i++) {
            Governorate::create([
                'name' => $egyptGovernorates[$i],
                'slug' => Str::slug($egyptGovernorates[$i]),
                'created_by' => fake()->numberBetween(1, 20),
            ]);
        }
    }
}
