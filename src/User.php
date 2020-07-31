<?php
declare(strict_types=1);

namespace Pfazzi\Php8Tests;

class User
{
    public function __construct(
        public string $username,
        public string $email,
        public string $password,
    ) {
    }
}