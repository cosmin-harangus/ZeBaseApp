<?php
$name = $argv[1];
$phar = new Phar($name.'.phar');
$phar->buildFromDirectory($name.'/');
$phar->compressFiles( Phar::GZ );
$phar->stopBuffering();
