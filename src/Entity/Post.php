<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Post
 *
 * @ORM\Table(name="post")
 * @ORM\Entity
 */
class Post
{
    /**
     * @var int
     *
     * @ORM\Column(name="p_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="p_discriminator", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $pDiscriminator = NULL;

    /**
     * @var string
     *
     * @ORM\Column(name="p_title", type="string", length=200, nullable=false)
     */
    private $pTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="p_text", type="text", length=65535, nullable=false)
     */
    private $pText;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="p_insert_date", type="datetime", nullable=false)
     */
    private $pInsertDate;

    /**
     * @var int
     *
     * @ORM\Column(name="p_insert_id", type="integer", nullable=false)
     */
    private $pInsertId;

    /**
     * @var int
     *
     * @ORM\Column(name="p_blog_id", type="integer", nullable=false)
     */
    private $pBlogId;

    /**
     * @var int
     *
     * @ORM\Column(name="p_user_id", type="integer", nullable=false)
     */
    private $pUserId;

    /**
     * @var int
     *
     * @ORM\Column(name="p_del_flag", type="integer", nullable=false, options={"default"="2"})
     */
    private $pDelFlag = '2';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="p_update_date", type="datetime", nullable=true, options={"default"="NULL"})
     */
    private $pUpdateDate = NULL;

    /**
     * @var int|null
     *
     * @ORM\Column(name="p_update_id", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $pUpdateId = NULL;

    /**
     * @var string|null
     *
     * @ORM\Column(name="p_main_image", type="string", length=500, nullable=true, options={"default"="NULL"})
     */
    private $pMainImage = NULL;

    /**
     * @var string|null
     *
     * @ORM\Column(name="p_post_image", type="string", length=500, nullable=true, options={"default"="NULL"})
     */
    private $pPostImage = NULL;

    /**
     * @var int
     *
     * @ORM\Column(name="p_category_id", type="integer", nullable=false)
     */
    private $pCategoryId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="p_tag", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $pTag = NULL;

    public function getPId(): ?int
    {
        return $this->pId;
    }

    public function getPDiscriminator(): ?string
    {
        return $this->pDiscriminator;
    }

    public function setPDiscriminator(?string $pDiscriminator): self
    {
        $this->pDiscriminator = $pDiscriminator;

        return $this;
    }

    public function getPTitle(): ?string
    {
        return $this->pTitle;
    }

    public function setPTitle(string $pTitle): self
    {
        $this->pTitle = $pTitle;

        return $this;
    }

    public function getPText(): ?string
    {
        return $this->pText;
    }

    public function setPText(string $pText): self
    {
        $this->pText = $pText;

        return $this;
    }

    public function getPInsertDate(): ?\DateTimeInterface
    {
        return $this->pInsertDate;
    }

    public function setPInsertDate(\DateTimeInterface $pInsertDate): self
    {
        $this->pInsertDate = $pInsertDate;

        return $this;
    }

    public function getPInsertId(): ?int
    {
        return $this->pInsertId;
    }

    public function setPInsertId(int $pInsertId): self
    {
        $this->pInsertId = $pInsertId;

        return $this;
    }

    public function getPBlogId(): ?int
    {
        return $this->pBlogId;
    }

    public function setPBlogId(int $pBlogId): self
    {
        $this->pBlogId = $pBlogId;

        return $this;
    }

    public function getPUserId(): ?int
    {
        return $this->pUserId;
    }

    public function setPUserId(int $pUserId): self
    {
        $this->pUserId = $pUserId;

        return $this;
    }

    public function getPDelFlag(): ?int
    {
        return $this->pDelFlag;
    }

    public function setPDelFlag(int $pDelFlag): self
    {
        $this->pDelFlag = $pDelFlag;

        return $this;
    }

    public function getPUpdateDate(): ?\DateTimeInterface
    {
        return $this->pUpdateDate;
    }

    public function setPUpdateDate(?\DateTimeInterface $pUpdateDate): self
    {
        $this->pUpdateDate = $pUpdateDate;

        return $this;
    }

    public function getPUpdateId(): ?int
    {
        return $this->pUpdateId;
    }

    public function setPUpdateId(?int $pUpdateId): self
    {
        $this->pUpdateId = $pUpdateId;

        return $this;
    }

    public function getPMainImage(): ?string
    {
        return $this->pMainImage;
    }

    public function setPMainImage(?string $pMainImage): self
    {
        $this->pMainImage = $pMainImage;

        return $this;
    }

    public function getPPostImage(): ?string
    {
        return $this->pPostImage;
    }

    public function setPPostImage(?string $pPostImage): self
    {
        $this->pPostImage = $pPostImage;

        return $this;
    }

    public function getPCategoryId(): ?int
    {
        return $this->pCategoryId;
    }

    public function setPCategoryId(int $pCategoryId): self
    {
        $this->pCategoryId = $pCategoryId;

        return $this;
    }

    public function getPTag(): ?string
    {
        return $this->pTag;
    }

    public function setPTag(?string $pTag): self
    {
        $this->pTag = $pTag;

        return $this;
    }


}
