<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categories
 *
 * @ORM\Table(name="categories")
 * @ORM\Entity
 */
class Categories
{
    /**
     * @var int
     *
     * @ORM\Column(name="cat_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $catId;

    /**
     * @var string
     *
     * @ORM\Column(name="cat_name", type="string", length=200, nullable=false)
     */
    private $catName;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="cat_insert_date", type="datetime", nullable=false)
     */
    private $catInsertDate;

    /**
     * @var int
     *
     * @ORM\Column(name="cat_insert_id", type="integer", nullable=false)
     */
    private $catInsertId;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="cat_update_date", type="datetime", nullable=true, options={"default"="NULL"})
     */
    private $catUpdateDate = NULL;

    /**
     * @var int|null
     *
     * @ORM\Column(name="cat_update_id", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $catUpdateId = NULL;

    /**
     * @var int
     *
     * @ORM\Column(name="cat_del_flag", type="integer", nullable=false, options={"default"="2"})
     */
    private $catDelFlag = '2';

    /**
     * @var int
     *
     * @ORM\Column(name="cat_user_id", type="integer", nullable=false)
     */
    private $catUserId;

    /**
     * @var int
     *
     * @ORM\Column(name="cat_blog_id", type="integer", nullable=false)
     */
    private $catBlogId;

    public function getCatId(): ?int
    {
        return $this->catId;
    }

    public function getCatName(): ?string
    {
        return $this->catName;
    }

    public function setCatName(string $catName): self
    {
        $this->catName = $catName;

        return $this;
    }

    public function getCatInsertDate(): ?\DateTimeInterface
    {
        return $this->catInsertDate;
    }

    public function setCatInsertDate(\DateTimeInterface $catInsertDate): self
    {
        $this->catInsertDate = $catInsertDate;

        return $this;
    }

    public function getCatInsertId(): ?int
    {
        return $this->catInsertId;
    }

    public function setCatInsertId(int $catInsertId): self
    {
        $this->catInsertId = $catInsertId;

        return $this;
    }

    public function getCatUpdateDate(): ?\DateTimeInterface
    {
        return $this->catUpdateDate;
    }

    public function setCatUpdateDate(?\DateTimeInterface $catUpdateDate): self
    {
        $this->catUpdateDate = $catUpdateDate;

        return $this;
    }

    public function getCatUpdateId(): ?int
    {
        return $this->catUpdateId;
    }

    public function setCatUpdateId(?int $catUpdateId): self
    {
        $this->catUpdateId = $catUpdateId;

        return $this;
    }

    public function getCatDelFlag(): ?int
    {
        return $this->catDelFlag;
    }

    public function setCatDelFlag(int $catDelFlag): self
    {
        $this->catDelFlag = $catDelFlag;

        return $this;
    }

    public function getCatUserId(): ?int
    {
        return $this->catUserId;
    }

    public function setCatUserId(int $catUserId): self
    {
        $this->catUserId = $catUserId;

        return $this;
    }

    public function getCatBlogId(): ?int
    {
        return $this->catBlogId;
    }

    public function setCatBlogId(int $catBlogId): self
    {
        $this->catBlogId = $catBlogId;

        return $this;
    }


}
