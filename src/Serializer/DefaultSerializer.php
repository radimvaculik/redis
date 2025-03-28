<?php declare(strict_types = 1);

namespace Contributte\Redis\Serializer;

final class DefaultSerializer implements Serializer
{

	/**
	 * @param mixed[] $meta
	 */
	public function serialize(mixed $data, array &$meta): string
	{
		return serialize($data);
	}

	/**
	 * @param mixed[] $meta
	 */
	public function unserialize(string $data, array $meta): mixed
	{
		return unserialize($data);
	}

}
