<?php
require __DIR__.'/status.php';
$m=memcached();
ramReset($m);
print 'rem resetada com sucesso'.PHP_EOL;
