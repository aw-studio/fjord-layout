<?php

namespace FjordApp\Controllers;

class LayoutController
{
    public function buttons()
    {
        return view('fjord::app')->withComponent('layout-buttons');
    }
}
