<?php
require_once('data.php');
require_once('functions.php');

$lot = null;

if(isset($_GET['id'])){
    $lot_id = $_GET['id'];
    foreach ($announcement as $value) {
        if ($lot_id == $value['id']){
            $lot = $value;
            break;
        }
    }
}

if (!$lot){
    http_response_code(404);
}

$page_content = include_template(
  'templates/goods.php', ['value' => $lot]
);

$layout_content = include_template(
  'templates/layout.php', ['content' => $page_content, 'title' => 'Главнейшая', 'categories'=>$categories ]
);

print($layout_content);

?>