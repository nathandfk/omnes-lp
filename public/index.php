<?php

session_start();

/**
 * Général PAth
 */
define("DS", DIRECTORY_SEPARATOR);
define("DIR_PAGES", "../Application" . DS . "Views" . DS . "pages" . DS);
define("DIR_PARTS", "../Application" . DS . "Views" . DS . "parts" . DS);
define("DIR_FORMS", "../Application" . DS . "Views" . DS . "forms" . DS);
define("DIR_SECTIONS", "../Application" . DS . "Views" . DS . "sections" . DS);
define("DIR_LIB", "../Library" . DS);
define("DIR_IMG", "public" . DS . "img" . DS);
define("DIR_JS", "public" . DS . "js" . DS);
define("DIR_CSS", "public" . DS . "css" . DS);
define("DIR_CORE", "../Library" . DS . "Core" . DS);
define("DIR_MODELS", "../Application" . DS . "Models" . DS );
define("DIR_VIEWS", "../Application" . DS . "Views" . DS );
define("DIR_CONTROLLERS", "../Application" . DS . "Controllers" . DS );

/**
 * BDD 
 */
require_once(DIR_CORE . "bdd.php");

/**
 * Important function of site
 */
require_once(DIR_CORE . "functions.php");

/**
 * Sections or blocs of site
 */
require_once(DIR_MODELS . "Sections.php");


/**
 * Manage script of site
 */
require_once(DIR_CONTROLLERS . "ManageScripts.php");

/**
 * Router
 */

require_once(DIR_LIB . "Router.php");
