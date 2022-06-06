FACTORY
--------------------------
<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PembeliFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pembeli::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_pembeli' => $this->faker->numberBetween(),
            'nama_pembeli' => $this->faker->name(),
            'jk' => $this->faker->randomElement(['L', 'P']),
            'no_telp' => $this->faker->numerify('##############'),
            'alamat' => $this->faker->address(),
        ];
    }
}

SEEDER
--------------------
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class PembeliSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        DB::table('pembeli')->insert([
            'nama_pembeli' => $faker->name(),
            'jk' => $faker->randomElement(['L', 'P']),
            'no_telp' => $faker->numerify('##############'),
            'alamat' => $faker->address(),
        ]);
    }
}