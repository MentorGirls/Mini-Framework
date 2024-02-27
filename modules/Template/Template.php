<?php
class Template {
    private function __constructor()
    {
    }

    public function getInstance()
    {
        static $inst = null;
        if ($inst === null) {
            $inst = new Template();
        }
        return $inst;
    }

    public function render($tpl, $data = array()) {
        if(file_exists('template/'.$tpl.'php')) {
            require 'template/'.$tpl.'php';
        }
    }
}