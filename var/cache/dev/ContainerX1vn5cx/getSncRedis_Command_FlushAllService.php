<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'snc_redis.command.flush_all' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Console/Command/Command.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Command/ContainerAwareCommand.php';
include_once $this->targetDirs[3].'/vendor/snc/redis-bundle/Command/RedisBaseCommand.php';
include_once $this->targetDirs[3].'/vendor/snc/redis-bundle/Command/RedisFlushallCommand.php';

$this->services['snc_redis.command.flush_all'] = $instance = new \Snc\RedisBundle\Command\RedisFlushallCommand();

$instance->setName('redis:flushall');

return $instance;
