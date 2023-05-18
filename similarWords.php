<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Modularizations</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Merriweather&family=Montserrat&family=Sacramento&display=swap"
      rel="stylesheet"
    />
</head>
<body class="similarWordsBody">
    <header>
        <nav class="generalNav">
            <ul>
                <li><a href="./index.php">Home</a></li>
                <li><a href="./reverseSentence.php"></a>Sentence Reverse</li>
                <li><a class="current-page3" href="./similarWords.php">Similar Words</a></li>
            </ul>
        </nav>
    </header>
    <h1 class="questionsHeading">Similar Words</h1>
    <div class="similarWords">
        <?php
        $file = './text.txt'; // Replace with the path to your text file

        // Read the contents of the text file
        $text = file_get_contents($file);

        // Remove punctuation and convert to lowercase
        $text = preg_replace('/[^\w\s]/', '', strtolower($text));

        // Split the text into an array of words
        $words = explode(' ', $text);

        // Count the occurrences of each word
        $wordCounts = array_count_values($words);

        // Group similar words by their counts
        $groupedWords = array();
        foreach ($wordCounts as $word => $count) {
            $groupedWords[$count][] = $word;
        }

        // Print the grouped words
        foreach ($groupedWords as $count => $words) {
            echo "<h2>Number of Similar Words</h2>";
            echo "<p>". $count . "</p>";
            echo "<h2>Words</h2>";
            echo "<p>". "" . implode(', ', $words) . "\n\n" . "</p>";
        }
        ?>
    </div>
</body>
</html>





