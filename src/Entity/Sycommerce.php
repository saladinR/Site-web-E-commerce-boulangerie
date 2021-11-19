<?php

namespace App\Entity;

use App\Repository\SycommerceRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SycommerceRepository::class)
 */
class Sycommerce
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $domaine;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $clepriver;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $clepublique;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDomaine(): ?string
    {
        return $this->domaine;
    }

    public function setDomaine(?string $domaine): self
    {
        $this->domaine = $domaine;

        return $this;
    }

    public function getClepriver(): ?string
    {
        return $this->clepriver;
    }

    public function setClepriver(string $clepriver): self
    {
        $this->clepriver = $clepriver;

        return $this;
    }

    public function getClepublique(): ?string
    {
        return $this->clepublique;
    }

    public function setClepublique(string $clepublique): self
    {
        $this->clepublique = $clepublique;

        return $this;
    }
}
