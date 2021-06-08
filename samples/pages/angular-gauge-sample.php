<?php

use FusionCharts\PhpWrapper\FusionCharts;

require __DIR__ . '/../../vendor/autoload.php';

$gaugeData = "{
                    \"chart\": {
                        \"caption\": \"Nordstorm's Customer Satisfaction Score for 2017\",
                        \"lowerLimit\": \"0\",
                        \"upperLimit\": \"100\",
                        \"showValue\": \"1\",
                        \"numberSuffix\": \"%\",
                        \"theme\": \"fusion\",
                        \"showToolTip\": \"0\"
                    },
                    \"colorRange\": {
                        \"color\": [{
                            \"minValue\": \"0\",
                            \"maxValue\": \"50\",
                            \"code\": \"#F2726F\"
                        }, {
                            \"minValue\": \"50\",
                            \"maxValue\": \"75\",
                            \"code\": \"#FFC533\"
                        }, {
                            \"minValue\": \"75\",
                            \"maxValue\": \"100\",
                            \"code\": \"#62B58F\"
                        }]
                    },
                    \"dials\": {
                        \"dial\": [{
                            \"value\": \"81\"
                        }]
                    }
                }";

//chart object
$chart = new FusionCharts("angulargauge", "angulargauge-1", "600", "400", "angulargauge-container", "json", $gaugeData);

//render the chart
$chart->render();
