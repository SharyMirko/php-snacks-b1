<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
$array_matches = [
    [
        'squadre' => [
            'casa' => 'Roma',
            'ospiti' => 'Lazio'
        ],
        'punteggio' => [
            'casa' => 10,
            'ospiti' => 0
        ]
    ],
    [
        'squadre' => [
            'casa' => 'Napoli',
            'ospiti' => 'Milan'
        ],
        'punteggio' => [
            'casa' => 3,
            'ospiti' => 0
        ]
    ],
    [
        'squadre' => [
            'casa' => 'Juventus',
            'ospiti' => 'Inter'
        ],
        'punteggio' => [
            'casa' => 2,
            'ospiti' => 0
        ]
    ],
    [
        'squadre' => [
            'casa' => 'Sampdoria',
            'ospiti' => 'Venezia'
        ],
        'punteggio' => [
            'casa' => 7,
            'ospiti' => 0
        ]
    ],
];
$name = $_REQUEST['name'];
    $age = $_REQUEST['age'];
    $email = $_REQUEST['email'];
    $long_string = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. At delectus asperiores hic praesentium tenetur, optio dolorum vero blanditiis quidem impedit, nulla laborum ipsum nemo, modi minima culpa reiciendis odio ducimus!
    Dolorem deserunt suscipit natus commodi rem, adipisci nam voluptatum saepe excepturi facere quod dolor, unde, quasi mollitia quia dolores nulla corrupti. Repudiandae enim nisi consequatur totam odio commodi animi cumque!
    Nobis a consectetur itaque consequatur illo, reiciendis aspernatur in molestias doloribus eius libero fugit, accusantium aliquam dicta ut tempore, necessitatibus odio. Accusantium pariatur illum ab, officia sapiente error dolore ut.
    Magni, quas voluptates eius iure quibusdam laborum! Iste quas nam vero corrupti aliquid? Iusto porro impedit ab cumque, architecto enim numquam sunt neque dolore eos nesciunt nemo odit, voluptate beatae?
    Maxime sunt consequuntur laboriosam. Modi perspiciatis itaque unde recusandae deleniti aut consequatur, assumenda voluptates veniam tenetur ipsam magni dignissimos ducimus doloremque dicta deserunt ab aperiam voluptatibus suscipit, id doloribus corrupti?";
?>
<body>
    <h1>Matches</h1>
   <ul> <?php
   for ($_i=0; $_i < count($array_matches); $_i++) { ?>
       <li>
           <span><?= $array_matches[$_i]['squadre']['casa'] ?> - <?= $array_matches[$_i]['squadre']['ospiti'] ?></span> | <span><?= $array_matches[$_i]['punteggio']['casa'] ?> - <?= $array_matches[$_i]['punteggio']['ospiti'] ?></span>
       </li>
   <?php } ?> </ul>

   <h1>Login</h1>
<form action="" method="GET">
    <label for="name">Nome</label>
    <input type="text" name="name" placeholder="Inserisci il tuo nome">
    <label for="age">Età</label>
    <input type="number" name="age">
    <label for="email">Email</label>
    <input type="email" name="email">
    <button actions="submit">Loggati</button>
</form>
<?php 
    $checkmail = false;
    if (strpos($email, '@') and strpos($email, '.')) {
        $checkmail = true;
    } else {
        $checkmail = false;
    }
?>
<?php
    if (count_chars($name) > 3 and is_numeric($age) and $checkmail) {
        echo 'Accesso riuscito';
    } else {
        echo 'Accesso negato';
    }
?>
<h1>Random array between 1-30</h1>
<?php 
    $array_random = [];
    while (count($array_random) < 15) {
        $random = rand(1, 30);
        if(!in_array($random, $array_random)) {
            $array_random[] = $random;
        }
    };
    var_dump($array_random);
?>
<h1>Paragrafo</h1>
<?php
    $long_string_pices = explode(".", $long_string);
    for ($_n=0; $_n < count($long_string_pices); $_n++) { 
        echo $long_string_pices[$_n] . ".<br>";
    }
?>
</body>
</html>
