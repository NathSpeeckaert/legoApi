<?php

namespace App\DTO;

use Symfony\Component\Validator\Constraints as Assert;

class SetFormDTO
{
    private string $set_num;
    private string $name;
    private int $year;
    private int $theme_id;
    private string $set_img_url;
    private string $set_url;
    #[Assert\PositiveOrZero]
    private float $lego_price;
    private float $buy_price;
    private \DateTime $buy_date;
    private string $buy_loc;
    private ?\DateTime $sale_date = null;
    private ?float $sale_price = null;
    private int $status;


    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     * @return SetFormDTO
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }


    /**
     * @return mixed
     */
    public function getSetNum()
    {
        return $this->set_num;
    }

    /**
     * @param mixed $set_num
     * @return SetFormDTO
     */
    public function setSetNum($set_num)
    {
        $this->set_num = $set_num;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     * @return SetFormDTO
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * @param mixed $year
     * @return SetFormDTO
     */
    public function setYear($year)
    {
        $this->year = $year;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getThemeId()
    {
        return $this->theme_id;
    }

    /**
     * @param mixed $theme_id
     * @return SetFormDTO
     */
    public function setThemeId($theme_id)
    {
        $this->theme_id = $theme_id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSetImgUrl()
    {
        return $this->set_img_url;
    }

    /**
     * @param mixed $set_img_url
     * @return SetFormDTO
     */
    public function setSetImgUrl($set_img_url)
    {
        $this->set_img_url = $set_img_url;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSetUrl()
    {
        return $this->set_url;
    }

    /**
     * @param mixed $set_url
     * @return SetFormDTO
     */
    public function setSetUrl($set_url)
    {
        $this->set_url = $set_url;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLegoPrice()
    {
        return $this->lego_price;
    }

    /**
     * @param mixed $lego_price
     * @return SetFormDTO
     */
    public function setLegoPrice($lego_price)
    {
        $this->lego_price = $lego_price;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBuyPrice()
    {
        return $this->buy_price;
    }

    /**
     * @param mixed $buy_price
     * @return SetFormDTO
     */
    public function setBuyPrice($buy_price)
    {
        $this->buy_price = $buy_price;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBuyDate()
    {
        return $this->buy_date;
    }

    /**
     * @param mixed $buy_date
     * @return SetFormDTO
     */
    public function setBuyDate($buy_date)
    {
        $this->buy_date = $buy_date;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBuyLoc()
    {
        return $this->buy_loc;
    }

    /**
     * @param mixed $buy_loc
     * @return SetFormDTO
     */
    public function setBuyLoc($buy_loc)
    {
        $this->buy_loc = $buy_loc;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSaleDate()
    {
        return $this->sale_date;
    }

    /**
     * @param mixed $sale_date
     * @return SetFormDTO
     */
    public function setSaleDate($sale_date)
    {
        $this->sale_date = $sale_date;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSalePrice()
    {
        return $this->sale_price;
    }

    /**
     * @param mixed $sale_price
     * @return SetFormDTO
     */
    public function setSalePrice($sale_price)
    {
        $this->sale_price = $sale_price;
        return $this;
    }




}
