<?php

namespace MaladieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Maladie
 *
 * @ORM\Table(name="maladie")
 * @ORM\Entity(repositoryClass="MaladieBundle\Repository\MaladieRepository")
 */
class Maladie
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
     * @var string
     *
     * @ORM\Column(name="nomMaladie", type="string", length=255)
     */
    private $nomMaladie;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;


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
     * Set nomMaladie
     *
     * @param string $nomMaladie
     *
     * @return Maladie
     */
    public function setNomMaladie($nomMaladie)
    {
        $this->nomMaladie = $nomMaladie;

        return $this;
    }

    /**
     * Get nomMaladie
     *
     * @return string
     */
    public function getNomMaladie()
    {
        return $this->nomMaladie;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Maladie
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Maladie
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
}

