<?php
    class Template extends SmartyBC{
        public function __construct() {
            parent::__construct();

            $this->setTemplateDir('View/');
            $this->setCompileDir('View/compile/');
            $this->setCacheDir('View/cache/');
        }
    }
?>