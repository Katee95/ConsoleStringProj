<?php

$text = "yourapp the quick brown fox jumps over the lazy dog";

echo $text . "\n\n";
$text_ar = explode(' ', $text);
array_shift($text_ar);

echo "<ul>";

foreach ($text_ar as $line) {
    echo "<li>$line</li>";
}

echo "</ul><br><br>";

sort($text_ar);

echo "<ul>";

foreach ($text_ar as $line) {
    echo "<li>$line</li>";
}

echo "</ul><br><br>";

$text_unique = array_unique($text_ar);

echo "<ul>";

foreach ($text_unique as $line) {
    echo "<li>$line</li>";
}

echo "</ul><br><br>";


$count_ar = array_count_values($text_ar);
echo "<ul>";

foreach ($count_ar as $key => $count) {
    echo "<li>$key - $count</li>";
}

echo "</ul><br><br>";
