<?php
/**
 * Created by PhpStorm.
 * Authon: akio <medue8@gmail.com>
 * Date: 8/1/19
 * Time: 16:05
 */

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Annotations\Annotation;
/*CREATE TABLE `user` (
  `id` bigint(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL DEFAULT '',
  `password` char(32) NOT NULL DEFAULT '',
  `roles_ids` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
 */

/**
 * @author akio <medue8@gmail.com>
 * Class User
 * @package App\Entity
 * @ORM\Entity()
 * @ORM\Table(name="user")
 */
class User
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
    protected $username;

    /**
     * @author akio <medue8@gmail.com>
     * @ORM\Column(type="string")
     * @var string
     */
    protected $password;

    /**
     * @author akio <medue8@gmail.com>
     * @ORM\Column(type="string")
     * @var string
     */
    protected $roles_ids;

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
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @author akio <medue8@gmail.com>
     * @param string $username
     */
    public function setUsername(string $username): void
    {
        $this->username = $username;
    }

    /**
     * @author akio <medue8@gmail.com>
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @author akio <medue8@gmail.com>
     * @param string $password
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    /**
     * @author akio <medue8@gmail.com>
     * @return string
     */
    public function getRolesIds(): string
    {
        return $this->roles_ids;
    }

    /**
     * @author akio <medue8@gmail.com>
     * @param string $roles_ids
     */
    public function setRolesIds(string $roles_ids): void
    {
        $this->roles_ids = $roles_ids;
    }
}