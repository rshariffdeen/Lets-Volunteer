<?php

namespace Spiralation\EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Volunteer
 */
class Volunteer
{
    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    private $firstName;

    /**
     * @var string
     */
    private $lastName;

    /**
     * @var \DateTime
     */
    private $dateOfBirth;

    /**
     * @var string
     */
    private $city;

    /**
     * @var integer
     */
    private $contactNumber;

    /**
     * @var string
     */
    private $profession;

    /**
     * @var string
     */
    private $organization;

    /**
     * @var string
     */
    private $skills;

    /**
     * @var string
     */
    private $causes;

    /**
     * @var string
     */
    private $feedbacks;

    /**
     * @var string
     */
    private $project;

    /**
     * @var string
     */
    private $followingOrganizations;

    /**
     * @var float
     */
    private $rating;

    /**
     * @var integer
     */
    private $volunteerId;


    /**
     * Set email
     *
     * @param string $email
     * @return Volunteer
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
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
     * Set password
     *
     * @param string $password
     * @return Volunteer
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
     * Set firstName
     *
     * @param string $firstName
     * @return Volunteer
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    
        return $this;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     * @return Volunteer
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    
        return $this;
    }

    /**
     * Get lastName
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set dateOfBirth
     *
     * @param \DateTime $dateOfBirth
     * @return Volunteer
     */
    public function setDateOfBirth($dateOfBirth)
    {
        $this->dateOfBirth = $dateOfBirth;
    
        return $this;
    }

    /**
     * Get dateOfBirth
     *
     * @return \DateTime 
     */
    public function getDateOfBirth()
    {
        return $this->dateOfBirth;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return Volunteer
     */
    public function setCity($city)
    {
        $this->city = $city;
    
        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set contactNumber
     *
     * @param integer $contactNumber
     * @return Volunteer
     */
    public function setContactNumber($contactNumber)
    {
        $this->contactNumber = $contactNumber;
    
        return $this;
    }

    /**
     * Get contactNumber
     *
     * @return integer 
     */
    public function getContactNumber()
    {
        return $this->contactNumber;
    }

    /**
     * Set profession
     *
     * @param string $profession
     * @return Volunteer
     */
    public function setProfession($profession)
    {
        $this->profession = $profession;
    
        return $this;
    }

    /**
     * Get profession
     *
     * @return string 
     */
    public function getProfession()
    {
        return $this->profession;
    }

    /**
     * Set organization
     *
     * @param string $organization
     * @return Volunteer
     */
    public function setOrganization($organization)
    {
        $this->organization = $organization;
    
        return $this;
    }

    /**
     * Get organization
     *
     * @return string 
     */
    public function getOrganization()
    {
        return $this->organization;
    }

    /**
     * Set skills
     *
     * @param string $skills
     * @return Volunteer
     */
    public function setSkills($skills)
    {
        $this->skills = $skills;
    
        return $this;
    }

    /**
     * Get skills
     *
     * @return string 
     */
    public function getSkills()
    {
        return $this->skills;
    }

    /**
     * Set causes
     *
     * @param string $causes
     * @return Volunteer
     */
    public function setCauses($causes)
    {
        $this->causes = $causes;
    
        return $this;
    }

    /**
     * Get causes
     *
     * @return string 
     */
    public function getCauses()
    {
        return $this->causes;
    }

    /**
     * Set feedbacks
     *
     * @param string $feedbacks
     * @return Volunteer
     */
    public function setFeedbacks($feedbacks)
    {
        $this->feedbacks = $feedbacks;
    
        return $this;
    }

    /**
     * Get feedbacks
     *
     * @return string 
     */
    public function getFeedbacks()
    {
        return $this->feedbacks;
    }

    /**
     * Set project
     *
     * @param string $project
     * @return Volunteer
     */
    public function setProject($project)
    {
        $this->project = $project;
    
        return $this;
    }

    /**
     * Get project
     *
     * @return string 
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Set followingOrganizations
     *
     * @param string $followingOrganizations
     * @return Volunteer
     */
    public function setFollowingOrganizations($followingOrganizations)
    {
        $this->followingOrganizations = $followingOrganizations;
    
        return $this;
    }

    /**
     * Get followingOrganizations
     *
     * @return string 
     */
    public function getFollowingOrganizations()
    {
        return $this->followingOrganizations;
    }

    /**
     * Set rating
     *
     * @param float $rating
     * @return Volunteer
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
     * Get volunteerId
     *
     * @return integer 
     */
    public function getVolunteerId()
    {
        return $this->volunteerId;
    }
}
