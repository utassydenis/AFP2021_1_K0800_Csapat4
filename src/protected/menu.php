<?php
    $menu = [
        [
            'href' => BASE_URL.'start.php',
            'title' => 'Kezdőoldal'
        ],
        [
            'href' => BASE_URL.'start.php?E=lista',
            'title' => 'Listázás'
        ],
        [
            'href' => BASE_URL.'start.php?E=kereses&M=keres',
            'title' => 'Keresés'
        ],
        [
            'href' => BASE_URL.'start.php?E=hozzaad&M=hozzaad',
            'title' => 'Termék hozzáadása'
        ],
        [
            'href' => BASE_URL.'start.php?E=muvelet&M=lista',
            'title' => 'Műveletek'
        ]
    ];
    require_once CORE_DIR.'views.php';
    print_menu($menu);
?>