<?php


$choose = strtolower((string)readline("Choose Rock, Paper, Scissor, Lizard, Spock:" . "\n"));
$random = (rand(1, 5));
$playersChoice = 0;
$computerChoice = "";

if ($choose === "rock") {
    $playersChoice = 1;
} else if ($choose === "paper") {
    $playersChoice = 2;
} else if ($choose === "scissor") {
    $playersChoice = 3;
} else if ($choose === "lizard") {
    $playersChoice = 4;
} else if ($choose === "spock") {
    $playersChoice = 5;
} else {
    echo "ERROR" . "\n";
    exit;
}

$gameProperties = [
    [
        "symbol" => "rock",
        "index" => 1,
        "wins" => 3,
        "wins2" => 4
    ],
    [
        "symbol" => "paper",
        "index" => 2,
        "wins" => 1,
        "wins2" => 5
    ],
    [
        "symbol" => "scissor",
        "index" => 3,
        "wins" => 3,
        "wins2" => 4
    ],
    [
        "symbol" => "lizard",
        "index" => 4,
        "wins" => 2,
        "wins2" => 5
    ],
    [
        "symbol" => "spock",
        "index" => 5,
        "wins" => 1,
        "wins2" => 3
    ]
];

for ($i = 0; $i < count($gameProperties); $i++) {
    if ($gameProperties[$i]["index"] === $random) {
        $computerChoice = $gameProperties[$i]["symbol"];
    }
};

for ($i = 0; $i < count($gameProperties); $i++) {
    if ($playersChoice === $random) {
        echo "This is a draw! Computer choose: " . "$computerChoice" . "\n";
        break;
    } elseif (($gameProperties[$i]["index"] === $playersChoice) && (($gameProperties[$i]["wins"] === $random) || ($gameProperties[$i]["wins2"] === $random))) {
        echo "You win! Computer choose: " . "$computerChoice" . "\n";
    } elseif (($gameProperties[$i]["index"] === $playersChoice) && (($gameProperties[$i]["wins"] !== $random) || ($gameProperties[$i]["wins2"] !== $random))) {
        echo "You lose! Computer choose: " . "$computerChoice" . "\n";
    }
};
