<?

class HAPCharacteristicAccessoryFlags extends HAPCharacteristic {

    const RequiresAdditionalSetup = 1;

    public function __construct()
    {
        parent::__construct(
            0xA6,
            HAPCharacteristicFormat::UnsignedInt32,
            Array(
                HAPCharacteristicPermission::PairedRead,
                HAPCharacteristicPermission::Notify
            )
        );
    }

}