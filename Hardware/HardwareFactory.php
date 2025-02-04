<?php 
namespace PIOT\Hardware\Factory;
require_once __DIR__ . '/core/Led.php';
use PIOT\HardwareCore\HardwareCore;
use Hardware\HardwareLed\Led;
use Hardware\HardwareLed\LedInterface;
class HardwareFactory {
    public function createLed() : LedInterface{
        return new Led(new HardwareCore());
    }
}