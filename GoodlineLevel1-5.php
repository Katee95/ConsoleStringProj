<?php

$textLabel = "yourapp the quick brown fox jumps over the lazy dog";

if ($argc > 1) {
    $args = $argv;
    array_shift($args);

    $text = implode(" ", $args);

}
else {
    echo "input string: ";
    $inputConsole = STDIN;
    if (!empty($inputConsole)){
        $text = trim(fgets($inputConsole));
        $textSub = substr($textLabel, 7);
        $newText = " | yourapp";
        $textSub = $textSub . $newText;
    }
    else{
        $text = substr($textLabel, 7);
        $newText = " | yourapp";
        $text = $text . $newText;
    }
}


echo $text . "\n" . $textSub . "\n\n";

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




foreach ($text_ar as $line) {
    echo "$line\n";
}

echo "\n\n";

sort($text_ar);

foreach ($text_ar as $line) {
    echo "$line\n";
}

echo "\n\n";

$text_unique = array_unique($text_ar);

foreach ($text_unique as $line) {
    echo "$line\n";
}

echo "\n\n";


$count_ar = array_count_values($text_ar);

foreach ($count_ar as $key => $count) {
    echo "$key - $count\n";
}