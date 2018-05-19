<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categorie
 *
 * @ORM\Table(name="categorie")
 * @ORM\Entity
 */
class Categorie
{
    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=30, nullable=false)
     */
    private $libelle;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=250, nullable=true)
     */
    private $description;

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
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\TypeTransport", inversedBy="idCategorie")
     * @ORM\JoinTable(name="type_transport_categorie",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_categorie", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_type_transport", referencedColumnName="id")
     *   }
     * )
     */
    private $idTypeTransport;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idTypeTransport = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set libelle
     *
     * @param string $libelle
     *
     * @return Categorie
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
     * @return Categorie
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
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return Categorie
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
     * @return Categorie
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
     * Add idTypeTransport
     *
     * @param \AppBundle\Entity\TypeTransport $idTypeTransport
     *
     * @return Categorie
     */
    public function addIdTypeTransport(\AppBundle\Entity\TypeTransport $idTypeTransport)
    {
        $this->idTypeTransport[] = $idTypeTransport;

        return $this;
    }

    /**
     * Remove idTypeTransport
     *
     * @param \AppBundle\Entity\TypeTransport $idTypeTransport
     */
    public function removeIdTypeTransport(\AppBundle\Entity\TypeTransport $idTypeTransport)
    {
        $this->idTypeTransport->removeElement($idTypeTransport);
    }

    /**
     * Get idTypeTransport
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdTypeTransport()
    {
        return $this->idTypeTransport;
    }
}
