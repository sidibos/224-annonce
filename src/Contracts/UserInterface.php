<?php
/**
 * Created by PhpStorm.
 * User: sidibos
 * Date: 27/12/2019
 * Time: 14:03
 */
namespace App\Contracts;

use App\Entity\User;

interface UserInterface
{
    public function getUsers(): array;

    public function getUserById(int $id): ?User;
}