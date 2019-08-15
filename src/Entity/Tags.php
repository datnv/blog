<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tags
 *
 * @ORM\Table(name="tags")
 * @ORM\Entity
 */
class Tags
{
    /**
     * @var int
     *
     * @ORM\Column(name="t_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="t_name", type="string", length=200, nullable=true, options={"default"="NULL"})
     */
    private $tName = NULL;

    /**
     * @var string|null
     *
     * @ORM\Column(name="t_item_type", type="string", length=200, nullable=true, options={"default"="NULL"})
     */
    private $tItemType = NULL;

    public function getTId(): ?int
    {
        return $this->tId;
    }

    public function getTName(): ?string
    {
        return $this->tName;
    }

    public function setTName(?string $tName): self
    {
        $this->tName = $tName;

        return $this;
    }

    public function getTItemType(): ?string
    {
        return $this->tItemType;
    }

    public function setTItemType(?string $tItemType): self
    {
        $this->tItemType = $tItemType;

        return $this;
    }


}
