<?php

// require connection class

require './database/index.php';

$config = require './config.php';

// connect to db

return new QueryBuilder(
    Connection::connect($config['database'])
);
