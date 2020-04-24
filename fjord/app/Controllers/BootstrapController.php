<?php

namespace FjordApp\Controllers;

class BootstrapController
{
    public function bootstrap()
    {
        return view('fjord::app')->withComponent('bootstrap');
    }
}
