<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>

<link rel="stylesheet" type="text/css" href="../Layouts/dist/css/bootstrap.min.css">
<body>


<div class="container">
    <h2>Films</h2>
</div>

<?php

$color_cards= array(
    array(
    'title'=> 'funny_movies',

    'genere'=>
        'comedy',

    'stars'=>

        array(
            'leading_actor',
            'leading_actress',
            'expendable_due'
        )
),
    );

?>




<div class="container">
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>title</th>
            <th>genere</th>
            <th>stars</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach($color_cards as $bkict){ ?>
        <tr>
            <td><?php echo $bkict['title']; ?></td>
            <td><?php echo $bkict['genere']; ?></td>
            <td><?php foreach ($bkict['stars'] as $id){ ?>

                <ul>
                    <li><?php echo $id; ?></li>
                </ul>

               <?php } ?>
            </td>
        </tr>

        </tbody>
        <?php
        };
        ?>
    </table>
</div>





</body>
</html>