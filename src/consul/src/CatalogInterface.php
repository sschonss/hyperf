<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://hyperf.org
 * @document https://wiki.hyperf.org
 * @contact  group@hyperf.org
 * @license  https://github.com/hyperf-cloud/hyperf/blob/master/LICENSE
 */

namespace Hyperf\Consul;

interface CatalogInterface
{
    public function register($node): ConsulResponse;

    public function deregister($node): ConsulResponse;

    public function datacenters(): ConsulResponse;

    public function nodes(array $options = []): ConsulResponse;

    public function node($node, array $options = []): ConsulResponse;

    public function services(array $options = []): ConsulResponse;

    public function service($service, array $options = []): ConsulResponse;
}
