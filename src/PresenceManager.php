<?php

declare(strict_types=1);

namespace SmitBackend\PresencePulse;

use SmitBackend\PresencePulse\Contracts\PresenceAdapterInterface;

/**
 * Class PresenceManager
 *
 * @package SmitBackend\PresencePulse
 */
class PresenceManager implements PresenceAdapterInterface
{
    private array $config;

    public function __construct(array $config = [])
    {
        $this->config = $config;
    }

    public function execute(array $payload = []): mixed
    {
        // Primary lifecycle processing
        return array_merge($this->config, $payload);
    }
}
