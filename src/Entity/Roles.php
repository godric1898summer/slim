<?php
/**
 * Created by PhpStorm.
 * Authon: akio <medue8@gmail.com>
 * Date: 8/1/19
 * Time: 16:08
 */

namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Annotations\Annotation;
/* CREATE TABLE `roles` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `roles` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
 */

/**
 * @author akio <medue8@gmail.com>
 * Class Roles
 * @package App\Entity
 * @ORM\Entity()
 * @ORM\Table(name="roles")
 */
class Roles
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
    protected $role;

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
    public function getRole(): string
    {
        return $this->role;
    }

    /**
     * @author akio <medue8@gmail.com>
     * @param string $role
     */
    public function setRole(string $role): void
    {
        $this->role = $role;
    }
}