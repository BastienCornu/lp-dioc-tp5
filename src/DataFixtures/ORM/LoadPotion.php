<?php
/**
 * Created by PhpStorm.
 * User: bastien.cornu
 * Date: 28/11/17
 * Time: 09:20
 */

namespace App\DataFixtures\ORM;


use App\Entity\Potion;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class LoadPotion extends Fixture
{

    public function load(ObjectManager $manager){
        $potions = [
            new Potion('small',25,25),
            new Potion('medium',50,50),
            new Potion('large',75,75),
            new Potion('extra_large',100,100),
        ];

        foreach ($potions as $potion){
            $this->addReference($potion->getName(),$potion);
            $manager->persist($potion);
        }
        $manager->flush();
    }

}