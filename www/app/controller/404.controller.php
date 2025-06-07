<?php
require_once 'app/controller/controller.php';

function generate404Page()
{
    $data = [
        'css_file' => '../../../public/css/404.css',
        'page_title' => "Error 404 - Page Not Found",
        'view' => 'app/view/404.view.php',
        'layout' => 'app/view/common/layout.php',
    ];

    generatePage($data);
}
