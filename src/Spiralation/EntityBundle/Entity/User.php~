<?php

namespace Spiralation\EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 */
class User
{
    /**
     * @var string
     */
    private $password;

    /**
     * @var integer
     */
    private $role;

    /**
     * @var string
     */
    private $email;

    /**
     * @var \Spiralation\EntityBundle\Entity\Organization
     */
    private $organization;

    /**
     * @var \Spiralation\EntityBundle\Entity\Volunteer
     */
    private $volunteer;


    /**
     * Set password
     *
     * @param string $password
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;
    
        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set role
     *
     * @param integer $role
     * @return User
     */
    public function setRole($role)
    {
        $this->role = $role;
    
        return $this;
    }

    /**
     * Get role
     *
     * @return integer 
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set organization
     *
     * @param \Spiralation\EntityBundle\Entity\Organization $organization
     * @return User
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

    /**
     * Set volunteer
     *
     * @param \Spiralation\EntityBundle\Entity\Volunteer $volunteer
     * @return User
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
}
