<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

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
     */
    private $slovo;

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
}
