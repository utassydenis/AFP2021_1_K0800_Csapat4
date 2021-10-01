<?php

// alapvető konfiguráció, itt lesznek a hivatkozások

define('DB_TYPE','mysql');
define('DB_NAME','zoldseg_gyumolcs_kereskedes');
define('DB_HOST','localhost');
define('DB_USER','zoldseg_gyumolcs_kereskedes');
define('DB_PASS','mA0Iz8BdpHyf61k')

define('CHARSET','utf-8');
define('TITLE','Veggies and Fruits Shop');
define('CSS',['style,css','style2.css','BejelentkezésCSS.css','RegisztrációCSS.css']); //Amikor a frontendet csinalod, "rakd be" ide a fileok nevet

// konstansok

define('ROOT_DIR','./');
define('PROTECTED_DIR',ROOT_DIR.'protected/');
define('PUBLIC_DIR',ROOT_DIR.'public/');
define('VIEWS_DIR',PROTECTED_DIR.'views/');
define('CSS_DIR',PUBLIC_DIR.'css/');
define('CORE_DIR',PROTECTED_DIR.'core/');
define('CONTENT_DIR',PROTECTED_DIR.'content/');

define('START_CONTENT','main');


define('BASE_URL','http://localhost/zoldseg_gyumolcs_kereskedes/');
