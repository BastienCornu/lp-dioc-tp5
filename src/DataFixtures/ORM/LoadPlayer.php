<?php

namespace App\DataFixtures\ORM;

use App\Entity\Player;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Faker\Factory;

class LoadPlayer extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Factory::create();

        $players = [
            $faker->name => ['shotgun','small'],
            $faker->name => ['shotgun','large'],
            $faker->name => ['sniper','extra_large'],
            $faker->name => ['m4',null],
            $faker->name => ['m4',null],
            $faker->name => ['m4',null],
            $faker->name => ['handgun',null],
            $faker->name => ['handgun',null],
        ];

        foreach ($players as $name => $equipement) {
            $player = new Player();
            $player->setName($name);
            $player->setCurrentWeapon($this->getReference($equipement[0]));
            $player->addPotion($this->getReference($equipement[1]));

            $manager->persist($player);
        }

        $manager->flush();
    }

    public function getDependencies()
    {
        return [LoadWeapon::class, LoadPotion::class];
    }
}
