<?php

require_once('data.php');
require_once('functions.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $lot = $_POST;
   
    $error_list = ["description", "initprice"];
    $dict = ['description' => 'Описание', 'initprice' => 'Начальная цена'];
    $errors = [];

    foreach ($lot as $item) {
        if (empty($_POST[$item])){
            $errors[$item] = 'Поле не заполнено!';
        }
        
    }

    if (count($errors)){

    }



    if (isset($_FILES['photo']['name'])){
        $url = $_FILES['photo']['name'];
        $res = move_uploaded_file($_FILES['photo']['tmp_name'],'img/'.$url);
    }

    if (isset($url)){
        $lot['url'] = 'img/'.$url;
    }

    $page_content = include_template(
        'templates/goods.php', ['value' => $lot]
    );
}

else {
    $page_content = include_template(
    'templates/add.php', []
    );
}

$layout_content = include_template(
    'templates/layout.php', ['content' => $page_content, 'title' => 'Главнейшая', 'categories'=>$categories ]
  );
  
print($layout_content);


?>








