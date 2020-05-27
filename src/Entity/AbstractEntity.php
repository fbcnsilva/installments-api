<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\MappedSuperclass
 * @ORM\HasLifecycleCallbacks
 */
abstract class AbstractEntity
{
    /**
     * @ORM\Column(type="boolean", options={"default": true})
     * @Groups({"default"})
     */
    public $isActive;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     * @Groups({"default"})
     */
    public $createdAt;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     * @Groups({"default"})
     */
    public $updatedAt;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     * @Groups({"default"})
     */
    public $deletedAt;

    /**
     * Get entity state.
     *
     * @return boolean
     */
    public function getIsActive(): bool
    {
        return $this->isActive;
    }

    /**
     * Returns the datetime when an entity was created.
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Returns the datetime when an entity was updated.
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Returns the datetime when an entity was deleted.
     *
     * @return \DateTime
     */
    public function getDeletedAt()
    {
        return $this->deletedAt;
    }

    /**
     * Set entity state.
     *
     * @param boolean $isActive
     * @return self
     */
    public function setIsActive(bool $isActive): self
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Set datetime when entity was deleted.
     *
     * @param \Datetime|null $deletedAt
     * @return $this
     */
    public function setDeletedAt(\DateTime $deletedAt = null)
    {
        $this->deletedAt = $deletedAt;

        return $this;
    }
}
