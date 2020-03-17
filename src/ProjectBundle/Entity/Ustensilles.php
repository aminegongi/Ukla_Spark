<?php

namespace ProjectBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ustensilles
 *
 * @ORM\Table(name="ustensilles")
 * @ORM\Entity(repositoryClass="ProjectBundle\Repository\UstensillesRepository")
 */
class Ustensilles
{
    /**
     * @return int
     */
    public function getIdUst()
    {
        return $this->idUst;
    }

    /**
     * @param int $idUst
     */
    public function setIdUst($idUst)
    {
        $this->idUst = $idUst;
    }
    /**
     * @var int
     *
     * @ORM\Column(name="idUst", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idUst;

    /**
     * @return mixed
     */

    /**
     * @var string
     *
     * @ORM\Column(name="nomUst", type="string", length=255)
     */
    private $nomUst;

    /**
     * @var string
     *
     * @ORM\Column(name="lien", type="string", length=255)
     * nullable=true
     *
     */
    private $lien;

    /**
     * @return string
     */
    public function getIcone()
    {
        return $this->icone;
    }

    /**
     * @param string $icone
     */
    public function setIcone($icone)
    {
        $this->icone = $icone;
    }

    /**
     * @var string
     *
     * @ORM\Column(name="icone", type="string", length=255)
     */
    private $icone;

    /**
     * Set nomUst
     *
     * @param string $nomUst
     * nullable=true
     *
     * @return Ustensilles
     */
    public function setNomUst($nomUst)
    {
        $this->nomUst = $nomUst;

        return $this;
    }

    /**
     * Get nomUst
     *
     * @return string
     */
    public function getNomUst()
    {
        return $this->nomUst;
    }

    /**
     * Set lien
     *
     * @param string $lien
     *
     * @return Ustensilles
     */
    public function setLien($lien)
    {
        $this->lien = $lien;

        return $this;
    }

    /**
     * Get lien
     *
     * @return string
     */
    public function getLien()
    {
        return $this->lien;
    }
}
