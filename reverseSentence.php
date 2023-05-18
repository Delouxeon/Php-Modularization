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
<body class="reverseSentenceBody">
    <header>
        <nav class="generalNav">
            <ul>
                <li><a href="./index.php">Home</a></li>
                <li><a class="current-page2" href="./reverseSentence.php">Sentence Reserved</a></li>
                <li><a href="./similarWords.php">Similar Words</a></li>
            </ul>
        </nav>
    </header>
    <h1 class="questionsHeading">Sentence Reverse</h1>
    <div class="reverseSentence recursiveMethod">
        <h2>Recursive Method</h2>
        <?php

        /************* RECURSIVE METHOD *************/
        function reverseSentenceRecursive($sentence) {
            if (strlen($sentence) <= 1) {
                return $sentence;
            }
        
            $firstChar = substr($sentence, 0, 1);
            $remainingChars = substr($sentence, 1);
        
            return reverseSentenceRecursive($remainingChars) . $firstChar;
        }


        $sentence = "The Lord is my Sphered, I shall not want";
        echo "<h3>Sentence</h3>";
        echo "<p>".$sentence."</p>";
        $reversedSentence = reverseSentenceRecursive($sentence);
        echo "<h3>Reversed Sentence</h3>";
        echo "<p>".$reversedSentence."</p>";

        ?>
        
    </div>

    <div class="reverseSentence iterativeMethod">
        <h2>Iterative Method</h2>
        <?php

        /************* ITERATIVE METHOD *************/
        function reverseSentenceIterative($sentence) {
            $length = strlen($sentence);
            $reversed = '';
        
            for ($i = $length - 1; $i >= 0; $i--) {
                $reversed .= $sentence[$i];
            }
        
            return $reversed;
        }

        // Usage example:
        $sentence = "The Lord is my Sphered, I shall not want";
        echo "<h3>Sentence</h3>";
        echo "<p>".$sentence."</p>";
        $reversedSentence = reverseSentenceRecursive($sentence);
        echo "<h3>Reversed Sentence</h3>";
        echo "<p>".$reversedSentence."</p>";

        ?>
    </div>
</body>
</html>




