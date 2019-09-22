<?php
class View {
    public $date = [];
    function generate($content_view, $template_view, $date=null){

        include 'app/views/' . $template_view;
    }
}