<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserBlog
 *
 * @ORM\Table(name="user_blog")
 * @ORM\Entity
 */
class UserBlog
{
    /**
     * @var int
     *
     * @ORM\Column(name="ub_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ubId;

    /**
     * @var int
     *
     * @ORM\Column(name="ub_user_id", type="integer", nullable=false)
     */
    private $ubUserId;

    /**
     * @var int
     *
     * @ORM\Column(name="ub_blog_id", type="integer", nullable=false)
     */
    private $ubBlogId;

    public function getUbId(): ?int
    {
        return $this->ubId;
    }

    public function getUbUserId(): ?int
    {
        return $this->ubUserId;
    }

    public function setUbUserId(int $ubUserId): self
    {
        $this->ubUserId = $ubUserId;

        return $this;
    }

    public function getUbBlogId(): ?int
    {
        return $this->ubBlogId;
    }

    public function setUbBlogId(int $ubBlogId): self
    {
        $this->ubBlogId = $ubBlogId;

        return $this;
    }


}
