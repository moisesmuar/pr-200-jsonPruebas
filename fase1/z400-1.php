<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

echo' {
    "mediciones":[
        {
            "nombreZona": "Z400",
            "nombreArea": null,
            "fecha": "2021-11-25 15:30",
            "magnitud": "temperatura",
            "valor": "18"
        },
        {
            "nombreZona": "Z400",
            "nombreArea": null,
            "fecha": "2021-11-25 15:30",
            "magnitud": "humedad",
            "valor": "34"
        },
        {
            "nombreZona": "Z400",
            "nombreArea": "A401",
            "fecha": "2021-11-25 15:30",
            "magnitud": "pulsaciones",
            "valor": "7"
        },
        {
            "nombreZona": "Z400",
            "nombreArea": "A402",
            "fecha": "2021-11-25 15:30",
            "magnitud": "pulsaciones",
            "valor": "2"
        }
    ]
}  ';