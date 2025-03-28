<?php declare(strict_types = 1);

namespace Contributte\Redis\Serializer;

interface Serializer
{

	/**
	 * @param mixed[] $meta
	 */
	public function serialize(mixed $data, array &$meta): string;

	/**
	 * @param mixed[] $meta
	 */
	public function unserialize(string $data, array $meta): mixed;

}
