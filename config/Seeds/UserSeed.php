<?php
declare(strict_types=1);

use Faker\Factory;
use Migrations\AbstractSeed;
use Cake\Auth\DefaultPasswordHasher;

/**
 * UsersSeeder seed.
 */
class UserSeed extends AbstractSeed
{
  /**
   * Run Method.
   *
   * Write your database seeder using this method.
   *
   * More information on writing seeds is available here:
   * https://book.cakephp.org/phinx/0/en/seeding.html
   *
   * @return void
   */
  public function run(): void
  {
    $faker = Factory::create();    
    $table = $this->table('users');
    for ($i = 0; $i < 50; $i++) {
      $data = [
        'name' => $faker->name(),
        'email' => $faker->email(),
        'full_name' => $faker->firstName() . $faker->lastName(),
      ];
      $table->insert($data)->save();
    }
  }
}