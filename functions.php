<?php

function RUB ($price) {
  $price = ceil($price);
  if ($price <= 1000) {
    return $price.'<b class="rub">р</b>';
  }
  if ($price > 1000) {
    $price = number_format($price, 0 , ',', ' ');
    return $price.'<b class="rub">р</b>';
  }
}

function include_template ($template_path, $var) {
    if ($template_path) {
        ob_start();
        extract($var);
        require_once($template_path);
        return ob_get_clean();
    }
    else {
        return ('ERROR_Шаблон не существует('.$template_path.')');
    }
}

date_default_timezone_set('Europe/Moscow');

function TimeSale() {

    $first = strtotime(date("d.m.Y.H.i.s"));
    $second = strtotime(date("d.m.Y")) + 86400;
    $last = $second - $first;

    $hour = floor($last/3600);
    $minutes = floor(($last - $hour*3600)/60);
    $sec = $last - $hour*3600 - $minutes*60; 

    return ($hour.":".$minutes.":".$sec);

}

?>