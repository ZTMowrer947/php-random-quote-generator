<?php
// PHP - Random Quote Generator

// Declare array of quote objects
$quotes = [
    [
        // The quote itself
        "quote" => "Try not. Do. Or do not. There is no try.",
        
        // The author of the quote
        "source" => "Yoda",

        // The origin of the quote
        "citation" => "Star Wars: Episode V - The Empire Strikes Back",

        // The year of the quote
        "year" => 1980,

        // Tags relating to this quote
        "tags" => ["Star Wars", "Film"]
    ],
    [
        "quote" => "Only a Sith deals in absolutes.",
        "source" => "Obi-Wan Kenobi",
        "citation" => "Star Wars: Episode III - Revenge of the Sith",
        "year" => 2005,
        "tags" => ["Star Wars", "Film"]
    ],
    [
        "quote" => "The only thing we have to fear is fear itself.",
        "source" => "Franklin D. Roosevelt",
        "citation" => "Inaugural Address of the President of the United States",
        "year" => 1933,
        "tags" => ["United States", "Presidential"]
    ],
    [
        "quote" => "Never, never, never give up.",
        "source" => "Winston Churchill",
        "tags" => ["United Kingdom", "WWII", "Inspirational"]
    ],
    [
        "quote" => "It does not matter how slowly you go as long as you do not stop.",
        "source" => "Confucius",
        "tags" => ["China", "Inspirational"]
    ]
];

// Select a random quote from the array of quotes
function getRandomQuote($quotes) {
    // Count number of quotes in array
    $count = count($quotes);

    // Select a random index from the quotes array
    $index = rand(0, $count - 1);

    // Return the quote data stored at that index
    return $quotes[$index];
}

// Print out an HTML string for a random quote
function printQuote(): string {
    // Call getRandomQuote to recieve quote data

    // Interpolate quote data into HTML template

    // Print out HTML data
}