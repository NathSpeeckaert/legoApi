<?php

namespace App\DTO;

class CountDTO
{
    private int $total;
    private int $totalBuilt;
    private int $totalPending;
    private int $totalSealed;
    private int $totalSold;

    /**
     * @return int
     */
    public function getTotal(): int
    {
        return $this->total;
    }

    /**
     * @param int $total
     * @return CountDTO
     */
    public function setTotal(int $total): CountDTO
    {
        $this->total = $total;
        return $this;
    }

    /**
     * @return int
     */
    public function getTotalBuilt(): int
    {
        return $this->totalBuilt;
    }

    /**
     * @param int $totalBuilt
     * @return CountDTO
     */
    public function setTotalBuilt(int $totalBuilt): CountDTO
    {
        $this->totalBuilt = $totalBuilt;
        return $this;
    }

    /**
     * @return int
     */
    public function getTotalPending(): int
    {
        return $this->totalPending;
    }

    /**
     * @param int $totalPending
     * @return CountDTO
     */
    public function setTotalPending(int $totalPending): CountDTO
    {
        $this->totalPending = $totalPending;
        return $this;
    }

    /**
     * @return int
     */
    public function getTotalSealed(): int
    {
        return $this->totalSealed;
    }

    /**
     * @param int $totalSealed
     * @return CountDTO
     */
    public function setTotalSealed(int $totalSealed): CountDTO
    {
        $this->totalSealed = $totalSealed;
        return $this;
    }

    /**
     * @return int
     */
    public function getTotalSold(): int
    {
        return $this->totalSold;
    }

    /**
     * @param int $totalSold
     * @return CountDTO
     */
    public function setTotalSold(int $totalSold): CountDTO
    {
        $this->totalSold = $totalSold;
        return $this;
    }


}