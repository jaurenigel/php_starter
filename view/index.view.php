<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Starter</title>
</head>
<body>
    <header>
        <h1>PHP Starter</h1>
        <nav>
            <li><a href="/about">About</a></li>
        </nav>
    </header>

    <ul>
        <?php 
            foreach ($users as $user) {
               echo "<li>$user->name</li>";
            }
        ?>
    </ul>
</body>
</html>