<?php

namespace App\Mappers;

use App\DTO\SetDTO;
use App\DTO\SetFormDTO;
use App\Entity\Sets;

class SetMapper
{
    public static function toSetDTO (Sets $sets): SetDTO
    {
        $dto = new SetDTO();
        $dto->setId($sets->getId());
        $dto->setSetNum($sets->getSetNum());
        $dto->setName($sets->getName());
        $dto->setYear($sets->getYear());
        $dto->setThemeId($sets->getThemeId());
        $dto->setSetImgUrl($sets->getSetImgUrl());
        $dto->setSetUrl($sets->getSetUrl());
        $dto->setLegoPrice($sets->getLegoPrice());
        $dto->setBuyPrice($sets->getBuyPrice());
        $dto->setBuyDate($sets->getBuyDate());
        $dto->setBuyLoc($sets->getBuyLoc());
        $dto->setSaleDate($sets->getSaleDate());
        $dto->setSalePrice($sets->getSalePrice());
        $dto->setStatus($sets->getStatus());
        $dto->setStatusId($sets->getStatus()->getId());
        return $dto;

    }


    public static function SetFormDTO (Sets $sets, SetFormDTO $dto ): Sets
    {
        $sets->setSetNum($dto->getSetNum());
        $sets->setName($dto->getName());
        $sets->setYear($dto->getYear());
        $sets->setThemeId($dto->getThemeId());
        $sets->setSetImgUrl($dto->getSetImgUrl());
        $sets->setSetUrl($dto->getSetUrl());
        $sets->setLegoPrice($dto->getLegoPrice());
        $sets->setBuyPrice($dto->getBuyPrice());
        $sets->setBuyDate($dto->getBuyDate());
        $sets->setBuyLoc($dto->getBuyLoc());
        $sets->setSaleDate($dto->getSaleDate());
        $sets->setSalePrice($dto->getSalePrice());
        return $sets;

    }


}