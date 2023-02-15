<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
</head>

<body>
    <!-- tutorial episode 3 -->
    <!-- to run devlopment on server, run 'php -S localhost:<port number>'-->
    <h1>hello world using native html</h1>

    <h1>
        <?php
        echo "hello world using php echo";
        ?>
    </h1>

    <!-- tutorial episode 4 -->
    <h1>
        <?php
        $greetings = "Good";

        echo $greetings . ' ' . 'Morning!';
        ?>
    </h1>

    <h1>
        <?php
        echo "Use double-quote to nest variable inside string, $greetings Morning!";
        ?>
    </h1>
</body>

</html>