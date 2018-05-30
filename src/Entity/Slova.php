<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SlovaRepository")
 */
class Slova
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, unique=true)
     * @Assert\NotBlank()
     */
    private $slovo;

    /**
     * @ORM\Column(type="datetime", name="added_at")
     * @Assert\NotBlank()
     */
    private $addedAt;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank()
     */
    private $author;

    /**
     * @ORM\Column(type="text")
     * @Assert\NotBlank()
     */
    private $oslove;

    public function getId()
    {
        return $this->id;
    }

    public function getSlovo(): ?string
    {
        return $this->slovo;
    }

    public function setSlovo(string $slovo): self
    {
        $this->slovo = $slovo;

        return $this;
    }

    public function getAuthor(): ?string
    {
        return $this->author;
    }

    public function setAuthor(string $author): self
    {
        $this->author = $author;

        return $this;
    }

    public function getOslove(): ?string
    {
        return $this->oslove;
    }

    public function setOslove(string $oslove): self
    {
        $this->oslove = $oslove;

        return $this;
    }

    public function getAddedAt(): ?\DateTimeInterface
    {
        return $this->addedAt;
    }

    public function setAddedAt(\DateTimeInterface $addedAt): self
    {
        $this->addedAt = $addedAt;

        return $this;
    }
}
