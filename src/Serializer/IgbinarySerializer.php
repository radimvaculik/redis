<?php declare(strict_types = 1);

namespace Contributte\Redis\Serializer;

final class IgbinarySerializer implements Serializer
{

	/**
	 * @param mixed[] $meta
	 */
	public function serialize(mixed $data, array &$meta): string
	{
		return (string) igbinary_serialize($data);
	}

	/**
	 * @param mixed[] $meta
	 */
	public function unserialize(string $data, array $meta): mixed
	{
		return igbinary_unserialize($data);
	}

}
