<?php

class PagesGenerator
{
    public static function getHomePage(): void
    {
        // Attention: doit changer en fonction de la langue
        $title = "Accueil";
        $description = "Page d'accueil";

        require_once __DIR__ . "/../views/homePage.php";
    }

    public static function getContactPage(): void
    {
        // Attention: doit changer en fonction de la langue
        $title = "Accueil";
        $description = "Page d'accueil";

        require_once __DIR__ . "/../views/contact.php";
    }
}