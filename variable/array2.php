<?php

$me = array(
    "firstname" => "Florian",
    "age" => 23,
    "season" => "winter",
    "soccer" => true,
);

$me['hobbies'] = [
    "Football",
    'Programin',
    'Music',
];

$brother = [];

$brother['hobbies'] = [
    'Video games',
    'music',
];

$me['brother'] = $brother;

echo '<pre>';
print_r($me);
echo '<pre>';

echo count($me['hobbies']);
echo count($me['brother']['hobbies']);
echo count($me["hobbies"]) + count($me["brother"]["hobbies"]);

$me['hobbies'][] = 'Taxidermy';
$me['lastname'] = 'Durant';

$soulmate = [
    "hobbies" => ['Drawing'],
    "lastname" => 'Dupont',
];

$intersect = array_intersect($me, $soulmate);
$fusion = array_merge($me, $soulmate);

echo '<pre>';
print_r($intersect);
print_r($fusion);
echo '<pre>';

$web_development = [
    'frontend' => [],
    'backend' => []
];

array_push($web_development['frontend'], "xhtml", 'CSS', 'Javascript');
array_push($web_development['backend'], "Ruby on Rails", 'Flash');

echo '<pre>';
print_r($web_development);
echo '<pre>';