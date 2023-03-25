<?php
$questions = array(
    "What is the purpose of a GitHub pull request?" => array(
        "A" => "To request that someone else's repository be deleted",
        "B" => "To request that someone else's repository be forked",
        "C" => "To suggest changes to someone else's repository",
        "D" => "To create a new repository from scratch"
    ),
    "What is 2+2?" => array(
        "A" => "1",
        "B" => "4",
        "C" => "8",
        "D" => "-4"
    ),
);

$answers = array(
    "What is the purpose of a GitHub pull request?" => "C",
    "What is 2+2?" => "B",
);

$score = 0;

foreach ($questions as $question => $choices) {
    shuffle($choices);
    echo $question . "<br>";
    foreach ($choices as $key => $choice) {
            echo $key+1 .". $choice<br>";
    }
    $answer = readline("Your answer (A/B/C/D): ");
    if ($answer == $answers[$question]) {
        echo "Correct! <br><br>";
        $score++;
    } else {
        echo "Incorrect.<br><br>";
    }
}

echo "\nYour score: $score/" . count($questions);
?>