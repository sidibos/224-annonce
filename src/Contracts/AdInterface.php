<?php
/**
 * Created by PhpStorm.
 * User: sidibos
 * Date: 27/12/2019
 * Time: 14:02
 */
namespace App\Contracts;

use App\Entity\Ad;

interface AdInterface
{
    public function getAds(): array;

    public function getAdById(int $id): ?Ad;
}