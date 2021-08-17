<?php
    class Template extends Smarty{
        public function __construct() {
            parent::__construct();

            $this->setTemplateDir('View/');
            $this->setCompileDir('View/compile/');
            $this->setCacheDir('View/cache/');
        }
    }
?>