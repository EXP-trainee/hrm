<?php
$out = shell_exec( 'cd ..;git reset --hard;git pull origin master 2>&1' );
echo '<pre>'.$out.'</pre>';
