<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\AgenceARepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ApiResource(
 *      normalizationContext={"groups"={"agenceA:read"}},
 *      denormalizationContext={"groups"={"agenceA:write"}}
 * )
 * @ORM\Entity(repositoryClass=AgenceARepository::class)
 */
class AgenceA
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * 
     * @Groups("agenceA:read")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     * 
     * @Groups({"agenceA:read", "agenceA:write"})
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     * 
     * @Groups({"agenceA:read", "agenceA:write"})
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     * 
     * @Groups({"agenceA:read", "agenceA:write"})
     */
    private $Entreprise;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * 
     * @Groups({"agenceA:read", "agenceA:write"})
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     * 
     * @Groups({"agenceA:read", "agenceA:write"})
     */
    private $tel;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(?string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getEntreprise(): ?string
    {
        return $this->Entreprise;
    }

    public function setEntreprise(?string $Entreprise): self
    {
        $this->Entreprise = $Entreprise;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getTel(): ?string
    {
        return $this->tel;
    }

    public function setTel(?string $tel): self
    {
        $this->tel = $tel;

        return $this;
    }
}
