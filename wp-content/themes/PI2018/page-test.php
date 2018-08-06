<?php
$fmt = new \IntlDateFormatter('it_IT', NULL, NULL);
$fmt->setPattern('d MMMM yyyy HH:mm'); 
// See: http://userguide.icu-project.org/formatparse/datetime for pattern syntax
echo $fmt->format(new \DateTime()); 

	phpinfo();

?>
