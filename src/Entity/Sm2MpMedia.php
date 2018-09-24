<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\Sm2MpMediaRepository")
 * @ORM\Table(name="Sm2MpMedia")
 */
class Sm2MpMedia
{
    /**
     * @ ORM\Id()
     * @ ORM\GeneratedValue()
     * @ ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Id()
     * @ORM\Column(type="uuid", name="Sm2MpMedia_id")
     */
    private $Sm2MpMediaId;

    /**
     * @ORM\Column(type="string", length=128, name="DbType")
     */
    private $DbType;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Name;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSm2MpMediaId()
    {
        return $this->Sm2MpMediaId;
    }

    public function setSm2MpMediaId($Sm2MpMediaId): self
    {
        $this->Sm2MpMediaId = $Sm2MpMediaId;

        return $this;
    }

    public function getDbType(): ?string
    {
        return $this->DbType;
    }

    public function setDbType(string $DbType): self
    {
        $this->DbType = $DbType;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(?string $Name): self
    {
        $this->Name = $Name;

        return $this;
    }
}
