<?php

// require connection class

require 'core/database/index.php';

$config = require 'config.php';

require './core/Router.php';

return new QueryBuilder(
    Connection::connect($config['database'])
);
