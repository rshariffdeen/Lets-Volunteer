<?php

namespace Spiralation\EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Skills
 */
class Skills
{
    /**
     * @var string
     */
    private $skillName;

    /**
     * @var string
     */
    private $skilledVolunteers;

    /**
     * @var integer
     */
    private $skillId;


    /**
     * Set skillName
     *
     * @param string $skillName
     * @return Skills
     */
    public function setSkillName($skillName)
    {
        $this->skillName = $skillName;
    
        return $this;
    }

    /**
     * Get skillName
     *
     * @return string 
     */
    public function getSkillName()
    {
        return $this->skillName;
    }

    /**
     * Set skilledVolunteers
     *
     * @param string $skilledVolunteers
     * @return Skills
     */
    public function setSkilledVolunteers($skilledVolunteers)
    {
        $this->skilledVolunteers = $skilledVolunteers;
    
        return $this;
    }

    /**
     * Get skilledVolunteers
     *
     * @return string 
     */
    public function getSkilledVolunteers()
    {
        return $this->skilledVolunteers;
    }

    /**
     * Get skillId
     *
     * @return integer 
     */
    public function getSkillId()
    {
        return $this->skillId;
    }
}
