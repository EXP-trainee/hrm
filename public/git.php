<?php
$out = shell_exec( 'cd ..;git clean -f -d;git reset --hard origin;git pull origin master 2>&1' );
echo '<pre>'.$out.'</pre>';
