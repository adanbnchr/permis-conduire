<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeTransport
 *
 * @ORM\Table(name="type_transport")
 * @ORM\Entity
 */
class TypeTransport
{
    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=100, nullable=false)
     */
    private $libelle;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=200, nullable=true)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="max_nbr_questions", type="integer", nullable=false)
     */
    private $maxNbrQuestions;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=false)
     */
    private $updatedAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Categorie", mappedBy="idTypeTransport")
     */
    private $idCategorie;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idCategorie = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set libelle
     *
     * @param string $libelle
     *
     * @return TypeTransport
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return TypeTransport
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
     * Set maxNbrQuestions
     *
     * @param integer $maxNbrQuestions
     *
     * @return TypeTransport
     */
    public function setMaxNbrQuestions($maxNbrQuestions)
    {
        $this->maxNbrQuestions = $maxNbrQuestions;

        return $this;
    }

    /**
     * Get maxNbrQuestions
     *
     * @return integer
     */
    public function getMaxNbrQuestions()
    {
        return $this->maxNbrQuestions;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return TypeTransport
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return TypeTransport
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Add idCategorie
     *
     * @param \AppBundle\Entity\Categorie $idCategorie
     *
     * @return TypeTransport
     */
    public function addIdCategorie(\AppBundle\Entity\Categorie $idCategorie)
    {
        $this->idCategorie[] = $idCategorie;

        return $this;
    }

    /**
     * Remove idCategorie
     *
     * @param \AppBundle\Entity\Categorie $idCategorie
     */
    public function removeIdCategorie(\AppBundle\Entity\Categorie $idCategorie)
    {
        $this->idCategorie->removeElement($idCategorie);
    }

    /**
     * Get idCategorie
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdCategorie()
    {
        return $this->idCategorie;
    }
}
