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
        // Thanks to Lee V for sharing this quote in the FSJS Techdegree a while ago!
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
function printQuote($quotes): void {
    // Call getRandomQuote to recieve quote data
    $quote = getRandomQuote($quotes);

    // Interpolate basic quote data into HTML template
    $html = <<<QUOTE
        <p class="quote">{$quote['quote']}</p>
        <p class="source">
            {$quote['source']}
QUOTE;

    // If citation is present on quote,
    if (array_key_exists('citation', $quote)) {
        // Insert it into HTML
        $html .= "<span class=\"citation\">{$quote['citation']}</span>";
    }

    // If year is present on quote,
    if (array_key_exists('year', $quote)) {
        // Insert it into HTML
        $html .= "<span class=\"year\">{$quote['year']}</span>";
    }

    // Finish HTML string
    $html .= "</p>";

    // Print out HTML data
    echo $html;
}

// Generates a CSS color string for a random background color
function getRandomBackgroundColor(): string {
    // Generate random values for red, green, and blue
    $red = rand(0, 192);
    $green = rand(0, 192);
    $blue = rand(0, 192);

    // Construct CSS color string
    $color = "rgba($red, $green, $blue)";

    // Return color string
    return $color;
}

// Print out CSS style elements to set background color
function printBackgroundColorStyle(): void {
    // Get background color string
    $bg = getRandomBackgroundColor();

    // Create <style> elements to set background color
    $style = <<<STYLE
        <style>
            body, #loadQuote {
                background-color: $bg;
            }
        </style>
STYLE;

    // Print out style HTML
    echo $style;
}
