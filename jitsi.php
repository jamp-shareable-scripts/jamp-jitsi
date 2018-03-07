<?php

/**
 * Opens a new meeting room on meet.jit.si using a randomly generated URL.
 * 
 * Usage: jamp jitsi
 * 
 * @author  jampperson <https://github.com/jampperson>
 * @license GPL-2.0
 */

jampUse(['jampEcho']);

$random_string = trim(exec(
	'jamp random-string --letters --numbers --length=64'
));
$link = "https://meet.jit.si/" . $random_string;
jampEcho($link);
