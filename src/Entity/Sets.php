<?php

namespace App\Entity;

use App\Repository\SetRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SetRepository::class)]
#[ORM\Table(name: '`set`')]
class Sets
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $set_num;

    #[ORM\Column(type: 'string', length: 255)]
    private $name;

    #[ORM\Column(type: 'integer')]
    private $year;

    #[ORM\Column(type: 'integer')]
    private $theme_id;

    #[ORM\Column(type: 'string', length: 255)]
    private $set_img_url;

    #[ORM\Column(type: 'string', length: 255)]
    private $set_url;

    #[ORM\Column(type: 'integer')]
    private $lego_price;

    #[ORM\Column(type: 'integer')]
    private $buy_price;

    #[ORM\Column(type: 'date')]
    private $buy_date;

    #[ORM\Column(type: 'string', length: 255)]
    private $buy_loc;

    #[ORM\Column(type: 'date', nullable: true)]
    private $sale_date;

    #[ORM\Column(type: 'integer', nullable:true)]
    private $sale_price;

    #[ORM\Column(type: 'integer')]
    private $status;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSetNum(): ?string
    {
        return $this->set_num;
    }

    public function setSetNum(string $set_num): self
    {
        $this->set_num = $set_num;

        return $this;
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

    public function getYear(): ?int
    {
        return $this->year;
    }

    public function setYear(int $year): self
    {
        $this->year = $year;

        return $this;
    }

    public function getThemeId(): ?int
    {
        return $this->theme_id;
    }

    public function setThemeId(int $theme_id): self
    {
        $this->theme_id = $theme_id;

        return $this;
    }

    public function getSetImgUrl(): ?string
    {
        return $this->set_img_url;
    }

    public function setSetImgUrl(?string $set_img_url): self
    {
        $this->set_img_url = $set_img_url;

        return $this;
    }

    public function getSetUrl(): ?string
    {
        return $this->set_url;
    }

    public function setSetUrl(?string $set_url): self
    {
        $this->set_url = $set_url;

        return $this;
    }

    public function getLegoPrice(): ?int
    {
        return $this->lego_price;
    }

    public function setLegoPrice(int $lego_price): self
    {
        $this->lego_price = $lego_price;

        return $this;
    }

    public function getBuyPrice(): ?int
    {
        return $this->buy_price;
    }

    public function setBuyPrice(int $buy_price): self
    {
        $this->buy_price = $buy_price;

        return $this;
    }

    public function getBuyDate(): ?\DateTimeInterface
    {
        return $this->buy_date;
    }

    public function setBuyDate(\DateTimeInterface $buy_date): self
    {
        $this->buy_date = $buy_date;

        return $this;
    }

    public function getBuyLoc(): ?string
    {
        return $this->buy_loc;
    }

    public function setBuyLoc(string $buy_loc): self
    {
        $this->buy_loc = $buy_loc;

        return $this;
    }

    public function getSaleDate(): ?\DateTimeInterface
    {
        return $this->sale_date;
    }

    public function setSaleDate(\DateTimeInterface $sale_date): self
    {
        $this->sale_date = $sale_date;

        return $this;
    }

    public function getSalePrice(): ?int
    {
        return $this->sale_price;
    }

    public function setSalePrice(int $sale_price): self
    {
        $this->sale_price = $sale_price;

        return $this;
    }

    public function getStatus(): ?int
    {
        return $this->status;
    }

    public function setStatus(int $status): self
    {
        $this->status = $status;

        return $this;
    }
}
