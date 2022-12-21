<?php

namespace Irfanmumtaz\FirebaseCloudMessage\Exceptions;


class OptionsException extends FirebaseCMException
{
    public static function invalidPriority(): self
    {
        return new self(
            'Priotiy can not be other than high or normal',
            '422'
        );
    }
}
