<?php
include('Utente.php');

class SessionManager
{
    private static bool $started = false;

    public static function createSession(string $username) {
        if (!self::$started) {
            session_start();
            self::$started = true;
        }

        $_SESSION['utente'] = $username;
    }

    public static function inSession() {
        return isset($S_SESSION['utente']);
    }

    public static function distruggi() {
        unset($_SESSION['utente']);
    }
}