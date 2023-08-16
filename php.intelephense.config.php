<?php
return [
    "completion" => [
        "globalClassBlacklist" => [
            "wpdb", // Suprime os erros relacionados ao objeto $wpdb do WordPress
            "WP_Query", // Suprime os erros relacionados à classe WP_Query
            // Adicione outras funções ou classes do WordPress aqui, se necessário
        ]
    ]
];