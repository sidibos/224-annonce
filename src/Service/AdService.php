<?php
/**
 * Created by PhpStorm.
 * User: sidibos
 * Date: 27/12/2019
 * Time: 14:07
 */

namespace App\Service;

use App\Entity\Ad;
use App\Contracts\AdInterface;

class AdService extends BaseService implements AdInterface
{
    public function getAdById(int $id): ?Ad
    {
        // TODO: Implement getAdById() method.
    }

    public function getAds(): array
    {
        // TODO: Implement getAds() method.
    }
}