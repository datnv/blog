<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user", indexes={@ORM\Index(name="u_mail", columns={"u_mail"})})
 * @ORM\Entity
 */
class User
{
    /**
     * @var int
     *
     * @ORM\Column(name="u_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $uId;

    /**
     * @var string
     *
     * @ORM\Column(name="u_name", type="string", length=200, nullable=false)
     */
    private $uName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="u_tel", type="string", length=20, nullable=true, options={"default"="NULL"})
     */
    private $uTel = NULL;

    /**
     * @var string
     *
     * @ORM\Column(name="u_mail", type="string", length=200, nullable=false)
     */
    private $uMail;

    /**
     * @var string
     *
     * @ORM\Column(name="u_password", type="string", length=50, nullable=false)
     */
    private $uPassword;

    /**
     * @var int
     *
     * @ORM\Column(name="u_role", type="integer", nullable=false, options={"comment"="1: super admin, 2: admin(bloger), 3:viewer"})
     */
    private $uRole;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="u_insert_date", type="datetime", nullable=false)
     */
    private $uInsertDate;

    /**
     * @var int
     *
     * @ORM\Column(name="u_insert_id", type="integer", nullable=false)
     */
    private $uInsertId;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="u_update_date", type="datetime", nullable=true, options={"default"="NULL"})
     */
    private $uUpdateDate = NULL;

    /**
     * @var int|null
     *
     * @ORM\Column(name="u_update_id", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $uUpdateId = NULL;

    /**
     * @var int
     *
     * @ORM\Column(name="u_status", type="integer", nullable=false, options={"comment"="1: active, 2: stop, pending, 3: waiting approve, 4: requesting(emailのURL経由で登録待ち)"})
     */
    private $uStatus;

    /**
     * @var int|null
     *
     * @ORM\Column(name="u_social_flag", type="integer", nullable=true, options={"default"="1","comment"="1: simple, 2: facebook, 3:twiter, 4:gmail"})
     */
    private $uSocialFlag = '1';

    /**
     * @var string|null
     *
     * @ORM\Column(name="u_confirm_token", type="string", length=200, nullable=true, options={"default"="NULL","comment"="パスワード再設定用, 登録確認キー"})
     */
    private $uConfirmToken = NULL;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="u_last_login", type="datetime", nullable=true, options={"default"="NULL"})
     */
    private $uLastLogin = NULL;

    /**
     * @var int|null
     *
     * @ORM\Column(name="u_login_count", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $uLoginCount = NULL;

    /**
     * @var int
     *
     * @ORM\Column(name="u_del_flag", type="integer", nullable=false, options={"default"="2","comment"="1: deleted, 2: using"})
     */
    private $uDelFlag = '2';

    public function getUId(): ?int
    {
        return $this->uId;
    }

    public function getUName(): ?string
    {
        return $this->uName;
    }

    public function setUName(string $uName): self
    {
        $this->uName = $uName;

        return $this;
    }

    public function getUTel(): ?string
    {
        return $this->uTel;
    }

    public function setUTel(?string $uTel): self
    {
        $this->uTel = $uTel;

        return $this;
    }

    public function getUMail(): ?string
    {
        return $this->uMail;
    }

    public function setUMail(string $uMail): self
    {
        $this->uMail = $uMail;

        return $this;
    }

    public function getUPassword(): ?string
    {
        return $this->uPassword;
    }

    public function setUPassword(string $uPassword): self
    {
        $this->uPassword = $uPassword;

        return $this;
    }

    public function getURole(): ?int
    {
        return $this->uRole;
    }

    public function setURole(int $uRole): self
    {
        $this->uRole = $uRole;

        return $this;
    }

    public function getUInsertDate(): ?\DateTimeInterface
    {
        return $this->uInsertDate;
    }

    public function setUInsertDate(\DateTimeInterface $uInsertDate): self
    {
        $this->uInsertDate = $uInsertDate;

        return $this;
    }

    public function getUInsertId(): ?int
    {
        return $this->uInsertId;
    }

    public function setUInsertId(int $uInsertId): self
    {
        $this->uInsertId = $uInsertId;

        return $this;
    }

    public function getUUpdateDate(): ?\DateTimeInterface
    {
        return $this->uUpdateDate;
    }

    public function setUUpdateDate(?\DateTimeInterface $uUpdateDate): self
    {
        $this->uUpdateDate = $uUpdateDate;

        return $this;
    }

    public function getUUpdateId(): ?int
    {
        return $this->uUpdateId;
    }

    public function setUUpdateId(?int $uUpdateId): self
    {
        $this->uUpdateId = $uUpdateId;

        return $this;
    }

    public function getUStatus(): ?int
    {
        return $this->uStatus;
    }

    public function setUStatus(int $uStatus): self
    {
        $this->uStatus = $uStatus;

        return $this;
    }

    public function getUSocialFlag(): ?int
    {
        return $this->uSocialFlag;
    }

    public function setUSocialFlag(?int $uSocialFlag): self
    {
        $this->uSocialFlag = $uSocialFlag;

        return $this;
    }

    public function getUConfirmToken(): ?string
    {
        return $this->uConfirmToken;
    }

    public function setUConfirmToken(?string $uConfirmToken): self
    {
        $this->uConfirmToken = $uConfirmToken;

        return $this;
    }

    public function getULastLogin(): ?\DateTimeInterface
    {
        return $this->uLastLogin;
    }

    public function setULastLogin(?\DateTimeInterface $uLastLogin): self
    {
        $this->uLastLogin = $uLastLogin;

        return $this;
    }

    public function getULoginCount(): ?int
    {
        return $this->uLoginCount;
    }

    public function setULoginCount(?int $uLoginCount): self
    {
        $this->uLoginCount = $uLoginCount;

        return $this;
    }

    public function getUDelFlag(): ?int
    {
        return $this->uDelFlag;
    }

    public function setUDelFlag(int $uDelFlag): self
    {
        $this->uDelFlag = $uDelFlag;

        return $this;
    }


}
