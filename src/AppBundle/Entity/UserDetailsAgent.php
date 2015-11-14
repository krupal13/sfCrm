<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserDetailsAgent
 * @ORM\Entity
 */
class UserDetailsAgent extends UserDetails {
    
    
    /**
     * @var decimal
     *
     * @ORM\Column(name="commission", type="decimal", scale=2, precision=10)
     */
    private $commission;
    
    /**
     * @var \Doctrine\Common\Collection\ArrayCollection
     * @ORM\OneToMany(targetEntity="Agreement", mappedBy="agent")
     * 
     */
    private $agreements;

    /**
     * Set commission
     *
     * @param string $commission
     *
     * @return UserDetailsAgent
     */
    public function setCommission($commission)
    {
        $this->commission = $commission;

        return $this;
    }

    /**
     * Get commission
     *
     * @return string
     */
    public function getCommission()
    {
        return $this->commission;
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
     * Constructor
     */
    public function __construct()
    {
        $this->agreements = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add agreement
     *
     * @param \AppBundle\Entity\Agreement $agreement
     *
     * @return UserDetailsAgent
     */
    public function addAgreement(\AppBundle\Entity\Agreement $agreement)
    {
        $this->agreements[] = $agreement;

        return $this;
    }

    /**
     * Remove agreement
     *
     * @param \AppBundle\Entity\Agreement $agreement
     */
    public function removeAgreement(\AppBundle\Entity\Agreement $agreement)
    {
        $this->agreements->removeElement($agreement);
    }

    /**
     * Get agreements
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAgreements()
    {
        return $this->agreements;
    }
}
