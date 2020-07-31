<?php
declare(strict_types=1);

namespace Flowing\Php8Tests\Tests;

use Pfazzi\Php8Tests\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function test_creation(): void
    {
        $dto = new User(
            email: 'pfazzi@test.com',
            password: 'pa$$w0rd',
            username: 'pfazzi',
        );

        self::assertNotNull($dto);
        self::assertEquals('pfazzi', $dto->username);
        self::assertEquals('pfazzi@test.com', $dto->email);
        self::assertEquals('pa$$w0rd', $dto->password);
    }
}