<?php
/**
 * Starting session with cookie's lifetime of 24 hours
 * Defining default language
 */
session_start(["cookie_lifetime" => 86400]);
$_SESSION["lang"] = "fr";

/**
 * Loading page generator system
 */
require_once __DIR__ . "/helpers/PagesGenerator.php";

/**
 * Defining default page
 */
if (!isset($_GET["page"])) $_GET["page"] = "accueil";

/**
 * Pages routing
 */
switch ($_GET["page"]) {
    case "accueil":
        PagesGenerator::getHomePage();
        break;
    case "contact":
        PagesGenerator::getContactPage();
        break;
}