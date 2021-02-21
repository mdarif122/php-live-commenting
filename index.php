<?php

header("Access-Control-Allow-Origin: *");


$user = (object) [
    'user_id' => 2,
    'name' => 'Md Arif',
    'username' => 'arif',
    'avatar' => 'https://i.pinimg.com/474x/2d/6e/c6/2d6ec6dab9946acabd4c4322a31c6b44.jpg'
];

$post_id = 2;

$conn = new mysqli('localhost', 'root', '', 'php-comments');
if($conn->connect_error) die('404');

$table = 'comments';

$all = $conn->query("select * from $table");

$data = [];
while ($row = $all->fetch_assoc()) $data[] = $row;

header("Content-Type: application/json");
echo json_encode($data);

















