<?php
/**
 * Created by PhpStorm.
 * User: bastien.cornu
 * Date: 28/11/17
 * Time: 08:54
 */

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Potion
 * @package App\Entity
 * @ORM\Entity
 * @ORM\Table(name="potions")
 */
class Potion
{
    /**
     * @var int
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @var string
     * @ORM\Column(type="string",length=55)
     */
    private $name;
    /**
     * @var int
     * @ORM\Column(type="integer")
     */
    private $healthPoint;
    /**
     * @var int
     * @ORM\Column(type="integer")
     */
    private $limit;

    /**
     * Potion constructor.
     * @param string $name
     * @param int $healthPoint
     * @param int $limit
     */
    public function __construct($name, $healthPoint, $limit)
    {
        $this->name = $name;
        $this->healthPoint = $healthPoint;
        $this->limit = $limit;
    }


    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getHealthPoint()
    {
        return $this->healthPoint;
    }

    /**
     * @param int $healthPoint
     */
    public function setHealthPoint($healthPoint)
    {
        $this->healthPoint = $healthPoint;
    }

    /**
     * @return int
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * @param int $limit
     */
    public function setLimit($limit)
    {
        $this->limit = $limit;
    }

}