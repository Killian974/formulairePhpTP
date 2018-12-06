<?php

// début_html
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<table class="table">
    <thead>
    <tr>
        <th>Identifiant</th>
        <th>Prénom</th>
        <th>Nom</th>
        <th>Adresse Email</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($clients as $client): ?>
    <tr>
        <td><?= $client->getId() ?></td>
        <td><?= $client->getFirstname() ?></td>
        <td><?= $client->getLastname() ?></td>
    </tr>
    <?php endforeach; ?>

    
    </tbody>
</table>
</body>
</html>


