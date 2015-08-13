<?php

/*
 For now, this code only renders the list of posts of a given jekyll blog
 pointed by $dir.
 */

$dir = "pet";
echo "<h1>List of posts</h1> <ul>";

if($handle = opendir(getcwd()."/{$dir}/_posts")) {
    $filesNumber = 0;
    while(false !== ($entry = readdir($handle))) {
        if($entry !== "." && $entry !== "..") {
            echo "<li>{$entry}</li>";
        }
    }
}
echo "</ul>";
?>
