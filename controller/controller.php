<?php

class Controller {

    public function __construct($f3)
    {
        $this->f3 = $f3;
    }

    public function home()
    {
        $view = new Template();
        echo $view->render('views/home.html');
    }

    public function personal()
    {

    }

    public function experience()
    {
    }

    public function jobOpenings()
    {
    }

    public function summary()
    {
    }
}