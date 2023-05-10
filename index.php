<?php 
    include('class.php');

    
    $product1 = new CDMusic("CDMUSIC-1",20000,20,"POP","ARTIST-1");
    $product2 = new CDMusic("CDMUSIC-2",40000,10,"Metal","ARTIST-2");
    $product3 = new CDRack("RACK-1",100000,20,100,"MODEL-1");
    $product4 = new CDRack("RACK-2",50000,30,50,"MODEL-2");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</head>

<body>
    <p class="h2">CD Music</p>
    <br>
    <table class="table" style="text-align: center;">
        <thead class="table-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Produk</th>
                <th scope="col">Harga</th>
                <th scope="col">Genre</th>
                <th scope="col">Artist</th>
            </tr>
        </thead>
        <tbody class="table-light">
            <tr>
                <th scope="row">1</th>
                <td><?= $product1->getName(); ?></td>
                <td><?= $product1->getPrice(); ?></td>
                <td><?= $product1->getGenre();?></td>
                <td><?= $product1->getArtist(); ?></td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td><?= $product2->getName(); ?></td>
                <td><?= $product2->getPrice(); ?></td>
                <td><?= $product2->getGenre();?></td>
                <td><?= $product2->getArtist(); ?></td>
            </tr>
        </tbody>
    </table>

    <br><br>

    <p class="h2">CD Rack</p>
    <br>
    <table class="table" style="text-align: center;">
        <thead class="table-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Produk</th>
                <th scope="col">Harga</th>
                <th scope="col">Kapasitas</th>
                <th scope="col">Model</th>
            </tr>
        </thead>
        <tbody class="table-light">
            <tr>
                <th scope="row">3</th>
                <td><?= $product3->getName(); ?></td>
                <td><?= $product3->getPrice(); ?></td>
                <td><?= $product3->getCapacity();?></td>
                <td><?= $product3->getModel(); ?></td>
            </tr>
            <tr>
                <th scope="row">4</th>
                <td><?= $product4->getName(); ?></td>
                <td><?= $product4->getPrice(); ?></td>
                <td><?= $product4->getCapacity();?></td>
                <td><?= $product4->getModel(); ?></td>
            </tr>
        </tbody>
    </table>
</body>

</html>