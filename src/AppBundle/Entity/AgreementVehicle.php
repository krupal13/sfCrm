<<<<<<< HEAD
<?php 
=======
<?php
>>>>>>> 5f9797c42581054637d073b6f24e8a1c70bb5cca

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
<<<<<<< HEAD
 * Class AgreementVehile
 *
 * @ORM\Entity
 */
class AgreementVehicle extends Agreement
{
    /**
     * @var string
     *
     * @ORM\Column(name="vehicle", type="string", length=100)
     */
    private $vehicle;

=======
 * Description of AgreementVehicle
 * 
 * @ORM\Entity
 */
class AgreementVehicle extends Agreement {

    /**
     * @var string
     *
     * @ORM\Column(name="vehicle", type="string", length=255)
     */
    private $vehicle;


>>>>>>> 5f9797c42581054637d073b6f24e8a1c70bb5cca
    /**
     * Set vehicle
     *
     * @param string $vehicle
     *
     * @return AgreementVehicle
     */
    public function setVehicle($vehicle)
    {
        $this->vehicle = $vehicle;

        return $this;
    }

    /**
     * Get vehicle
     *
     * @return string
     */
    public function getVehicle()
    {
        return $this->vehicle;
    }
<<<<<<< HEAD

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return AgreementVehicle
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
     * @return AgreementVehicle
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }
=======
>>>>>>> 5f9797c42581054637d073b6f24e8a1c70bb5cca
}
