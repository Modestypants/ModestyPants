<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CategoryRepository")
 */
class Category
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Looks", mappedBy="category")
     */
    private $looks;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Response", mappedBy="category")
     */
    private $responses;

    public function __construct()
    {
        $this->looks = new ArrayCollection();
        $this->responses = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection|Looks[]
     */
    public function getLooks(): Collection
    {
        return $this->looks;
    }

    public function addLook(Looks $look): self
    {
        if (!$this->looks->contains($look)) {
            $this->looks[] = $look;
            $look->setCategory($this);
        }

        return $this;
    }

    public function removeLook(Looks $look): self
    {
        if ($this->looks->contains($look)) {
            $this->looks->removeElement($look);
            // set the owning side to null (unless already changed)
            if ($look->getCategory() === $this) {
                $look->setCategory(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Response[]
     */
    public function getResponses(): Collection
    {
        return $this->responses;
    }

    public function addResponse(Response $response): self
    {
        if (!$this->responses->contains($response)) {
            $this->responses[] = $response;
            $response->setCategory($this);
        }

        return $this;
    }

    public function removeResponse(Response $response): self
    {
        if ($this->responses->contains($response)) {
            $this->responses->removeElement($response);
            // set the owning side to null (unless already changed)
            if ($response->getCategory() === $this) {
                $response->setCategory(null);
            }
        }

        return $this;
    }
}
