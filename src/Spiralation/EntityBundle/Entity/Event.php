<?php

namespace Spiralation\EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Event
 */
class Event
{
    /**
     * @var string
     */
    private $eventName;

    /**
     * @var integer
     */
    private $organizationId;

    /**
     * @var string
     */
    private $details;

    /**
     * @var integer
     */
    private $eventId;

    /**
     * @var \Spiralation\EntityBundle\Entity\Project
     */
    private $project;


    /**
     * Set eventName
     *
     * @param string $eventName
     * @return Event
     */
    public function setEventName($eventName)
    {
        $this->eventName = $eventName;
    
        return $this;
    }

    /**
     * Get eventName
     *
     * @return string 
     */
    public function getEventName()
    {
        return $this->eventName;
    }

    /**
     * Set organizationId
     *
     * @param integer $organizationId
     * @return Event
     */
    public function setOrganizationId($organizationId)
    {
        $this->organizationId = $organizationId;
    
        return $this;
    }

    /**
     * Get organizationId
     *
     * @return integer 
     */
    public function getOrganizationId()
    {
        return $this->organizationId;
    }

    /**
     * Set details
     *
     * @param string $details
     * @return Event
     */
    public function setDetails($details)
    {
        $this->details = $details;
    
        return $this;
    }

    /**
     * Get details
     *
     * @return string 
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * Get eventId
     *
     * @return integer 
     */
    public function getEventId()
    {
        return $this->eventId;
    }

    /**
     * Set project
     *
     * @param \Spiralation\EntityBundle\Entity\Project $project
     * @return Event
     */
    public function setProject(\Spiralation\EntityBundle\Entity\Project $project = null)
    {
        $this->project = $project;
    
        return $this;
    }

    /**
     * Get project
     *
     * @return \Spiralation\EntityBundle\Entity\Project 
     */
    public function getProject()
    {
        return $this->project;
    }
}
