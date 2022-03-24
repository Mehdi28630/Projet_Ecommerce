<?php

namespace App\Entity;

use App\Repository\EntrepotRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EntrepotRepository::class)
 */
class Entrepot
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=64)
     */
    private $NomEntreprise;

    /**
     * @ORM\Column(type="string", length=32)
     */
    private $Ville;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $NumeroEntrepot;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomEntreprise(): ?string
    {
        return $this->NomEntreprise;
    }

    public function setNomEntreprise(string $NomEntreprise): self
    {
        $this->NomEntreprise = $NomEntreprise;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->Ville;
    }

    public function setVille(string $Ville): self
    {
        $this->Ville = $Ville;

        return $this;
    }

    public function getNumeroEntrepot(): ?string
    {
        return $this->NumeroEntrepot;
    }

    public function setNumeroEntrepot(string $NumeroEntrepot): self
    {
        $this->NumeroEntrepot = $NumeroEntrepot;

        return $this;
    }
}
