<<<<<<< HEAD
<?php 
=======
<?php
>>>>>>> 5f9797c42581054637d073b6f24e8a1c70bb5cca

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
<<<<<<< HEAD
 * Class AgreementLife
 * 
 * @ORM\Entity
 */
class AgreementLife extends Agreement
{
    /**
     * @var string
     *
     * @ORM\Column(name="person", type="string", length=100)
=======
 * Description of AgreementLife
 *
 * @ORM\Entity
 */
class AgreementLife extends Agreement {
   /**
     * @var string
     *
     * @ORM\Column(name="person", type="string", length=255)
>>>>>>> 5f9797c42581054637d073b6f24e8a1c70bb5cca
     */
    private $person;

    /**
     * Set person
     *
     * @param string $person
     *
     * @return AgreementLife
     */
    public function setPerson($person)
    {
        $this->person = $person;

        return $this;
    }

    /**
     * Get person
     *
     * @return string
     */
    public function getPerson()
    {
        return $this->person;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return AgreementLife
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
     * @return AgreementLife
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }
}
