<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Documentation</title>

    <!-- normalize.css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/maiko-ui/css/normalize.css">
    <!-- maiko ui version 1.1.0 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/maiko-ui/css/maiko-min-1.1.0.css">
</head>

<body>
    <header class="m-container">
    <h3><a href="/docs">Documentation</a></h3>
    </header>
    <div class="m-container">
        <h5 class="">Database</h5>
        <div>
        <pre>
            <code class="m-code">
            // configure database config.php file
                
                .......
                return [
                    'database' => [
                        'connection' => 'localhost',
                        'dbname' => 'db name',
                        'username' => 'username',
                        'password' => 'password',
                        'options' => [
                            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
                        ],
                ];
            </code>
        </pre>
        <pre>
            <code class="m-code">
                // connecting to database ./core/bootstrap.php

                .......

                $config = require 'config.php';

                $pdo = Connection::connect($config['database']);

                // using default query builder

                $query = new QueryBuilder($pdo);

            </code>
        </pre>
        <pre>
            <code class="m-code">
              // alternative way of connecting database(recommended)

                return new QueryBuilder(
                    Connection::connect($config['database'])
                );
            </code>
        </pre>
        <pre>
            <code class="m-code">
                // using query instance to fetch all data from the database --> all($tablename)

                $data = $query->all('users');
                // equivalent to 'select * from users' and store it on $data variable 
                
                // using query instance to fetch one table --> find($tablename, $field, $value)

                $data = $query->find('users', 'id', 1)
                // equivalent to 'select * from users where id = 1 'and store it on $data variable 
            </code>
        </pre>
        </div>
    </div>
</body>

</html>