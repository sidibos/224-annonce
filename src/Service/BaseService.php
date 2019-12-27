<?php
/**
 * Created by PhpStorm.
 * User: sidibos
 * Date: 27/12/2019
 * Time: 14:12
 */

namespace App\Service;

use Doctrine\ORM\EntityManagerInterface;

class BaseService
{
    public $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }
}