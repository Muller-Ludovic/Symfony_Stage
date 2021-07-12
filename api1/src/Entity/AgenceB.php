<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\AgenceBRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ApiResource(
 *      normalizationContext={"groups"={"agenceB:read"}},
 *      denormalizationContext={"groups"={"agenceB:write"}}
 * )
 * @ORM\Entity(repositoryClass=AgenceBRepository::class)
 */
class AgenceB
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * 
     * @Groups("agenceB:read")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     * 
     * @Groups({"agenceB:read", "agenceB:write"})
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     * 
     * @Groups({"agenceB:read", "agenceB:write"})
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     * 
     * @Groups({"agenceB:read", "agenceB:write"})
     */
    private $entreprise;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * 
     * @Groups({"agenceB:read", "agenceB:write"})
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     * 
     * @Groups({"agenceB:read", "agenceB:write"})
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
        return $this->entreprise;
    }

    public function setEntreprise(?string $entreprise): self
    {
        $this->entreprise = $entreprise;

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
