<!-- // PHP - Random Quote Generator  -->
<?php
// main quotes array
$quotes = array(
    array(
        "quote" => "Finish him off, Prime! Do it now!",
        "source" => "Kup",
        "citation" => "Transformers: The Movie (1986)",
        "year" => 1986,
        "tags" => "#epic #HotRodRuinedEverything"
    ),
    array(
        "quote" => "No more, Optimus Prime! Grant me mercy, I beg of you!",
        "source" => "Megatron",
        "citation" => "Transformers: The Movie (1986)",
        "year" => 1986,
        "tags" => "#cowardlyDecepticons"
    ),
    array(
        "quote" => "You, who are without mercy, now plead for it? I thought you were made of sterner stuff!",
        "source" => "Optimus Prime",
        "citation" => "Transformers: The Movie (1986)",
        "year" => 1986,
        "tags" => null
    ),
    array(
        "quote" => "Who disrupts my coronation?",
        "source" => "Starscream",
        "citation" => "Transformers: The Movie (1986)",
        "year" => 1986,
        "tags" => null
    ),
    array(
        "quote" => "I have summoned you here for a purpose.",
        "source" => "Unicron",
        "citation" => "Transformers: The Movie (1986)",
        "year" => 1986,
        "tags" => null
    ),
    array(
        "quote" => "Soundwave superior. Constructicons inferior.",
        "source" => "Soundwave",
        "citation" => "Transformers: The Movie (1986)",
        "year" => 1986,
        "tags" => null
    ),
    array(
        "quote" => "There's no citation here. Here, there's no citation.",
        "source" => "Nev",
        "citation" => null,
        "year" => null,
        "tags" => null
    ),

);
//function returns a random quote from array using RNG
function getRandomQuote($arr)
{
    $arr_to_print = rand(0, count($arr) - 1);
    // echo count($arr);


    return $arr[$arr_to_print];
}

// contructs html to print to page
function printQuote()
{
    $arr_printing = getRandomQuote($GLOBALS['quotes']);
    $string_to_print = '';
    $string_to_print .= '<p class="quote">' . $arr_printing['quote'] . ' </p>';
    $string_to_print .= '<p class="source">' . $arr_printing['source'];
    if ($arr_printing['citation']) {
        $string_to_print .= '<span class="citation">' . $arr_printing['citation'] . '</span>';
        $string_to_print .= '<span class="year">' . $arr_printing['year'] . '</span>';
    }
    if ($arr_printing['tags']) {
        $string_to_print .= '</br><span class="tags">' . $arr_printing['tags'] . '</span>';
    }
    $string_to_print .= '</p>';
    echo $string_to_print;
}
?>