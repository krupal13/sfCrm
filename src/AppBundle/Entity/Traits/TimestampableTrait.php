<?php

namespace AppBundle\Entity\Traits;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Class TimestampableTrait
 */
trait TimestampableTrait
{
<<<<<<< HEAD
=======
    //
>>>>>>> 5f9797c42581054637d073b6f24e8a1c70bb5cca
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime")
<<<<<<< HEAD
     * @Gedmo\Timestampable(on="create")
     */
    protected $createdAt;

=======
     * @Gedmo\Timestampable(on="update")
     */
    protected $createdAt;

    //
>>>>>>> 5f9797c42581054637d073b6f24e8a1c70bb5cca
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime")
     * @Gedmo\Timestampable(on="update")
     */
    protected $updatedAt;
    
    /**
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }
    
    /**
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }
    
<<<<<<< HEAD
}
=======
}
>>>>>>> 5f9797c42581054637d073b6f24e8a1c70bb5cca
