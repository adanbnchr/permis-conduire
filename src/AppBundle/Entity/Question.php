<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Question
 *
 * @ORM\Table(name="question", indexes={@ORM\Index(name="id_reponse", columns={"id_reponse"}), @ORM\Index(name="id_categorie", columns={"id_categorie"})})
 * @ORM\Entity
 */
class Question
{
    /**
     * @var string
     *
     * @ORM\Column(name="question", type="text", length=65535, nullable=false)
     */
    private $question;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=200, nullable=false)
     */
    private $libelle;

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
     * @var \AppBundle\Entity\Categorie
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Categorie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_categorie", referencedColumnName="id")
     * })
     */
    private $idCategorie;

    /**
     * @var \AppBundle\Entity\Choix
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Choix")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_reponse", referencedColumnName="id")
     * })
     */
    private $idReponse;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Test", inversedBy="idQuestion")
     * @ORM\JoinTable(name="question_test",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_question", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_test", referencedColumnName="id")
     *   }
     * )
     */
    private $idTest;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idTest = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set question
     *
     * @param string $question
     *
     * @return Question
     */
    public function setQuestion($question)
    {
        $this->question = $question;

        return $this;
    }

    /**
     * Get question
     *
     * @return string
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     *
     * @return Question
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
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return Question
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
     * @return Question
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
     * Set idCategorie
     *
     * @param \AppBundle\Entity\Categorie $idCategorie
     *
     * @return Question
     */
    public function setIdCategorie(\AppBundle\Entity\Categorie $idCategorie = null)
    {
        $this->idCategorie = $idCategorie;

        return $this;
    }

    /**
     * Get idCategorie
     *
     * @return \AppBundle\Entity\Categorie
     */
    public function getIdCategorie()
    {
        return $this->idCategorie;
    }

    /**
     * Set idReponse
     *
     * @param \AppBundle\Entity\Choix $idReponse
     *
     * @return Question
     */
    public function setIdReponse(\AppBundle\Entity\Choix $idReponse = null)
    {
        $this->idReponse = $idReponse;

        return $this;
    }

    /**
     * Get idReponse
     *
     * @return \AppBundle\Entity\Choix
     */
    public function getIdReponse()
    {
        return $this->idReponse;
    }

    /**
     * Add idTest
     *
     * @param \AppBundle\Entity\Test $idTest
     *
     * @return Question
     */
    public function addIdTest(\AppBundle\Entity\Test $idTest)
    {
        $this->idTest[] = $idTest;

        return $this;
    }

    /**
     * Remove idTest
     *
     * @param \AppBundle\Entity\Test $idTest
     */
    public function removeIdTest(\AppBundle\Entity\Test $idTest)
    {
        $this->idTest->removeElement($idTest);
    }

    /**
     * Get idTest
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdTest()
    {
        return $this->idTest;
    }
}
