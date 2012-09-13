<?php
namespace Minecrafterdk\SiteBundle\Entity;

use Symfony\Component\Security\Core\Role\Role;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity()
 * @ORM\HasLifecycleCallbacks()
 * @ORM\Table(name="users")
 */
class User implements UserInterface {
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, unique=true)
     */
    private $mail;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $salt;

    /**
     * @ORM\Column(type="date")
     */
    private $createdAt;

    /**
     * @ORM\Column(type="array")
     */
    private $roles = array();

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $minecraft_nick;

    /**
     * Getters & Setters
     */
    public function getId() {
        return $this->id;
    }

    public function getMail() {
        return $this->mail;
    }

    public function setMail($value) {
        $this->mail = $value;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($value) {
        $this->password = $value;
    }

    public function getSalt() {
        return $this->salt;
    }

    public function getCreatedAt() {
        return $this->createdAt;
    }

    public function getRoles() {
        return array_merge(array('ROLE_USER'), $this->roles);
    }

    public function setRoles($value) {
        $this->roles = $value;
    }

    public function getMinecraftNick() {
        return $this->minecraft_nick;
    }

    public function setMinecraftNick($value) {
        $this->minecraft_nick = $value;
    }

    /**
     * Symfony2 UserInterface implementations
     */

    public function getUsername() {
        return $this->getMail();
    }

    public function eraseCredentials() {
    }

    public function __construct()
    {
        $this->salt = md5(uniqid(null, true));
        $this->createdAt = new \DateTime();
    }
}
