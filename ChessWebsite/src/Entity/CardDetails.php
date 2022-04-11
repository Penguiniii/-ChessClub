<?php

namespace App\Entity;

use App\Repository\CardDetailsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CardDetailsRepository::class)]
class CardDetails
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $NameOnCard;

    #[ORM\Column(type: 'integer')]
    private $CardNumber;

    #[ORM\Column(type: 'date')]
    private $exiryDate;

    #[ORM\Column(type: 'integer')]
    private $CCV;


    public function getId(): ?int
    {
        return $this->id;
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

    public function getCardNumber(): ?int
    {
        return $this->CardNumber;
    }

    public function setCardNumber(int $CardNumber): self
    {
        $this->CardNumber = $CardNumber;

        return $this;
    }

    public function getExiryDate(): ?\DateTimeInterface
    {
        return $this->exiryDate;
    }

    public function setExiryDate(\DateTimeInterface $exiryDate): self
    {
        $this->exiryDate = $exiryDate;

        return $this;
    }

    public function getCCV(): ?int
    {
        return $this->CCV;
    }

    public function setCCV(int $CCV): self
    {
        $this->CCV = $CCV;

        return $this;
    }


}
