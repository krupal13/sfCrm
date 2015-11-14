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
}
