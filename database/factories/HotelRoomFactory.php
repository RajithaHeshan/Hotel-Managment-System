<?php

namespace Database\Factories;

use App\Models\HotelRoom;
use Illuminate\Database\Eloquent\Factories\Factory;

class HotelRoomFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = HotelRoom::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'roomNo' => $this->faker->randomElement(['R1','R4','R7','R38','R20','R32','R18']),
            'floorNo' => $this->faker->randomNumber([1,2,3,4]),
            'roomType' => $this->faker->randomElement(['single', 'double', 'family']),
            'description' => $this->faker->sentence(),
            'noOfBeds' =>$this->faker->randomNumber([1,2,3,4]),     
            'maxNoOfChildren' => $this->faker->randomNumber([1,2,3,4]),
            'maxNoOfAdults' => $this->faker->randomNumber([1,2]),
            'price' =>$this->faker->randomFloat(),
            'roomStatus' => $this->faker->randomElement(['Available']),
            //'admin_id' => User::factory()           
        ];
    }
}
