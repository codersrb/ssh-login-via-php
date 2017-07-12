<?php


$ssh = ssh2_connect('xxxx', 9999);


$boolAuth = ssh2_auth_password($ssh, 'xxxx', 'xxxx');


if($boolAuth)
{
   $stream = ssh2_exec($ssh, 'find .');

	echo 'Setting blockage' , PHP_EOL;

   stream_set_blocking($stream, true);
   echo 'Blocking ...', PHP_EOL;
   echo $stream_out = ssh2_fetch_stream($stream, SSH2_STREAM_STDIO);
   echo PHP_EOL, 'getting Content', PHP_EOL;

   while($tmp = stream_get_line($stream_out, 1024))
   {
	   echo $tmp;
	   sleep(10);
   }

   echo 'Output Emitted to STDOUT', PHP_EOL;

}
