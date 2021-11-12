<?php
namespace Modules\Name\Database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class NameFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \Modules\Name\Entities\Name::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
        ];
    }
}

