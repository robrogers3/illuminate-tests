<?php

namespace Acme;

class Template
{
    public function render($page)
    {
        $html =  '<h1>Rendered the page: "' . $page . '"</h1>' . PHP_EOL;
        $pages = array('send-email', 'login', 'articles');
        $links = array_map(function($page) { return "<li><a href='$page'>$page</a>";}, $pages);
        $links = implode('', $links);
        $nav = "<ul>$links</ul>";
        return $html . 'try these links:' .$nav;
                           
    }
}
