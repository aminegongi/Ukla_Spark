<?php

namespace MaladieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MaladieUser
 *
 * @ORM\Table(name="maladie_user")
 * @ORM\Entity(repositoryClass="MaladieBundle\Repository\MaladieUserRepository")
 */
class MaladieUser
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     *@ORM\OneToOne(targetEntity="\UserBundle\Entity\User")
     *@ORM\JoinColumn(name="user_id",referencedColumnName="id")
     *
     *
     */
    private $user;

    /**
     *@ORM\OneToOne(targetEntity="\MaladieBundle\Entity\Maladie")
     *@ORM\JoinColumn(name="maladie_id",referencedColumnName="id")
     *
     *
     */
    private $maladie;

    /**
     * @return mixed
     */
    public function getMaladie()
    {
        return $this->maladie;
    }

    /**
     * @param mixed $maladie
     */
    public function setMaladie($maladie)
    {
        $this->maladie = $maladie;
    }




    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set user
     *
     * @param integer $user
     *
     * @return MaladieUser
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return int
     */
    public function getUser()
    {
        return $this->user;
    }
}

