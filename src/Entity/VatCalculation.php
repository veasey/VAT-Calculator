<?php

// src/Entity/VatCalculation.php
namespace App\Entity;

class VatCalculation
{
    protected string $task;

    protected $amount;
    protected $rate;

    protected $history = [];

    public function getAmount(): float
    {
        return $this->amount;
    }

    public function setAmount($amount): void
    {
        $this->amount = $amount;
    }

    public function getRate(): int
    {
        return $this->rate;
    }

    public function setRate($rate): void
    {
        $this->rate = $rate;
    }

    public function getVatAmount(): float {
        return $this->amount * ($this->rate/100);
    }

    public function getAmountExcludingVat(): float
    {
        return $this->amount - ($this->amount * ($this->rate/100));
    }

    public function getAmountIncludedVat(): float
    {
        return $this->amount + ($this->amount * ($this->rate/100));
    }
}