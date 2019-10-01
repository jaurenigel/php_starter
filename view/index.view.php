<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Starter</title>
     <!-- normalize.css -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/maiko-ui/css/normalize.css">
    <!-- maiko ui version 1.1.0 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/maiko-ui/css/maiko-min-1.1.0.css">
</head>
<body class="m-container">
    <header>
        <h1>PHP Starter</h1>
        <nav>
            <li><a href="/about">About</a></li>
            <li><a href="/docs">Docs</a></li>
        </nav>
    </header>
    <br>
    <h3>Data from DataBase</h3>
    <!-- <br> -->
    <table style="width:50%">
              <tr>
                    <th class="m-th">Firstname</th>
                    <th class="m-th">Email</th>
              </tr>
                <?php foreach ($users as $user) : ?>
                <tr>
                    <td class="m-td"><?= $user->name ?></td>
                    <td class="m-td"><?= $user->email ?></td> 
              </tr>
             <?php endforeach; ?>
        </table>
</body>
</html>