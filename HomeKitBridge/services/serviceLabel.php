<?php

class HAPServiceServiceLabel extends HAPService
{
    public function __construct()
    {
        parent::__construct(
            0xCC,
            [
                //Required Characteristics
                new HAPCharacteristicServiceLabelNamespace()
            ],
            [
                //Optional Characteristics
            ]
        );
    }
}
