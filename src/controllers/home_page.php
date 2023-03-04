<?php

/**
 * This class is used to display homepage
 */

namespace App\Controllers\HomePage;

class HomePage
{
    public function execute()
    {
        require('templates/front/homepage.php');
    }
}
