<?php
$menu = [
    [
        'href' => 'HibaJelent.html',
        'title' => 'Hibabejelentés',
        'extra' => ['class' => 'hiba']
    ],
    [
        'href' => 'Regisztracio.html',
        'title' => 'Regisztráció'
    ],
    ['href' => '#',
        'title' => 'Főoldal'
    ],
    ['href' => '#',
        'title' => 'Adatbázis'
    ]
];
?>
<?php
$menuCnt = count($menu);

?>

<div class="nav">
    <ul>
        <?php
        // echo array_key_exists('$extraString',$menu[$i]);
        for($i = 0; $i < $menuCnt; $i++):?>
            <?php
            $extraString = '';
            if(array_key_exists('extra', $menu[$i])){
                foreach($menu[$i]['extra'] as $key => $value)
                    $extraString = $extraString.' '.$key.'="'.$value.'"';
            }
            ?>
            <li>
                <a href="<?=$menu[$i]['href']?>" <?=$extraString?>>
                    <?=$menu[$i]['title']?>
                </a>
            </li>
        <?php endfor;?>
    </ul>
</div>



