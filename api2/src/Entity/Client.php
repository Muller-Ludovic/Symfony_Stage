<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\ClientRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ApiResource(
 *      normalizationContext={"groups"={"client:read"}},
 *      denormalizationContext={"groups"={"client:write"}}
 * )
 * @ORM\Entity(repositoryClass=ClientRepository::class)
 */
class Client
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * 
     * @Groups("client:read")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     * 
     * @Groups({"client:read", "client:write"})
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     * 
     * @Groups({"agenceA:read", "agenceA:write"})
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * 
     * @Groups({"agenceA:read", "agenceA:write"})
     */
    private $adresse;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * 
     * @Groups({"agenceA:read", "agenceA:write"})
     */
    private $mail;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     * 
     * @Groups({"agenceA:read", "agenceA:write"})
     */
    private $tel;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * 
     * @Groups({"agenceA:read", "agenceA:write"})
     */
    private $numeroClient;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * 
     * @Groups({"agenceA:read", "agenceA:write"})
     */
    private $numeroFacture;

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

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(?string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(?string $mail): self
    {
        $this->mail = $mail;

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

    public function getNumeroClient(): ?string
    {
        return $this->numeroClient;
    }

    public function setNumeroClient(?string $numeroClient): self
    {
        $this->numeroClient = $numeroClient;

        return $this;
    }

    public function getNumeroFacture(): ?string
    {
        return $this->numeroFacture;
    }

    public function setNumeroFacture(?string $numeroFacture): self
    {
        $this->numeroFacture = $numeroFacture;

        return $this;
    }
}
