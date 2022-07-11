<?php
require_once 'User.php';

// Instanciation d'un objet
$user = new User(123, false);
$admin = new User(1);

echo '<pre>';
var_dump($user);

echo $user?->getId();
echo '<br>';

$users[] = [$user, $admin];
var_dump($users);

$user->setAge(20);
var_dump($user);

$user2 = new User(23);
$user2->setFirstname('Helen')
    ->setLastname("Around")
    ->setAge(32)
    ->setDescription('tape canal waste claws play see moving wolf sleep problem pig screen hat image help shelf enjoy dozen complete sort tiny dry setting spell');

array_push($users, $user2);

echo '<h1>Users</h1>';
var_dump($users);

$admin->setAge(32);

echo $admin->hasLegalAge() ? "Access granted" : "Access denied";
