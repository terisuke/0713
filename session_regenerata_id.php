<?php
// sessionをスタートしてidを再生成しよう．
// 旧idと新idを表示しよう．
session_start();

$old_id = session_id();

session_regenerate_id(true);

$new_id = session_id();
var_dump($old_id,$new_id);
exit();