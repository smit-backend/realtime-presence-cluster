<?php

declare(strict_types=1);

namespace SmitBackend\PresencePulse\Contracts;

/**
 * Interface PresenceAdapterInterface
 *
 * @package SmitBackend\PresencePulse
 */
interface PresenceAdapterInterface
{
    public function execute(array $payload = []): mixed;
}
