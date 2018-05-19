<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Test
 *
 * @ORM\Table(name="test", indexes={@ORM\Index(name="id_membre", columns={"id_membre"}), @ORM\Index(name="id_type_transport", columns={"id_type_transport"})})
 * @ORM\Entity
 */
class Test
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date;

    /**
     * @var integer
     *
     * @ORM\Column(name="note_finale", type="integer", nullable=true)
     */
    private $noteFinale = '0';

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
     * @var \AppBundle\Entity\Membre
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Membre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_membre", referencedColumnName="id")
     * })
     */
    private $idMembre;

    /**
     * @var \AppBundle\Entity\TypeTransport
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\TypeTransport")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_type_transport", referencedColumnName="id")
     * })
     */
    private $idTypeTransport;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Question", mappedBy="idTest")
     */
    private $idQuestion;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idQuestion = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Test
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set noteFinale
     *
     * @param integer $noteFinale
     *
     * @return Test
     */
    public function setNoteFinale($noteFinale)
    {
        $this->noteFinale = $noteFinale;

        return $this;
    }

    /**
     * Get noteFinale
     *
     * @return integer
     */
    public function getNoteFinale()
    {
        return $this->noteFinale;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return Test
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
     * @return Test
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
     * Set idMembre
     *
     * @param \AppBundle\Entity\Membre $idMembre
     *
     * @return Test
     */
    public function setIdMembre(\AppBundle\Entity\Membre $idMembre = null)
    {
        $this->idMembre = $idMembre;

        return $this;
    }

    /**
     * Get idMembre
     *
     * @return \AppBundle\Entity\Membre
     */
    public function getIdMembre()
    {
        return $this->idMembre;
    }

    /**
     * Set idTypeTransport
     *
     * @param \AppBundle\Entity\TypeTransport $idTypeTransport
     *
     * @return Test
     */
    public function setIdTypeTransport(\AppBundle\Entity\TypeTransport $idTypeTransport = null)
    {
        $this->idTypeTransport = $idTypeTransport;

        return $this;
    }

    /**
     * Get idTypeTransport
     *
     * @return \AppBundle\Entity\TypeTransport
     */
    public function getIdTypeTransport()
    {
        return $this->idTypeTransport;
    }

    /**
     * Add idQuestion
     *
     * @param \AppBundle\Entity\Question $idQuestion
     *
     * @return Test
     */
    public function addIdQuestion(\AppBundle\Entity\Question $idQuestion)
    {
        $this->idQuestion[] = $idQuestion;

        return $this;
    }

    /**
     * Remove idQuestion
     *
     * @param \AppBundle\Entity\Question $idQuestion
     */
    public function removeIdQuestion(\AppBundle\Entity\Question $idQuestion)
    {
        $this->idQuestion->removeElement($idQuestion);
    }

    /**
     * Get idQuestion
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdQuestion()
    {
        return $this->idQuestion;
    }
}
