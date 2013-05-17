<?php

// Include the class
include ('../KmeansImage.php');

$kmeans = new KmeansImage('php-net-favicon.png', 3);
$kmeans->execute();

$centroid = $kmeans->getDominantCentroid();
echo '#' . $centroid['hex'];
