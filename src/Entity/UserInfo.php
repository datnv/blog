<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserInfo
 *
 * @ORM\Table(name="user_info")
 * @ORM\Entity
 */
class UserInfo
{
    /**
     * @var int
     *
     * @ORM\Column(name="ui_u_id", type="integer", nullable=false, options={"comment"="Userのu_id"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $uiUId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ui_live_address", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $uiLiveAddress = NULL;

    /**
     * @var string
     *
     * @ORM\Column(name="ui_name", type="string", length=200, nullable=false, options={"comment"="user name"})
     */
    private $uiName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ui_tel", type="string", length=20, nullable=true, options={"default"="NULL"})
     */
    private $uiTel = NULL;

    /**
     * @var string
     *
     * @ORM\Column(name="ui_mail", type="string", length=200, nullable=false)
     */
    private $uiMail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ui_image", type="string", length=200, nullable=true, options={"default"="NULL"})
     */
    private $uiImage = NULL;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ui_introduce", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $uiIntroduce = NULL;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ui_work_at", type="string", length=200, nullable=true, options={"default"="NULL"})
     */
    private $uiWorkAt = NULL;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ui_sex", type="integer", nullable=true, options={"default"="NULL","comment"="1:male, 2: female"})
     */
    private $uiSex = NULL;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ui_birthday", type="string", length=10, nullable=true, options={"default"="NULL"})
     */
    private $uiBirthday = NULL;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ui_relationship", type="integer", nullable=true, options={"default"="NULL","comment"="1: Độc thân, 2:đã kết hôn, 3: đang hẹn hò..."})
     */
    private $uiRelationship = NULL;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ui_blog_url", type="string", length=200, nullable=true, options={"default"="NULL"})
     */
    private $uiBlogUrl = NULL;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ui_language_use", type="string", length=200, nullable=true, options={"default"="NULL"})
     */
    private $uiLanguageUse = NULL;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ui_nick_name", type="string", length=200, nullable=true, options={"default"="NULL"})
     */
    private $uiNickName = NULL;

    public function getUiUId(): ?int
    {
        return $this->uiUId;
    }

    public function getUiLiveAddress(): ?string
    {
        return $this->uiLiveAddress;
    }

    public function setUiLiveAddress(?string $uiLiveAddress): self
    {
        $this->uiLiveAddress = $uiLiveAddress;

        return $this;
    }

    public function getUiName(): ?string
    {
        return $this->uiName;
    }

    public function setUiName(string $uiName): self
    {
        $this->uiName = $uiName;

        return $this;
    }

    public function getUiTel(): ?string
    {
        return $this->uiTel;
    }

    public function setUiTel(?string $uiTel): self
    {
        $this->uiTel = $uiTel;

        return $this;
    }

    public function getUiMail(): ?string
    {
        return $this->uiMail;
    }

    public function setUiMail(string $uiMail): self
    {
        $this->uiMail = $uiMail;

        return $this;
    }

    public function getUiImage(): ?string
    {
        return $this->uiImage;
    }

    public function setUiImage(?string $uiImage): self
    {
        $this->uiImage = $uiImage;

        return $this;
    }

    public function getUiIntroduce(): ?string
    {
        return $this->uiIntroduce;
    }

    public function setUiIntroduce(?string $uiIntroduce): self
    {
        $this->uiIntroduce = $uiIntroduce;

        return $this;
    }

    public function getUiWorkAt(): ?string
    {
        return $this->uiWorkAt;
    }

    public function setUiWorkAt(?string $uiWorkAt): self
    {
        $this->uiWorkAt = $uiWorkAt;

        return $this;
    }

    public function getUiSex(): ?int
    {
        return $this->uiSex;
    }

    public function setUiSex(?int $uiSex): self
    {
        $this->uiSex = $uiSex;

        return $this;
    }

    public function getUiBirthday(): ?string
    {
        return $this->uiBirthday;
    }

    public function setUiBirthday(?string $uiBirthday): self
    {
        $this->uiBirthday = $uiBirthday;

        return $this;
    }

    public function getUiRelationship(): ?int
    {
        return $this->uiRelationship;
    }

    public function setUiRelationship(?int $uiRelationship): self
    {
        $this->uiRelationship = $uiRelationship;

        return $this;
    }

    public function getUiBlogUrl(): ?string
    {
        return $this->uiBlogUrl;
    }

    public function setUiBlogUrl(?string $uiBlogUrl): self
    {
        $this->uiBlogUrl = $uiBlogUrl;

        return $this;
    }

    public function getUiLanguageUse(): ?string
    {
        return $this->uiLanguageUse;
    }

    public function setUiLanguageUse(?string $uiLanguageUse): self
    {
        $this->uiLanguageUse = $uiLanguageUse;

        return $this;
    }

    public function getUiNickName(): ?string
    {
        return $this->uiNickName;
    }

    public function setUiNickName(?string $uiNickName): self
    {
        $this->uiNickName = $uiNickName;

        return $this;
    }


}
