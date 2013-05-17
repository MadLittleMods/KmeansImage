<?php

// Show all the errors, in case there is something wrong with the demo.
// Do not show errors in a production build.
error_reporting(E_ALL);

// Include the class
include ('../KmeansImage.php');

// Create the KmeansImage object
$kmeans = new KmeansImage('php-net-favicon.png', 3);

// Ignore all extreme blacks and whites to avoid lame dominant colors
// This is optional but recommended for best results
$kmeans->ignoreExtremity(true);

// Generate/update the data
$kmeans->execute();

// Gets the dominant centroid
$centroid = $kmeans->getDominantCentroid();

// Get clusters
$clusters = $kmeans->getClusters();

// Print out the dominant color
echo '<b>Dominant Color: </b><br />';
echo '
<div style="display: inline-block; width: 20px; height: 20px; background: #', $centroid['hex'] ,';"></div>';
echo $centroid['cluster_key'] . ': #' . $centroid['hex'];

echo '<br /><br />';

// Print out all the clusters that were made
echo 'Clusters: <i>[key]: [color] - [count] ([ignoreCount])</i><br />';
foreach($clusters as $key => $cluster)
{
    echo '
    <div style="display: inline-block; width: 20px; height: 20px; background: #', $cluster['hex'] ,';"></div>';

    echo $key . ': #' . $cluster['hex'] . ' - ' . $cluster['count'] . ' (' . $cluster['ignoreCount'] .') <br />';
}


