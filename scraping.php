<?php
    $homepage = file_get_contents ('https://www.mnzlendava.si/index.php/sezona-2019-20/pomurska-nogometna-liga-19-20/lestvica-in-rezultati');
    $headStart = explode ('<html lang="sl-si" dir="ltr">', $homepage);
    $headEnd = explode ('<linkhref="//fonts.googleapis.com/css ?family=Open+Sans:400,600,700" rel="stylesheet"     type="text/css"/>', $headStart[1]); 
    echo $headEnd[0]; 

    $startWeb = explode ('<a href="/index.php/sezona-2019-20/pomurska-nogometna-liga-19-20/lestvica-in-rezultati?krog=1">1. krog</a></li>',$homepage);
    $endWeb = explode ('<input type="hidden" id="option" name="option" value=" com_nogomet"/>',$start_Web[1]); 
    echo $end_Web[0];

    $startTag = explode ('<div class=" bd-stretchtobottom-3 bd-stretch-to-bottom" data-control-selector=".bd-footerarea-1"><footer class=" bd-footerarea-1  bd- margins">', $homepage);
    $endTag = explode ('<div class="bd-layoutcolumn-60 bd-column"><div class="bd-vertical-align-wrapper">', $startTag[1]); 
    echo $endTag[0];
?>
