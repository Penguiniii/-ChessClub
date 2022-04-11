<?php

namespace App\Entity;

use App\Repository\PaymentRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PaymentRepository::class)]
class Payment
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'integer')]
    private $CardNumber;

    #[ORM\Column(type: 'string', length: 255)]
    private $NameOnCard;

    #[ORM\Column(type: 'date')]
    private $ExpiryDate;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCardNumber(): ?int
    {
        return $this->CardNumber;
    }

    public function setCardNumber(int $CardNumber): self
    {
        $this->CardNumber = $CardNumber;

        return $this;
    }

    public function getNameOnCard(): ?string
    {
        return $this->NameOnCard;
    }

    public function setNameOnCard(string $NameOnCard): self
    {
        $this->NameOnCard = $NameOnCard;

        return $this;
    }

    public function getExpiryDate(): ?\DateTimeInterface
    {
        return $this->ExpiryDate;
    }

    public function setExpiryDate(\DateTimeInterface $ExpiryDate): self
    {
        $this->ExpiryDate = $ExpiryDate;

        return $this;
    }
}
