<?php

require "../vendor/autoload.php";

use Source\controllers\HomeController;


echo "<h1>Hi man!</h1>";
(new HomeController)->index();
(new HomeController)->show('zany.fortuna@hbo.ao');


