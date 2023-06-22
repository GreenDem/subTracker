<?php

class SessionFlash
{
    public static function start(): void
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    }

    public static function checkMessage():bool
    {
        self::start();
        return isset($_SESSION["SessionFlash"]);
    }

    public static function getMessage():string
    {
        self::start();

        if (self::checkMessage()) {
            $SessionFlash = $_SESSION["SessionFlash"];
            self::deleteMessage();
            return $SessionFlash;
        }
    }

    public static function setMessage(string $message):void
    {
        self::start();
        $_SESSION['SessionFlash'] = $message;
    }

    public static function deleteMessage():void
    {
        self::start();
        unset($_SESSION["SessionFlash"]);
    }
}
