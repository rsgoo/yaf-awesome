<?php

    $data = $_POST;

    $name = $data['name'];
    $content = $data['content'];

    file_put_contents('1.log', $name.'->'.$content.PHP_EOL);

 ?>
