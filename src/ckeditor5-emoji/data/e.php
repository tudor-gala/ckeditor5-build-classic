<?php

use App\Services\Emoji;

require('Emoji.php');
$output = '';

foreach (Emoji::all() as $category) {
  $output .= 'editor.plugins.get("Emoji").addItems("' . $category['label'] . '", [' . "\n";
  foreach ($category['emoji'] as $emoji) {
    $output .= '  { title: "' . $emoji['name'] . '", character: "' . $emoji['emoji'] . '" },' . "\n";
  }
  $output .= "]);\n\n\n";
}

file_put_contents('script.js', $output);



exit;
$x = json_decode(file_get_contents('apple.json'), true);
$output = '';
$map = $x['emojis'];

function map($id) {
  global $map;
  return $map[$id] ?? null;
}

foreach ($x['categories'] as $category) {
  foreach ($category['emojis'] as $emoji) {
    if (!$data = map($emoji)) {
      continue;
    }
    var_dump($data);
  }
}
//var_dump($x['categories'][0]);
