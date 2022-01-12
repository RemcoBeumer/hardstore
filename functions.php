<?php
function createList($arr, $classname)
{

    $html = '<ul class="'. $classname . '">';

    foreach ($arr as $key => $val){
   $html .= "<li><a href='". $val ."'>".$key."</a></li>";
    }

    $html .='</ul>';
    return "$html";