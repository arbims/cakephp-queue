<?php
declare(strict_types=1);

namespace App\Mailer;

use Cake\Mailer\Mailer;
use Cake\Queue\Mailer\QueueTrait;

/**
 * Notify mailer.
 */
class NotifyMailer extends Mailer
{
    use QueueTrait;
    /**
     * Mailer's name.
     *
     * @var string
     */
    public static string $name = 'Notify';

    public function notify(string $email, string $fullName, array $data): void
    {
            $this
            ->setTo($email)
            ->setEmailFormat('both')
            ->setViewVars($data)
            ->setSubject(sprintf('Welcome %s', $fullName));
    }
}
