<?php
require_once('data.php');
require_once('functions.php');

$page_content = include_template(
  'templates/index.php', ['announcement' => $announcement]
);

$layout_content = include_template(
  'templates/layout.php', ['content' => $page_content, 'title' => 'Главнейшая', 'categories'=>$categories ]
);

print($layout_content);

?>