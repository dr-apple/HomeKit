<?php

class HAPCharacteristicFirmwareRevision extends HAPCharacteristic
{
    public function __construct()
    {
        parent::__construct(
            0x52,
            HAPCharacteristicFormat::String,
            [
                HAPCharacteristicPermission::PairedRead
            ]
        );
    }
}
