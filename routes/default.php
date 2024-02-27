<?php

$this->get('', function($arg) {
    $tpl = $this->core->loadModule('template');

    echo 'home';
});