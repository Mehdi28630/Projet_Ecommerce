<?php

namespace App\Entity;

use App\Repository\ProduitRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProduitRepository::class)
 */
class Produit
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
    private $Libelle;

    /**
     * @ORM\Column(type="float")
     */
    private $Prix;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Description;

    /**
     * @ORM\Column(type="integer")
     */
    private $QteStock;

    /**
     * @ORM\ManyToMany(targetEntity=Categorie::class, inversedBy="idproduit")
     */
    private $idcategorie;

    public function __construct()
    {
        $this->idcategorie = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelle(): ?string
    {
        return $this->Libelle;
    }

    public function setLibelle(string $Libelle): self
    {
        $this->Libelle = $Libelle;

        return $this;
    }


    public function getPrix(): ?float
    {
        return $this->Prix;
    }

    public function setPrix(float $Prix): self
    {
        $this->Prix = $Prix;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(string $Description): self
    {
        $this->Description = $Description;

        return $this;
    }

    public function getQteStock(): ?int
    {
        return $this->QteStock;
    }

    public function setQteStock(int $QteStock): self
    {
        $this->QteStock = $QteStock;

        return $this;
    }

    /**
     * @return Collection|Categorie[]
     */
    public function getIdcategorie(): Collection
    {
        return $this->idcategorie;
    }

    public function addIdcategorie(Categorie $idcategorie): self
    {
        if (!$this->idcategorie->contains($idcategorie)) {
            $this->idcategorie[] = $idcategorie;
        }

        return $this;
    }

    public function removeIdcategorie(Categorie $idcategorie): self
    {
        $this->idcategorie->removeElement($idcategorie);

        return $this;
    }


}
