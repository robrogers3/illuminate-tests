<?php
require '../vendor/autoload.php';
require '../vendor/illuminate/support/illuminate/support/helpers.php';
use Illuminate\Support\Str;
function nl2() { echo PHP_EOL . PHP_EOL; }
function _l() {echo PHP_EOL;}
function _d($d)
{
    if (is_array($d) || is_object($d)) {
        print_r($d);
    } else {
        echo $d . PHP_EOL;
    }
}
function _ed($d, $char = '-') 
{

    echo str_repeat($char, 22);
    _l();
    _d($d);
    echo str_repeat($char, 22);
    echo _l();
}
function _em($d)
{
    _ed($d, '#');
}
function _c($s)
{
    echo '<code>';
    echo _d($s);
    echo '</code>';
    echo _l();
}
echo '<pre>';
_em('Array functions');
_c('$value = array_get($array, "products.desk")');
$array = ['products' => ['desk' => ['price' => 100]]];
$value = array_get($array, 'products.desk');
print_r($value);
_l();

_ed('last');
_c('$last = last($array)');
$array = [100, 200, 300];
$last = last($array);
print_r($array);
echo 'last element: ' . $last . PHP_EOL . PHP_EOL;

_ed('array_get');
_c('$array = ["products" => ["desk" => ["price" => 100]]]; $value = array_get($array, "products.desk")');
$array = ['products' => ['desk' => ['price' => 100]]];
$value = array_get($array, 'products.desk');
_d($value);_l();

_ed('array_pluck');
_c('$array = [
    ["developer" => ["id" => 1, "name" => "Taylor"]],
    ["developer" => ["id" => 2, "name" => "Abigail"]],
]');

_('$array = array_pluck($array, "developer.name");');

$array = array(
    array('developer' => array('id' => 1, 'name' => 'Taylor')),
    array('developer' => array('id' => 2, 'name' => 'Abigail'))
);
$array = array_pluck($array, 'developer.name');
_d($array);


_em('String Functions');
$basePath = str_finish(dirname(__FILE__), "/");
echo 'the base path finished: ' .  $basePath . PHP_EOL . PHP_EOL;

_c('random $string  = str_random(40)');
$string = str_random(40);
_d($string);
nl2();


_em('Str::');
echo "Str::endsWith('Hello world', 'rld') --> "; echo Str::endsWith('Hello world', 'rld') == true ? 'yes' : 'no';
nl2();

echo 'Plural' . PHP_EOL;
$plural = str_plural('car');
echo 'plural af cars is: ' . $plural . PHP_EOL;
$plural = str_plural('child');
_d('plural af child is: ' . $plural);
nl2();



