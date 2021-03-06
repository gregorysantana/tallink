<?php

include('../classes/Tallink.class.php');

/* fetch journeys from tallinn to helsinki between dateFrom and dateTo */
$fetch_journeys = new Tallink();
  $fetch_journeys->from = 'tal';
  $fetch_journeys->to = 'hel';
  $fetch_journeys->oneWay = true;
  $fetch_journeys->locale = 'en';
  $fetch_journeys->voyageType = 'SHUTTLE';
  $fetch_journeys->dateFrom = '2018-12-15'; /* from date */
  $fetch_journeys->dateTo = '2018-12-18'; /* to date */
$fetch_journeys = Tallink::fetch_journeys($fetch_journeys);

foreach($fetch_journeys as $row)
{
	echo '<br>'.$row["shipCode"]; /* prints out each journey's shipCode */
}

?>
