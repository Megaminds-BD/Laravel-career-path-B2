<?php

// Throw exceptions instead of falsy value

class UserRepository
{
    public function save()
    {

    }
}

class UserService
{
    private UserRepository $userRepository;

    public function save($data)
    {
        $user = $this->userRepository->save($data);

        if (!($user instanceof User)) {
            throw new Exception("Can not save user data");
        }

        return $user;
    }
}

$userService = new UserService();
$userData = [];
try {
    $user = $userService->save($userData);
} catch (Exception $exception) {
    // Add exception logic
}
