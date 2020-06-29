<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td {
            border: 1px solid black;
        }
    </style>
</head>

<body>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Cost</th>
                <th>Direction</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $product = [
                ["iPhone", "$1000", "America"],
                ["BPhone", "$400", "VietNam"],
                ["Xiaomi", "$600", "China"]
            ];
            ?>

            <?php
            foreach ($product as $key => $items) { ?>
                <tr>
                    <?php foreach ($items as $key => $value) { ?>
                        <td>
                            <?php
                            echo $value;
                            ?>
                        </td>
                    <?php } ?>
                </tr>
            <?php }
            ?>

        </tbody>
    </table>

</body>

</html>