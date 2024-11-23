<?php
$users = json_decode(json: file_get_contents(filename: 'users.json'), associative: true);
$count = isset($_GET['count']) ?(int)$_GET['count'] : 10;
if ($count < 1 || $count > 100){
    $count = 10;
}
$slicedUsers = array_slice(array: $users, offset: 0, length: $count);
require 'template_account_list.php';