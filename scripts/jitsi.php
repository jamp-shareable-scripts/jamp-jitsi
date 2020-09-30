<?php

/**
 * Generates a random meeting link for meet.jit.si.
 * 
 * Usage: jamp jitsi [options]
 *    jamp jitsi --length n
 *
 *   -l,--length=n Generate a random of length n, default 16
 * 
 * @author  jampperson <https://github.com/jampperson>
 * @license GPL-2.0
 */

jampUse(['jampEcho']);

$opts = getopt('l:', ['length:']);

$defaultLength = 16;
$lengthRaw = empty($opts['length'])
? (empty($opts['l']) ? $defaultLength : $opts['l'])
: $opts['length'];
$length = is_numeric($lengthRaw) ? (int)$lengthRaw : $defaultLength;

$random_string = trim(exec(
	'jamp random-string --letters --numbers --length=' . $length
));
$link = "https://meet.jit.si/" . $random_string;
jampEcho($link);
