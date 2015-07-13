<?php
namespace Chadicus\User;

interface RepositoryInterface
{
    public function find($id);

    public function create(User $user);

    public function update(User $user);

    public function delete(User $user);
}
