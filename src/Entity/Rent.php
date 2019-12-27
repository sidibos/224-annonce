<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RentRepository")
 */
class Rent
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="smallint")
     */
    private $baths;

    /**
     * @ORM\Column(type="smallint")
     */
    private $living_rooms;

    /**
     * @ORM\Column(type="smallint")
     */
    private $bed_rooms;

    /**
     * @ORM\Column(type="decimal", precision=5, scale=2, nullable=true)
     */
    private $weekly_price;

    /**
     * @ORM\Column(type="decimal", precision=5, scale=2, nullable=true)
     */
    private $monthly_price;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Address", inversedBy="rents")
     */
    private $address;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBedrooms(): ?int
    {
        return $this->bed_rooms;
    }

    public function setBedrooms(int $bed_rooms): self
    {
        $this->bed_rooms = $bed_rooms;

        return $this;
    }

    public function getBaths(): ?int
    {
        return $this->baths;
    }

    public function setBaths(int $baths): self
    {
        $this->baths = $baths;

        return $this;
    }

    public function getLivingRooms(): ?int
    {
        return $this->living_rooms;
    }

    public function setLivingRooms(int $living_rooms): self
    {
        $this->living_rooms = $living_rooms;

        return $this;
    }

    public function getWeeklyPrice(): ?string
    {
        return $this->weekly_price;
    }

    public function setWeeklyPrice(?string $weekly_price): self
    {
        $this->weekly_price = $weekly_price;

        return $this;
    }

    public function getMonthlyPrice(): ?string
    {
        return $this->monthly_price;
    }

    public function setMonthlyPrice(?string $monthly_price): self
    {
        $this->monthly_price = $monthly_price;

        return $this;
    }

    public function getAddress(): ?Address
    {
        return $this->address;
    }

    public function setAddress(?Address $address): self
    {
        $this->address = $address;

        return $this;
    }
}
