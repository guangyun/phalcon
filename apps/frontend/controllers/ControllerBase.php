<?php
namespace Store\Frontend\Controllers;

use Phalcon\Mvc\Controller;

class ControllerBase extends Controller
{
    public  function IndexAction() {
        $this->view->disable();
        var_dump($expression);
        $this->view->disable();
    }
}