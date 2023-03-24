<?php

function wordFrequencyAnalyzer($text)
{
    $words = str_word_count($text, 1);
    $wordCount = array_count_values($words);
    arsort($wordCount);
    return $wordCount;
}
$text = "I'm working on Objectivity coding challenge for preparing .NET course";
print_r(wordFrequencyAnalyzer($text));
?>