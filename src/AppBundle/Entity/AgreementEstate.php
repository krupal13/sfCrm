<<<<<<< HEAD
<?php 

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class AgreementEstate
 *
 * @ORM\Entity
 */
class AgreementEstate extends Agreement
{
    /**
     * @var string
     *
     * @ORM\Column(name="estate", type="string", length=100)
=======
<?php

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Description of AgreementEstate
 * @ORM\Entity
 */
class AgreementEstate extends Agreement {
    /**
     * @var string
     *
     * @ORM\Column(name="estate", type="string", length=255)
>>>>>>> 5f9797c42581054637d073b6f24e8a1c70bb5cca
     */
    private $estate;

    /**
     * Set estate
     *
     * @param string $estate
     *
     * @return AgreementEstate
     */
    public function setEstate($estate)
    {
        $this->estate = $estate;

        return $this;
    }

    /**
     * Get estate
     *
     * @return string
     */
    public function getEstate()
    {
        return $this->estate;
    }
<<<<<<< HEAD

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return AgreementEstate
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return AgreementEstate
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }
=======
>>>>>>> 5f9797c42581054637d073b6f24e8a1c70bb5cca
}
