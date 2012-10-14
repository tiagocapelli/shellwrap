<?php

// Require the class
require 'ShellWrap.php';

use \MrRio\ShellWrap as sh;

echo sh::ls(array('l' => true));
sh::rm('page.html');
//echo sh::sort(sh::du(sh::glob("*"), "-sb"), "-rn");

exit();

echo '<pre>';
echo sh::ls('-l');


echo '<pre>';

// This does no magic path finding

//echo $sh('ls', '-l *');
echo sh::curl('http://snapshotmedia.co.uk', array(
	'o' => 'page.html',
	'silent' => true
), 'summat', array('and', 'some'));

exit();

echo sh::ls('-l');



echo sh::git('pull', array('hard' => true), 'HEAD');



//$ret = $sh->ls('-l');

sh::git()->pull('origin master');

sh::curl('http://snapshotmedia.co.uk', array(
	'o' => 'page.html'
));

$ls = explode("\n", $sh::ls('*'));

echo sh::sort(sh::du(sh::glob("*"), "-sb"), "-rn");

// Run a raw command
echo $sh('ls -l');


?>