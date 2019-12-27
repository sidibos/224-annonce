<?php
/**
 * Created by PhpStorm.
 * User: sidibos
 * Date: 27/12/2019
 * Time: 14:10
 */

namespace App\Service;

use App\Entity\User;
use App\Contracts\UserInterface;

class UserService extends BaseService implements UserInterface
{
    public function getUserById(int $id): ?User
    {
        // TODO: Implement getUserById() method.
    }

    public function getUsers(): array
    {
        // TODO: Implement getUsers() method.
    }
}