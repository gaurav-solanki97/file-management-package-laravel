<?php

namespace GoApptiv\FileManagement\Constants;

class Constants
{
    public static $APPLICATION_JSON = 'application/json';

    // status
    public static $REQUESTED = 'requested';
    public static $GENERATED = 'generated';
    public static $CONFIRMED = 'confirmed';
    public static $FAILED = 'failed';

    public static $STATUS = [];

    public static function init()
    {

        // status
        self::$STATUS = [
            self::$REQUESTED,
            self::$GENERATED,
            self::$CONFIRMED,
            self::$FAILED
        ];
    }
}

Constants::init();