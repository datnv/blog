<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Blog
 *
 * @ORM\Table(name="blog", indexes={@ORM\Index(name="b_url_name", columns={"b_url_name"})})
 * @ORM\Entity
 */
class Blog
{
    /**
     * @var int
     *
     * @ORM\Column(name="b_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $bId;

    /**
     * @var string
     *
     * @ORM\Column(name="b_url_name", type="string", length=50, nullable=false, options={"comment"="tên đường dẫn sau tên miền tới trang blog cá nhân của mình"})
     */
    private $bUrlName;

    /**
     * @var int
     *
     * @ORM\Column(name="b_allow_comment", type="integer", nullable=false, options={"default"="1","comment"="1: allow, 2: not allow"})
     */
    private $bAllowComment = '1';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="b_insert_date", type="datetime", nullable=false)
     */
    private $bInsertDate;

    /**
     * @var int
     *
     * @ORM\Column(name="b_insert_id", type="integer", nullable=false)
     */
    private $bInsertId;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="b_udpate_date", type="datetime", nullable=true, options={"default"="NULL"})
     */
    private $bUdpateDate = NULL;

    /**
     * @var int|null
     *
     * @ORM\Column(name="b_update_id", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $bUpdateId = NULL;

    /**
     * @var int
     *
     * @ORM\Column(name="b_del_flag", type="integer", nullable=false, options={"default"="2","comment"="1: deleted, 2: using"})
     */
    private $bDelFlag = '2';

    /**
     * @var string
     *
     * @ORM\Column(name="b_title", type="string", length=200, nullable=false)
     */
    private $bTitle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="b_subtitle", type="string", length=200, nullable=true, options={"default"="NULL"})
     */
    private $bSubtitle = NULL;

    public function getBId(): ?int
    {
        return $this->bId;
    }

    public function getBUrlName(): ?string
    {
        return $this->bUrlName;
    }

    public function setBUrlName(string $bUrlName): self
    {
        $this->bUrlName = $bUrlName;

        return $this;
    }

    public function getBAllowComment(): ?int
    {
        return $this->bAllowComment;
    }

    public function setBAllowComment(int $bAllowComment): self
    {
        $this->bAllowComment = $bAllowComment;

        return $this;
    }

    public function getBInsertDate(): ?\DateTimeInterface
    {
        return $this->bInsertDate;
    }

    public function setBInsertDate(\DateTimeInterface $bInsertDate): self
    {
        $this->bInsertDate = $bInsertDate;

        return $this;
    }

    public function getBInsertId(): ?int
    {
        return $this->bInsertId;
    }

    public function setBInsertId(int $bInsertId): self
    {
        $this->bInsertId = $bInsertId;

        return $this;
    }

    public function getBUdpateDate(): ?\DateTimeInterface
    {
        return $this->bUdpateDate;
    }

    public function setBUdpateDate(?\DateTimeInterface $bUdpateDate): self
    {
        $this->bUdpateDate = $bUdpateDate;

        return $this;
    }

    public function getBUpdateId(): ?int
    {
        return $this->bUpdateId;
    }

    public function setBUpdateId(?int $bUpdateId): self
    {
        $this->bUpdateId = $bUpdateId;

        return $this;
    }

    public function getBDelFlag(): ?int
    {
        return $this->bDelFlag;
    }

    public function setBDelFlag(int $bDelFlag): self
    {
        $this->bDelFlag = $bDelFlag;

        return $this;
    }

    public function getBTitle(): ?string
    {
        return $this->bTitle;
    }

    public function setBTitle(string $bTitle): self
    {
        $this->bTitle = $bTitle;

        return $this;
    }

    public function getBSubtitle(): ?string
    {
        return $this->bSubtitle;
    }

    public function setBSubtitle(?string $bSubtitle): self
    {
        $this->bSubtitle = $bSubtitle;

        return $this;
    }


}
