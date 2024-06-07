<?php
declare(strict_types=1);

namespace App\Test\TestCase\Command;

use App\Command\AddUserCommand;
use Cake\Console\TestSuite\ConsoleIntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Command\AddUserCommand Test Case
 *
 * @uses \App\Command\AddUserCommand
 */
class AddUserCommandTest extends TestCase
{
    use ConsoleIntegrationTestTrait;
}
