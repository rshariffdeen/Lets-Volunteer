<?php

namespace Spiralation\EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Project
 */
class Project
{
    /**
     * @var string
     */
    private $details;

    /**
     * @var integer
     */
    private $projectId;

    /**
     * @var \Spiralation\EntityBundle\Entity\Organization
     */
    private $organization;


    /**
     * Set details
     *
     * @param string $details
     * @return Project
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
     * Get projectId
     *
     * @return integer 
     */
    public function getProjectId()
    {
        return $this->projectId;
    }

    /**
     * Set organization
     *
     * @param \Spiralation\EntityBundle\Entity\Organization $organization
     * @return Project
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
