<?php


return [
    "api_key" => env("TEMP_DATA_API_KEY", "8dc9ba99c4e5fe28f4dc20edbc1848c0"),
    "api_url" => env("TEMP_DATA_API_URL", "https://api.openweathermap.org/data/2.5/onecall"),
    "cities" => [
        "colombo" => [
            "name" => "Colombo",
            "lon" => "79.8612",
            "lat" => "6.9271"
        ],
        "melbourne" => [
            "name" => "Melbourne",
            "lon" => "144.9631",
            "lat" => "37.8136"
        ],
        "sydney" => [
            "name" => "Sydney",
            "lon" => "151.2093",
            "lat" => "33.8688"
        ],
        "tokyo" => [
            "name" => "Tokyo",
            "lon" => "139.6503",
            "lat" => "35.6762"
        ]
    ]
];
