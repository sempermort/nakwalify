<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

class CourseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Course::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {


        return [
            'course_title' => $this->faker->sentence(),
            'course_subt' => $this->faker->sentence(),
            'course_des' => $this->faker->paragraph(2,false),
            'language'=>'2',
            'category_Id'=>'1',
            'subcategory_id'=>'1',
            'price'=>$this->faker->numberBetween(0, 90000),
            'mainrequire'=>$this->faker->randomElements(["paper","printing machine","willingness"]),
            'mainwlearn'=>$this->faker->randomElements(["Dropping Tables","Moutain Bike","full value","making dimes"]),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
