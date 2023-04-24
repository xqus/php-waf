<?php
include __DIR__ . '/../src/autoload.php';
$waf = new \xqus\PhpWaf\Firewall();
$waf->setLogFile('waf.log');
$waf->run();