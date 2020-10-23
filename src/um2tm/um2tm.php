<?php

    var_dump($_REQUEST);
    error_log(PHP_EOL . urldecode(http_build_query($_REQUEST, '', PHP_EOL)));
