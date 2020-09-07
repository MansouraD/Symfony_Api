<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\OperationsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=OperationsRepository::class)
 */
class Operations
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $libelles;

    /**
     * @ORM\Column(type="integer")
     */
    private $montant;

    /**
     * @ORM\ManyToOne(targetEntity=Comptes::class)
     */
    private $comptes;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelles(): ?string
    {
        return $this->libelles;
    }

    public function setLibelles(string $libelles): self
    {
        $this->libelles = $libelles;

        return $this;
    }

    public function getMontant(): ?int
    {
        return $this->montant;
    }

    public function setMontant(int $montant): self
    {
        $this->montant = $montant;

        return $this;
    }

    public function getComptes(): ?Comptes
    {
        return $this->comptes;
    }

    public function setComptes(?Comptes $comptes): self
    {
        $this->comptes = $comptes;

        return $this;
    }
}
