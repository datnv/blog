<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comment
 *
 * @ORM\Table(name="comment", uniqueConstraints={@ORM\UniqueConstraint(name="c_id", columns={"c_id"})})
 * @ORM\Entity
 */
class Comment
{
    /**
     * @var int
     *
     * @ORM\Column(name="c_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cId;

    /**
     * @var int
     *
     * @ORM\Column(name="c_post_id", type="integer", nullable=false)
     */
    private $cPostId;

    /**
     * @var string
     *
     * @ORM\Column(name="c_email", type="string", length=200, nullable=false)
     */
    private $cEmail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="c_homepage", type="string", length=200, nullable=true, options={"default"="NULL"})
     */
    private $cHomepage = NULL;

    /**
     * @var string
     *
     * @ORM\Column(name="c_name", type="string", length=200, nullable=false)
     */
    private $cName;

    /**
     * @var string
     *
     * @ORM\Column(name="c_text", type="text", length=65535, nullable=false)
     */
    private $cText;

    /**
     * @var string|null
     *
     * @ORM\Column(name="c_ip", type="string", length=50, nullable=true, options={"default"="NULL"})
     */
    private $cIp = NULL;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="c_insert_date", type="datetime", nullable=false)
     */
    private $cInsertDate;

    /**
     * @var int
     *
     * @ORM\Column(name="c_del_flag", type="integer", nullable=false, options={"default"="2"})
     */
    private $cDelFlag = '2';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="c_update_date", type="datetime", nullable=true, options={"default"="NULL"})
     */
    private $cUpdateDate = NULL;

    /**
     * @var int
     *
     * @ORM\Column(name="c_insert_id", type="integer", nullable=false)
     */
    private $cInsertId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="c_update_id", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $cUpdateId = NULL;

    public function getCId(): ?int
    {
        return $this->cId;
    }

    public function getCPostId(): ?int
    {
        return $this->cPostId;
    }

    public function setCPostId(int $cPostId): self
    {
        $this->cPostId = $cPostId;

        return $this;
    }

    public function getCEmail(): ?string
    {
        return $this->cEmail;
    }

    public function setCEmail(string $cEmail): self
    {
        $this->cEmail = $cEmail;

        return $this;
    }

    public function getCHomepage(): ?string
    {
        return $this->cHomepage;
    }

    public function setCHomepage(?string $cHomepage): self
    {
        $this->cHomepage = $cHomepage;

        return $this;
    }

    public function getCName(): ?string
    {
        return $this->cName;
    }

    public function setCName(string $cName): self
    {
        $this->cName = $cName;

        return $this;
    }

    public function getCText(): ?string
    {
        return $this->cText;
    }

    public function setCText(string $cText): self
    {
        $this->cText = $cText;

        return $this;
    }

    public function getCIp(): ?string
    {
        return $this->cIp;
    }

    public function setCIp(?string $cIp): self
    {
        $this->cIp = $cIp;

        return $this;
    }

    public function getCInsertDate(): ?\DateTimeInterface
    {
        return $this->cInsertDate;
    }

    public function setCInsertDate(\DateTimeInterface $cInsertDate): self
    {
        $this->cInsertDate = $cInsertDate;

        return $this;
    }

    public function getCDelFlag(): ?int
    {
        return $this->cDelFlag;
    }

    public function setCDelFlag(int $cDelFlag): self
    {
        $this->cDelFlag = $cDelFlag;

        return $this;
    }

    public function getCUpdateDate(): ?\DateTimeInterface
    {
        return $this->cUpdateDate;
    }

    public function setCUpdateDate(?\DateTimeInterface $cUpdateDate): self
    {
        $this->cUpdateDate = $cUpdateDate;

        return $this;
    }

    public function getCInsertId(): ?int
    {
        return $this->cInsertId;
    }

    public function setCInsertId(int $cInsertId): self
    {
        $this->cInsertId = $cInsertId;

        return $this;
    }

    public function getCUpdateId(): ?int
    {
        return $this->cUpdateId;
    }

    public function setCUpdateId(?int $cUpdateId): self
    {
        $this->cUpdateId = $cUpdateId;

        return $this;
    }


}
