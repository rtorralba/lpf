<?php


namespace Core;


class Env
{
    private static $envFilePath = __DIR__ . '/../env.json';

    public static function load()
    {
        if(!file_exists(self::$envFilePath)) {
            throw new \Exception('Missing env.json file');
        }

        $envVars = get_object_vars(json_decode(file_get_contents(self::$envFilePath)));

        foreach ($envVars as $key => $value) {
            putenv(strtoupper($key).'='.$value);
        }
    }
}