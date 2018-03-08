<?php

// load Smarty library
require 'smarty/libs/Smarty.class.php';

// The setup.php file is a good place to load
// required application library files, and you
// can do that right here. An example:
// require('guestbook/guestbook.lib.php');

class MySmarty extends Smarty {

   function __construct()
   {

        // Class Constructor.
        // These automatically get set with each new instance.

        parent::__construct();
        $this->setTemplateDir('web/templates/');
        $this->setCompileDir('web/templates_c/');
        $this->setConfigDir('web/configs/');
        $this->setCacheDir('web/cache/');

        $this->caching = Smarty::CACHING_LIFETIME_CURRENT;
        $this->assign('app_name', 'Blockchain Notary');
   }

}
?>
