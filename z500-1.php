<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
echo'{
    "mediciones":[
        {
            "nombreZona": "Z500",
            "nombreArea": null,
            "fecha": "2021-11-25 15:30",
            "magnitud": "iluminacion",
            "valor": "88"
        },
        {
            "nombreZona": "Z500",
            "nombreArea": "A501",
            "fecha": "2021-11-25 15:30",
            "magnitud": "pulsaciones",
            "valor": "4"
        }
    ]
} ';