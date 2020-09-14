<DOCTYPE html>
<html lang="pl" dir="ltr">
<head></head>
<body>
    <?php 
        $name = "Krzysztof";
        $surname = "Majonez";

        echo "Imię: $name <br>";

        $prawda = true;
    
        // heredoc
        $trol = <<<LABEL
        kupię bułki
        <br>
        <hr>
        tu też majonez
        LABEL;

        echo $trol;

        echo <<<'L'
        <hr>
        nowdoc
        Imię: $name
        L;
    ?>
</body>
</html>