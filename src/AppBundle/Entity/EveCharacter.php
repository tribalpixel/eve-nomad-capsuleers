<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EveCharacter
 *
 * @ORM\Table(name="enp_characters")
 * @ORM\Entity
 */
class EveCharacter
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime")
     */
    private $updatedAt;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="characterID", type="bigint")
     */
    private $characterID;

    /**
     * @var string
     *
     * @ORM\Column(name="corporationName", type="string", length=255)
     */
    private $corporationName;

    /**
     * @var integer
     *
     * @ORM\Column(name="corporationID", type="bigint")
     */
    private $corporationID;

    /**
     * @var integer
     *
     * @ORM\Column(name="allianceID", type="bigint")
     */
    private $allianceID;

    /**
     * @var string
     *
     * @ORM\Column(name="allianceName", type="string", length=255)
     */
    private $allianceName;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="display", type="boolean")
     */
    private $display;   

    public function __construct() {
        $this->createdAt = new \Datetime();
        $this->updatedAt = new \Datetime();
        $this->display = true;
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
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return EveCharacter
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
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     * @return EveCharacter
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
     * Set name
     *
     * @param string $name
     * @return EveCharacter
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set characterID
     *
     * @param integer $characterID
     * @return EveCharacter
     */
    public function setCharacterID($characterID)
    {
        $this->characterID = $characterID;

        return $this;
    }

    /**
     * Get characterID
     *
     * @return integer 
     */
    public function getCharacterID()
    {
        return $this->characterID;
    }

    /**
     * Set corporationName
     *
     * @param string $corporationName
     * @return EveCharacter
     */
    public function setCorporationName($corporationName)
    {
        $this->corporationName = $corporationName;

        return $this;
    }

    /**
     * Get corporationName
     *
     * @return string 
     */
    public function getCorporationName()
    {
        return $this->corporationName;
    }

    /**
     * Set corporationID
     *
     * @param integer $corporationID
     * @return EveCharacter
     */
    public function setCorporationID($corporationID)
    {
        $this->corporationID = $corporationID;

        return $this;
    }

    /**
     * Get corporationID
     *
     * @return integer 
     */
    public function getCorporationID()
    {
        return $this->corporationID;
    }

    /**
     * Set allianceID
     *
     * @param integer $allianceID
     * @return EveCharacter
     */
    public function setAllianceID($allianceID)
    {
        $this->allianceID = $allianceID;

        return $this;
    }

    /**
     * Get allianceID
     *
     * @return integer 
     */
    public function getAllianceID()
    {
        return $this->allianceID;
    }

    /**
     * Set allianceName
     *
     * @param string $allianceName
     * @return EveCharacter
     */
    public function setAllianceName($allianceName)
    {
        $this->allianceName = $allianceName;

        return $this;
    }

    /**
     * Get allianceName
     *
     * @return string 
     */
    public function getAllianceName()
    {
        return $this->allianceName;
    }

    /**
     * Set display
     *
     * @param boolean $display
     * @return EveCharacter
     */
    public function setDisplay($display)
    {
        $this->display = $display;

        return $this;
    }

    /**
     * Get display
     *
     * @return boolean 
     */
    public function getDisplay()
    {
        return $this->display;
    }
}
