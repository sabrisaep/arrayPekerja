<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pekerja</title>
</head>

<body>

    <?php
    $pekerja = [
        'A001' => [
            'nama' => 'Ali',
            'notel' => '010-0000000',
        ],
        'A002' => [
            'nama' => 'Abu',
            'notel' => '020-0000000',
        ],
        'A003' => [
            'nama' => 'Din',
            'notel' => '030-0000000',
        ],
    ];
    /*
    $pekerja = [
        'A001' => [
            'nama' => 'Nur Aisyah',
            'notel' => '0125413237',
        ],
        'A002' => [
            'nama' => 'Nurul Ain',
            'notel' => '0173344654',
        ],
        'A003' => [
            'nama' => 'Nur Damia',
            'notel' => '0186674329',
        ],
    ];
*/
    ?>

    <table>
        <tr>
            <th>Bil</th>
            <th>No.Staf</th>
            <th>Nama</th>
            <th>No.Tel</th>
        </tr>
        <?php
        $bil = 1;
        foreach ($pekerja as $staf) {
        ?>
            <tr>
                <td><?php echo $bil++; ?></td>
                <td><?php echo $staf['nama']; ?></td>
                <td></td>
                <td></td>
            </tr>
        <?php
        }
        ?>
    </table>

</body>

</html>