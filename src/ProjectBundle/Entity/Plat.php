<?php

namespace ProjectBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Plat
 *
 * @ORM\Table(name="plat")
 * @ORM\Entity(repositoryClass="ProjectBundle\Repository\PlatRepository")
 */
class Plat
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
     * @return mixed
     */
    public function getUstensilles()
    {
        return $this->ustensilles;
    }

    /**
     * @param mixed $ustensilles
     */
    public function setUstensilles($ustensilles)
    {
        $this->ustensilles = $ustensilles;
    }

    /**
     * Many plats have Many Ustensilles.
     * @ORM\ManyToMany(targetEntity="Ustensilles")
     * @ORM\JoinTable(name="plats_ustensilles",
     *      joinColumns={@ORM\JoinColumn(name="Plat_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="Ustensilles_id", referencedColumnName="idUst")}
     *      )
     */
    private $ustensilles;


    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="image0", type="string", length=255)
     */
    private $image0;

    /**
     * @var string
     *
     * @ORM\Column(name="image1", type="string", length=255)
     */
    private $image1;

    /**
     * @var string
     *
     * @ORM\Column(name="image2", type="string", length=255)
     */
    private $image2;

    /**
     * @var string
     *
     * @ORM\Column(name="image3", type="string", length=255)
     */
    private $image3;

    /**
     * @var string
     *
     * @ORM\Column(name="image4", type="string", length=255)
     */
    private $image4;

    /**
     * @return string
     */
    public function getImage0()
    {
        return $this->image0;
    }

    /**
     * @param string $image0
     */
    public function setImage0($image0)
    {
        $this->image0 = $image0;
    }

    /**
     * @return string
     */
    public function getImage1()
    {
        return $this->image1;
    }

    /**
     * @param string $image1
     */
    public function setImage1($image1)
    {
        $this->image1 = $image1;
    }

    /**
     * @return string
     */
    public function getImage2()
    {
        return $this->image2;
    }

    /**
     * @param string $image2
     */
    public function setImage2($image2)
    {
        $this->image2 = $image2;
    }

    /**
     * @return string
     */
    public function getImage3()
    {
        return $this->image3;
    }

    /**
     * @param string $image3
     */
    public function setImage3($image3)
    {
        $this->image3 = $image3;
    }

    /**
     * @return string
     */
    public function getImage4()
    {
        return $this->image4;
    }

    /**
     * @param string $image4
     */
    public function setImage4($image4)
    {
        $this->image4 = $image4;
    }

    /**
     * @return string
     */
    public function getImage5()
    {
        return $this->image5;
    }

    /**
     * @param string $image5
     */
    public function setImage5($image5)
    {
        $this->image5 = $image5;
    }

    /**
     * @var string
     *
     * @ORM\Column(name="image5", type="string", length=255)
     */
    private $image5;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="difficulte", type="string", length=255)
     */
    private $difficulte;

    /**
     * @var string
     *
     * @ORM\Column(name="tempsPrepa", type="string", length=255)
     */
    private $tempsPrepa;

    /**
     * @var string
     *
     * @ORM\Column(name="tempsCuisson", type="string", length=255)
     */
    private $tempsCuisson;

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @ORM\ManyToOne(targetEntity="Typeplat")
     * @ORM\JoinColumn(
     *     name="type",
     *     referencedColumnName="id",
     * )
     */
    public $type;

    /**
     * @var string
     *
     * @ORM\Column(name="hfr", type="string", length=255)
     */
    private $hfr;

    /**
     * @var string
     *
     * @ORM\Column(name="meteo", type="string", length=255)
     */
    private $meteo;

    /**
     * @return mixed
     */
    public function getSpecialite()
    {
        return $this->specialite;
    }

    /**
     * @param mixed $specialite
     */
    public function setSpecialite($specialite)
    {
        $this->specialite = $specialite;
    }
    /**
     * @ORM\ManyToOne(targetEntity="Specialite")
     * @ORM\JoinColumn(
     *     name="specialite",
     *     referencedColumnName="id",
     * )
     */
    private $specialite;

    /**
     * @var string
     *
     * @ORM\Column(name="humeur", type="string", length=255)
     */
    private $humeur;

    /**
     * @var string
     *
     * @ORM\Column(name="preparation", type="string", length=255)
     */
    private $preparation;

    /**
     * @var string
     *
     * @ORM\Column(name="aEviter", type="string", length=255)
     */
    private $aEviter;

    /**
     * @var string
     *
     * @ORM\Column(name="aReccomander", type="string", length=255)
     */
    private $aReccomander;

    /**
     * @var int
     *
     * @ORM\Column(name="nbrPortion", type="integer")
     */
    private $nbrPortion;

    /**
     * @var string
     *
     * @ORM\Column(name="nomPortion", type="string", length=255)
     */
    private $nomPortion;

    /**
     * @var string
     *
     * @ORM\Column(name="ingredients", type="string", length=255)
     */
    private $ingredients;

    /**
     * @return mixed
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * @param mixed $note
     */
    public function setNote($note)
    {
        $this->note = $note;
    }

    /**
     * Many plats have Many notes.
     * @ORM\ManyToMany(targetEntity="Note")
     * @ORM\JoinTable(name="plats_notes",
     *      joinColumns={@ORM\JoinColumn(name="Plat_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="notes_id", referencedColumnName="id")}
     *      )
     */
    private $note;

    /**
     * @return string
     */
    public function getHfr()
    {
        return $this->hfr;
    }

    /**
     * @param string $hfr
     */
    public function setHfr($hfr)
    {
        $this->hfr = $hfr;
    }

    /**
     * @return string
     */
    public function getHumeur()
    {
        return $this->humeur;
    }

    /**
     * @param string $humeur
     */
    public function setHumeur($humeur)
    {
        $this->humeur = $humeur;
    }

    /**
     * @return string
     */
    public function getIngredients()
    {
        return $this->ingredients;
    }

    /**
     * @param string $ingredients
     */
    public function setIngredients($ingredients)
    {
        $this->ingredients = $ingredients;
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
     * Set nom
     *
     * @param string $nom
     *
     * @return Plat
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Plat
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
     * Set difficulte
     *
     * @param string $difficulte
     *
     * @return Plat
     */
    public function setDifficulte($difficulte)
    {
        $this->difficulte = $difficulte;

        return $this;
    }

    /**
     * Get difficulte
     *
     * @return string
     */
    public function getDifficulte()
    {
        return $this->difficulte;
    }

    /**
     * Set tempsPrepa
     *
     * @param string $tempsPrepa
     *
     * @return Plat
     */
    public function setTempsPrepa($tempsPrepa)
    {
        $this->tempsPrepa = $tempsPrepa;

        return $this;
    }

    /**
     * Get tempsPrepa
     *
     * @return string
     */
    public function getTempsPrepa()
    {
        return $this->tempsPrepa;
    }

    /**
     * Set tempsCuisson
     *
     * @param string $tempsCuisson
     *
     * @return Plat
     */
    public function setTempsCuisson($tempsCuisson)
    {
        $this->tempsCuisson = $tempsCuisson;

        return $this;
    }

    /**
     * Get tempsCuisson
     *
     * @return string
     */
    public function getTempsCuisson()
    {
        return $this->tempsCuisson;
    }

    /**
     * Set meteo
     *
     * @param string $meteo
     *
     * @return Plat
     */
    public function setMeteo($meteo)
    {
        $this->meteo = $meteo;

        return $this;
    }

    /**
     * Get meteo
     *
     * @return string
     */
    public function getMeteo()

    {
        return $this->meteo;
    }

    /**
     * Set preparation
     *
     * @param string $preparation
     *
     * @return Plat
     */
    public function setPreparation($preparation)
    {
        $this->preparation = $preparation;

        return $this;
    }

    /**
     * Get preparation
     *
     * @return string
     */
    public function getPreparation()
    {
        return $this->preparation;
    }

    /**
     * Set aEviter
     *
     * @param string $aEviter
     *
     * @return Plat
     */
    public function setAEviter($aEviter)
    {
        $this->aEviter = $aEviter;

        return $this;
    }

    /**
     * Get aEviter
     *
     * @return string
     */
    public function getAEviter()
    {
        return $this->aEviter;
    }

    /**
     * Set aReccomander
     *
     * @param string $aReccomander
     *
     * @return Plat
     */
    public function setAReccomander($aReccomander)
    {
        $this->aReccomander = $aReccomander;

        return $this;
    }

    /**
     * Get aReccomander
     *
     * @return string
     */
    public function getAReccomander()
    {
        return $this->aReccomander;
    }

    /**
     * @return int
     */
    public function getNbrPortion()
    {
        return $this->nbrPortion;
    }

    /**
     * @param int $nbrPortion
     */
    public function setNbrPortion($nbrPortion)
    {
        $this->nbrPortion = $nbrPortion;
    }

    /**
     * Set nomPortion
     *
     * @param string $nomPortion
     *
     * @return Plat
     */
    public function setNomPortion($nomPortion)
    {
        $this->nomPortion = $nomPortion;

        return $this;
    }

    /**
     * Get nomPortion
     *
     * @return string
     */
    public function getNomPortion()
    {
        return $this->nomPortion;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->ustensilles = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add ustensille
     *
     * @param \ProjectBundle\Entity\Ustensilles $ustensille
     *
     * @return Plat
     */
    public function addUstensille(\ProjectBundle\Entity\Ustensilles $ustensille)
    {
        $this->ustensilles[] = $ustensille;

        return $this;
    }

    /**
     * Remove ustensille
     *
     * @param \ProjectBundle\Entity\Ustensilles $ustensille
     */
    public function removeUstensille(\ProjectBundle\Entity\Ustensilles $ustensille)
    {
        $this->ustensilles->removeElement($ustensille);
    }

    /**
     * Add note
     *
     * @param \ProjectBundle\Entity\note $note
     *
     * @return Plat
     */
    public function addNote(\ProjectBundle\Entity\note $note)
    {
        $this->note[] = $note;

        return $this;
    }

    /**
     * Remove note
     *
     * @param \ProjectBundle\Entity\note $note
     */
    public function removeNote(\ProjectBundle\Entity\note $note)
    {
        $this->note->removeElement($note);
    }
}
