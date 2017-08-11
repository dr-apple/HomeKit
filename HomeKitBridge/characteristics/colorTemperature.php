<?

class HAPCharacteristicColorTemperature extends HAPCharacteristic {

    public function __construct()
    {
        parent::__construct(
            0xCE,
            HAPCharacteristicFormat::UnsignedInt32,
            Array(
                HAPCharacteristicPermission::PairedRead,
                HAPCharacteristicPermission::PairedWrite,
                HAPCharacteristicPermission::Notify
            ),
            50,
            400,
            1
        );
    }

}