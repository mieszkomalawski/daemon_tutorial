<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

// this must be called in order to wok 
   declare(ticks = 1);

// signal handler function
function sig_handler($signo)
{

     echo 'handler called for signal: ' . $signo . "\n";
}


// register handler
pcntl_signal(SIGUSR1, "sig_handler");
pcntl_signal(SIGTERM, 'sig_handler');
pcntl_signal(SIGINT, "sig_handler");

// check if callback is working in fact

echo"Generating signal SIGUSR1 to self...\n";

// send SIGUSR1 to current process id
// posix_* functions require the posix extension
posix_kill(posix_getpid(), SIGUSR1);

while(1 == 1){
	echo 'waiting for signals' . "\n";
    sleep(5);
}

echo 'terminating';