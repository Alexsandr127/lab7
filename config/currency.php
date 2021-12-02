<?php
return [
    "fixer"=>[
        'api_key'=>env("FIXER_API_KEY", "926ba6b67fb43f463c3f66d5d1693283"),
        'base_url'=>env("FIXER_BASE_URL", 'http://data.fixer.io/api/'),
    ],
];
