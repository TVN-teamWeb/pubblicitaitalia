    <?php
        $rss = new DOMDocument();
        $xml = file_get_contents('http://www.advertiser.it/feed');
        $rss->loadXML(str_replace("<rss", "\n<rss", trim($xml) )) ;

        $xpath = new DOMXPath($rss);
        $feed = array();
        $items = $xpath->query("//item");
        foreach ($items as $node) {

            $item = array (
                'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
               // 'desc' => $node->getElementsByTagName('description')->item(0)->nodeValue,
                'content' => $node->getElementsByTagName('description')->item(0)->nodeValue,
                'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
                'date' => $node->getElementsByTagName('pubDate')->item(0)->nodeValue,
                //'image' => $node->getElementsByTagName('img')->item(0)->getAttr("src"),
                );
            array_push($feed, $item);
        }
?>

<div class="list-feed">
<?php

        $limit = 3;
        for($x=0;$x<$limit;$x++) {
            $title = str_replace(' & ', ' &amp; ', $feed[$x]['title']);
            $link = $feed[$x]['link'];
            $image = $feed[$x]['image'];
            $description = $feed[$x]['content'];
            preg_match('/(<img[^>]+>)/i',  $description, $matches);
            $description = $matches[0];



            $date = date('d F Y', strtotime($feed[$x]['date']));
            $montheng = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December' );
            $monthita = array('Gennaio', 'Febbraio', 'Marzo', 'Aprile', 'Maggio', 'Giugno', 'Luglio', 'Agosto', 'Settembre', 'Ottobre', 'Novembre', 'Dicembre');
		    $date = str_ireplace($montheng, $monthita, $date);
            ?>


<div class="box-feed">

    <div class="srr-title">
        <small><a href="<?php echo $link; ?>"><?php echo  $title; ?></a></small>
        <small class="srr-summary srr-clearfix"><?php echo $description; ?></small>
    </div>


</div>






    <?php

      }
    ?>
</div>
