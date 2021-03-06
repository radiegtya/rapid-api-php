<?php

require_once '../vendor/autoload.php';
require_once '../src/Rapid/News.php';
require_once '../src/Rapid/Rapid.php';
require_once '../src/Rapid/Response.php';

use Rapid\Rapid;
use Rapid\News;

Rapid::init("c09488fe9421b97eff3cbfeaa553db8f034777bb");

////GET ALL CATEGORIES
//echo "<h3>GET ALL CATEGORIES</h3>";
//$response = News::getCategories();
//print_r($response->headers());
//
//echo "<br/>";
//
//echo $response->paginate();
//
//foreach ($response->data() as $response) {
//    echo "<hr/>";
//    echo $response->_id . "<br/>";
//    echo $response->title . "<br/>";
//    echo "<hr/>";
//}

//GET ALL BY CATEGORY
echo "<h3>GET ALL By Category Example</h3>";
$response = News::getAllByCategory("test-1", ['test'=>'in:xxxtt,dede', 'title'=>'my fourth poST']);
print_r($response->headers());

echo "<br/>";

echo $response->paginate();

foreach ($response->data() as $response) {
    echo "<hr/>";
    echo $response->_id . "<br/>";
    echo $response->title . "<br/>";
    echo "<hr/>";
}

////GET ALL
//echo "<h3>GET ALL Example</h3>";
//$response = News::getAll(['limit'=>5, 'offset'=>1]);
//print_r($response->headers());
//
//echo "<br/>";
//
//echo $response->paginate();
//
//foreach ($response->data() as $response) {
//    echo "<hr/>";
//    echo $response->_id . "<br/>";
//    echo $response->title . "<br/>";
//    echo "<hr/>";
//}

////GET
//echo "<h3>GET Example with id zps2qaHyCwtXKqicc</h3>";
//$id = "zps2qaHyCwtXKqicc";
//$response = News::get($id, ["title" => "b"]);
//echo $response->data()->title;

////LOGIN
//echo "<h3>LOGIN Example</h3>";
//$response = Rapid::login('tiyo-news-admin', 'admin');
//print_r($response);

////LOGOUT
//echo "<h3>LOGOUT Example</h3>";
//$response = Rapid::logout();
//print_r($response);

////POST
//echo "<h3>POST Example </h3>";
//$body = [
//    'title' => 'My Fourth Post',
//    'slug' => 'my-fourth-post',
//    'categoryId' => 'QNddwNxyBJzBjo7WQ'
//];
//$response = News::post($body);
//print_r($response->message());

////PUT
//echo "<h3>PUT Example</h3>";
//$id = "zps2qaHyCwtXKqicc";
//$body = [
//    'title' => 'My Fifth Post',
//    'slug' => 'my-fifth-post'
//];
//$response = News::put($id, $body);
//print_r($response);

////DELETE
//echo "<h3>DELETE Example</h3>";
//$id = "zps2qaHyCwtXKqicc";
//$response = News::delete($id);
//print_r($response);

////DELETE ALL
//echo "<h3>DELETE ALL Example</h3>";
//$response = News::deleteAll();
//print_r($response);



