<?php

class HAPCharacteristicAudioFeedback extends HAPCharacteristic
{
    public function __construct()
    {
        parent::__construct(
            0x05,
            HAPCharacteristicFormat::Boolean,
            [
                HAPCharacteristicPermission::PairedRead,
                HAPCharacteristicPermission::PairedWrite,
                HAPCharacteristicPermission::Notify
            ]
        );
    }
}
