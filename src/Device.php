<?php
namespace Sellastica\Device;

class Device
{
	const COMPUTER = 'computer',
		PHONE = 'phone',
		TABLET = 'tablet';
	
	/** @var string */
	private $device;


	/**
	 * @param string $device
	 * @throws \InvalidArgumentException
	 */
	public function __construct(string $device)
	{
		if (!in_array($device, [self::COMPUTER, self::PHONE, self::TABLET])) {
			throw new \InvalidArgumentException(sprintf('Unknown device %s', $device));
		}

		$this->device = $device;
	}

	/**
	 * @return string
	 */
	public function getDevice(): string
	{
		return $this->device;
	}

	/**
	 * @return string
	 */
	public function __toString(): string
	{
		return $this->device;
	}

	/**
	 * @return Device
	 */
	public static function computer(): Device
	{
		return new self(self::COMPUTER);
	}

	/**
	 * @return Device
	 */
	public static function phone(): Device
	{
		return new self(self::PHONE);
	}

	/**
	 * @return Device
	 */
	public static function tablet(): Device
	{
		return new self(self::TABLET);
	}
}