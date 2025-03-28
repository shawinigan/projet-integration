<?php

namespace App\Repositories;

use App\Models\User;

class RepositoryExample
{
    // TODO: Explore why you should use a repository
    // Repository classes are used to interact with the database.
    // They SHOULD contain methods that perform CRUD operations on the database.
    // They should NOT contain business logic.
    // They should NOT contain validation logic.
    // They should NOT contain any other logic that is not related to interacting with the database.

    /**
     * Get a user by ID.
     */
    public function getUserById(int $id): ?User
    {
        $user = User::where('id', $id)->first();

        return $user;
    }
}
