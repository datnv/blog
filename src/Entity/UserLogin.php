<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserLogin
 *
 * @ORM\Table(name="user_login", indexes={@ORM\Index(name="ul_user_id", columns={"ul_user_id"})})
 * @ORM\Entity
 */
class UserLogin
{
    /**
     * @var int
     *
     * @ORM\Column(name="ul_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ulId;

    /**
     * @var int
     *
     * @ORM\Column(name="ul_user_id", type="integer", nullable=false)
     */
    private $ulUserId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ul_login_date", type="datetime", nullable=false)
     */
    private $ulLoginDate;

    /**
     * @var string
     *
     * @ORM\Column(name="ul_login_ip", type="string", length=200, nullable=false)
     */
    private $ulLoginIp;

    public function getUlId(): ?int
    {
        return $this->ulId;
    }

    public function getUlUserId(): ?int
    {
        return $this->ulUserId;
    }

    public function setUlUserId(int $ulUserId): self
    {
        $this->ulUserId = $ulUserId;

        return $this;
    }

    public function getUlLoginDate(): ?\DateTimeInterface
    {
        return $this->ulLoginDate;
    }

    public function setUlLoginDate(\DateTimeInterface $ulLoginDate): self
    {
        $this->ulLoginDate = $ulLoginDate;

        return $this;
    }

    public function getUlLoginIp(): ?string
    {
        return $this->ulLoginIp;
    }

    public function setUlLoginIp(string $ulLoginIp): self
    {
        $this->ulLoginIp = $ulLoginIp;

        return $this;
    }


}
