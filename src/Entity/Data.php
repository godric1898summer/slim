<?php
/**
 * Created by PhpStorm.
 * Authon: akio <medue8@gmail.com>
 * Date: 7/31/19
 * Time: 11:26
 */

namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Annotations\Annotation;

/**
 * @author akio <medue8@gmail.com>
 * Class Data
 * @package App\Entity
 * CREATE TABLE `data` (
    `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
    `data` varchar(255) DEFAULT '',
    `age` tinyint(3) unsigned DEFAULT NULL,
    PRIMARY KEY (`id`)
    ) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4;
 * @ORM\Entity()
 * @ORM\Table(name="data")
 */

class Data
{

    /**
     * @author akio <medue8@gmail.com>
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     * @var int
     */
    protected $id;

    /**
     * @author akio <medue8@gmail.com>
     * @ORM\Column(type="string")
     * @var string
     */
    protected $data;

    /**
     * @author akio <medue8@gmail.com>
     * @ORM\Column(type="integer")
     * @var int
     */
    protected $age;

    /**
     * @author akio <medue8@gmail.com>
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @author akio <medue8@gmail.com>
     * @return string
     */
    public function getData(): string
    {
        return $this->data;
    }

    /**
     * @author akio <medue8@gmail.com>
     * @param string $data
     */
    public function setData(string $data): void
    {
        $this->data = $data;
    }

    /**
     * @author akio <medue8@gmail.com>
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @author akio <medue8@gmail.com>
     * @param int $age
     */
    public function setAge(int $age): void
    {
        $this->age = $age;
    }

}