<?php

declare(strict_types=1);

namespace App\Services;

use App\Models\User;
use App\Repositories\RepositoryExample;

class ServiceExample
{
    public function __construct(
        protected RepositoryExample $repositoryExample
    ) {}

    public function findUserById(int $UserId): ?User
    {
        // Business/Application logic here then call the repository
        // Any manipulation of data should be done here, not in the controller
        // TODO: check the project usersservice for a more complex example

        return $this->repositoryExample->getUserById($UserId);
    }
}
