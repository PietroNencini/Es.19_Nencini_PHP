<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Es.18 Nencini</title>
</head>
<body>
    
    <?php
        $question = "Qual è il pianeta più vicino al Sole?";
        $answers = ["Venere", "Terra", "Marte", "Mercurio", "Giove"];
        echo "<p> $question </p>";
        $answer_output = "<form>";
        for($i = 0; $i < count($answers); $i++) {
            $answer_output .= "<input type='radio' id='".$answers[$i]."' name='risposta' value='".$answers[$i]."' <label for='".$answers[$i]."'> ".$answers[$i]." </label> <br>";
        } 
        echo $answer_output;
    ?>

</body>
</html>