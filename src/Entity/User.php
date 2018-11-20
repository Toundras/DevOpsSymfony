<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 */
class User
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $HelloWorldPage;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getHelloWorldPage(): ?string
    {
        return $this->HelloWorldPage;
    }

    public function setHelloWorldPage(?string $HelloWorldPage): self
    {
        $this->HelloWorldPage = $HelloWorldPage;

        return $this;
    }
}
