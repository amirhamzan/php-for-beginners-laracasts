<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
    <style>
        body {
            display: grid;
            place-items: center;
            height: 100vh;
            margin: 0;
            font-family: sans-serif;
        }
    </style>
</head>

<body>
    <!-- tutorial episode 3 -->
    <!-- to run devlopment on server, run 'php -S localhost:<port number>'-->
    <div>
        <h1>hello world using native html</h1>

        <h1>
            <?php
            echo "hello world using php echo";
            ?>
        </h1>
    </div>
    <!-- tutorial episode 4 -->
    <div>
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
    </div>
    <!-- tutorial episode 5 -->
    <div>
        <h1>
            <?php
            $book = "OOP Fundamental";
            $random_boolean = (bool)rand(0,1);
            if ($random_boolean == 1) {
                $status_read = "read";
            } else {
                $status_read = "not read";
            }
            echo "You have $status_read $book!";
            ?>

            <!-- shorter syntax for echo -->
            <!-- <?= "You have $status_read $book!" ?> -->
        </h1>
    </div>
</body>

</html>