<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Orbitron:wght@400;500;600&family=Tapestry&display=swap" rel="stylesheet">
    <title>EnkripsiChiper</title>
</head>

<body>


    <div class="">
        <div id="judul" class=" border-bottom border-danger p-3 border-5 text-center mb-4">
            <h1> Aplikasi Kriptografi Klasik - Monoalphabetic chiper</h1>
        </div>

        <div class=" container text-start p-3 mb-5">
            <h1> Kelompok 9</h1>
            <h5> Adhitya Januarizky_17200106</h5>
            <h5> Alamul Huda_17200019</h5>
            <h5> Jamalludin Kahar_17190491</h5>
            <h5> Febrialdo Haudi_17190623</h5>
            <h5> Fernando Montang_17190127</h5>
        </div>

        <div class="row m-1 justify-content-center">
            <div class="col">
                <h4>Enkripsi</h4>
                <p>Enkripsi adalah proses mengamankan suatu informasi dengan membuat informasi tersebut tidak dapat dibaca tanpa bantuan pengetahuan khusus. Enkripsi pada aplikasi ini adalah Kombinasi Chipper Key dan Caesar Chipper. <br></p>
                <form action="" method="post">
                    <div class="mb-3">
                        <label class="form-label">Kata Kunci</label>
                        <input type="text" class="form-control" name="enkunci" id="enkunci" placeholder="Masukkan kata Kunci...">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Pesan</label>
                        <textarea class="form-control" placeholder="Hasil Pesan..." id="enpesan" name="enpesan" rows="3">
                        <?php
                        // if (isset($_POST['enkripsi'])) {
                        //     $text = $_POST['enkunci'];
                        //     $rot13 = str_rot13($text);
                        //     $hasen = $rot13 . PHP_EOL;
                        //     printf($hasen);
                        // } 
                        ?> 
                        </textarea>
                        <button id="enkripsi" name="enkripsi" type="submit" class="btn btn-rounded btn-outline-secondary mt-3">Enkripsi Pesan</button>
                    </div>
                </form>
                <div id="hasen">

                </div>

            </div>
            <div class="col">
                <h4>Dekripsi</h4>
                <p>Deskripsi adalah pengolahan data menjadi sesuatu yang dapat diutarakan secara jelas dan tepat dengan tujuan dimengerti oleh orang yang tidak langsung mengalaminya sendiri. Enkripsi pada aplikasi ini adalah Kombinasi Chipper Key dan Caesar Chipper</p>
                <form action="" method="post">
                    <div class="mb-3">
                        <label class="form-label">Kata Kunci</label>
                        <input type="text" class="form-control" name="dekunci" id="dekunci" placeholder="Masukkan kata Kunci...">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Pesan</label>
                        <textarea class="form-control" placeholder="Hasil Pesan..." name="depesan" id="depesan" rows="3">

                        <?php
                        // if (isset($_POST['dekripsi'])) {
                        //     $text = $_POST['dekunci'];

                        //     $des = str_rot13($text);
                        //     echo $des;
                        // } 
                        ?>

                        </textarea>
                        <button id="dekripsi" name="dekripsi" type="submit" class="btn btn-rounded btn-outline-secondary mt-3">Enkripsi Pesan</button>
                    </div>
                </form>
            </div>
        </div>


        <div id="has" class="text-center">
            <?php
            include 'chiper.php';
            //include 'chiper2.php';



            if (isset($_POST['enkripsi'])) {
                $kunci = $_POST['enkunci'];
                $pesan = $_POST['enpesan'];
                $chiperkeyText = enkripsi($pesan, $kunci);
                $chiperkey = Encipher($chiperkeyText, 3);
                echo $chiperkey;

                // echo $kunci; 
                // echo $plainText; 
            } else {
                echo "";
            }
            if (isset($_POST['dekripsi'])) {
                $dekunci = $_POST['dekunci'];
                $depesan = $_POST['depesan'];
                $dechiperkeyText = dekripsi($depesan, $dekunci);
                $dechiperkey = encipher($dechiperkeyText, 3);
                echo $dechiperkey;
            }

            ?>
        </div>



    </div>







    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->






    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script type="text/javascript" src="main.js"></script>
</body>

</html>