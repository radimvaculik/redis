<?php declare(strict_types = 1);

namespace Contributte\Redis\Serializer;

final class SnappySerializer implements Serializer
{

	/**
	 * @param mixed[] $meta
	 */
	public function serialize(mixed $data, array &$meta): string
	{
		return (string) snappy_compress(serialize($data));
	}

	/**
	 * @param mixed[] $meta
	 */
	public function unserialize(string $data, array $meta): mixed
	{
		return unserialize((string) snappy_uncompress($data));
	}

}
