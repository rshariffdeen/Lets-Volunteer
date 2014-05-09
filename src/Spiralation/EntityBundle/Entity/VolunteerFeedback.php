<?php

namespace Spiralation\EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VolunteerFeedback
 */
class VolunteerFeedback
{
    /**
     * @var float
     */
    private $rating;

    /**
     * @var string
     */
    private $feedback;

    /**
     * @var integer
     */
    private $vfeedbackId;

    /**
     * @var \Spiralation\EntityBundle\Entity\Volunteer
     */
    private $volunteer;

    /**
     * @var \Spiralation\EntityBundle\Entity\Event
     */
    private $event;

    /**
     * @var \Spiralation\EntityBundle\Entity\Organization
     */
    private $organization;


    /**
     * Set rating
     *
     * @param float $rating
     * @return VolunteerFeedback
     */
    public function setRating($rating)
    {
        $this->rating = $rating;
    
        return $this;
    }

    /**
     * Get rating
     *
     * @return float 
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * Set feedback
     *
     * @param string $feedback
     * @return VolunteerFeedback
     */
    public function setFeedback($feedback)
    {
        $this->feedback = $feedback;
    
        return $this;
    }

    /**
     * Get feedback
     *
     * @return string 
     */
    public function getFeedback()
    {
        return $this->feedback;
    }

    /**
     * Get vfeedbackId
     *
     * @return integer 
     */
    public function getVfeedbackId()
    {
        return $this->vfeedbackId;
    }

    /**
     * Set volunteer
     *
     * @param \Spiralation\EntityBundle\Entity\Volunteer $volunteer
     * @return VolunteerFeedback
     */
    public function setVolunteer(\Spiralation\EntityBundle\Entity\Volunteer $volunteer = null)
    {
        $this->volunteer = $volunteer;
    
        return $this;
    }

    /**
     * Get volunteer
     *
     * @return \Spiralation\EntityBundle\Entity\Volunteer 
     */
    public function getVolunteer()
    {
        return $this->volunteer;
    }

    /**
     * Set event
     *
     * @param \Spiralation\EntityBundle\Entity\Event $event
     * @return VolunteerFeedback
     */
    public function setEvent(\Spiralation\EntityBundle\Entity\Event $event = null)
    {
        $this->event = $event;
    
        return $this;
    }

    /**
     * Get event
     *
     * @return \Spiralation\EntityBundle\Entity\Event 
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * Set organization
     *
     * @param \Spiralation\EntityBundle\Entity\Organization $organization
     * @return VolunteerFeedback
     */
    public function setOrganization(\Spiralation\EntityBundle\Entity\Organization $organization = null)
    {
        $this->organization = $organization;
    
        return $this;
    }

    /**
     * Get organization
     *
     * @return \Spiralation\EntityBundle\Entity\Organization 
     */
    public function getOrganization()
    {
        return $this->organization;
    }
}
