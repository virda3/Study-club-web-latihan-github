<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan</title>
</head>
<body>
    <?php
    //deklarasi variabel
    $angka = 24;
    ?>
    
    <!--latihan if else blade-->
    @if ($angka == 1)
    angka 1
    @elseif($angka >1)
    banyak angka 
    @else
    angka minus
    @endif

</body>
</html>