<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questionnaire</title>
</head>
<body>

<form method='post' action='index1.php'>
    <p>What is your favorite color?</p>
    <select name='answer1'>
        <option value='a'>Red</option>
        <option value='b'>Blue</option>
        <option value='c'>Green</option>
    </select><br>

    <p>Which programming language do you prefer?</p>
    <select name='answer2'>
        <option value='a'>PHP</option>
        <option value='b'>JavaScript</option>
        <option value='c'>Python</option>
    </select><br>

    <p>What is your favorite animal?</p>
    <select name='answer3'>
        <option value='a'>Dog</option>
        <option value='b'>Cat</option>
        <option value='c'>Elephant</option>
    </select><br>

    <input type='submit' value='Submit'>
</form>

</body>
</html>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $answers = $_POST;

    foreach ($answers as $questionNumber => $answer) {
        switch ($questionNumber) {
            case 'answer1':
                echo "Your favorite color is ";
                switch ($answer) {
                    case 'a':
                        echo "Red. ";
                        break;
                    case 'b':
                        echo "Blue. ";
                        break;
                    case 'c':
                        echo "Green. ";
                        break;
                    default:
                        echo "Invalid answer. ";
                }
                break;

            case 'answer2':
                echo "You prefer ";
                switch ($answer) {
                    case 'a':
                        echo "PHP. ";
                        break;
                    case 'b':
                        echo "JavaScript. ";
                        break;
                    case 'c':
                        echo "Python. ";
                        break;
                    default:
                        echo "Invalid answer. ";
                }
                break;

            case 'answer3':
                echo "Your favorite animal is ";
                switch ($answer) {
                    case 'a':
                        echo "Dog. ";
                        break;
                    case 'b':
                        echo "Cat. ";
                        break;
                    case 'c':
                        echo "Elephant. ";
                        break;
                    default:
                        echo "Invalid answer. ";
                }
                break;

            default:
                echo "Invalid question number. ";
        }
    }
}
?>
