<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Demo</title>
</head>

<body>

    <?php
    $books = [
        [
            'name' => 'Do Androids Dream of Electric Sheep',
            'author' => 'Philip K. Dick',
            'purchaseUrl' => 'http://example.com'
        ],

        [
            'name' => 'The Langoliers',
            'author' => 'Andy Weir',
            'purchaseUrl' => 'http://example.com',
        ],

        [
            'name' => 'Hail Mary',
            'author' => 'Philip K. Dick',
            'purchaseUrl' => 'http://example.com'
        ]
    ];
    ?>
    <ul>
        <?php foreach ($books as $book) : ?>
            <li>
                <a href="<?= $book['purchaseUrl']; ?>">
                    <?= $book['name']; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>