<?php
namespace Sellastica\Device;

use IPub\MobileDetect\MobileDetect;

class DeviceDetector
{
	/** @var MobileDetect */
	private $mobileDetect;


	/**
	 * @param MobileDetect $mobileDetect
	 */
	public function __construct(MobileDetect $mobileDetect)
	{
		$this->mobileDetect = $mobileDetect;
	}

	/**
	 * @return Device
	 */
	public function detectDevice(): Device
	{
		if ($this->mobileDetect->isTablet()) {
			return Device::tablet();
		} elseif ($this->mobileDetect->isPhone()) {
			return Device::phone();
		} else {
			return Device::computer();
		}
	}
}