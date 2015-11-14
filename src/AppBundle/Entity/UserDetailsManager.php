<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserDetailsManager
 * @ORM\Entity
 */
class UserDetailsManager extends UserDetails
{

    /**
     * @var integer
     *
     * @ORM\Column(name="salary", type="decimal")
     */
    private $salary;

    /**
     * @var decimal
     *
     * @ORM\Column(name="area", type="smallint", scale=2, precision=10)
     */
    private $area;


    /**
     * Set salary
     *
     * @param integer $salary
     *
     * @return UserDetailsManager
     */
    public function setSalary($salary)
    {
        $this->salary = $salary;

        return $this;
    }

    /**
     * Get salary
     *
     * @return integer
     */
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * Set area
     *
     * @param integer $area
     *
     * @return UserDetailsManager
     */
    public function setArea($area)
    {
        $this->area = $area;

        return $this;
    }

    /**
     * Get area
     *
     * @return integer
     */
    public function getArea()
    {
        return $this->area;
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
