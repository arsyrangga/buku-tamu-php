<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <style>
        body {
            background-image: url("https://picsum.photos/seed/8621/1200");
            background-size: cover;
        }

        img {
            transition-duration: 1s;
            cursor: pointer;
        }

        img:hover {
            transform: rotate(2160deg);
            /* opacity: .8; */
        }
    </style>
</head>

<body>
    <main class="container pb-5">

        <div class="d-flex flex-column align-items-center w-100 mt-5">
            <div class="col-md-5 shadow py-5 px-5 rounded bg-light">
                <h3 class="text-center mt-4"> Buku Tamu</h3>

                <div class="d-flex">
                    <p>Nama : </p>
                    <p><?php
                        $nama = $_POST['name'];
                        echo " $nama";
                        ?></p>
                </div>

                <div class="d-flex">
                    <p>Email : </p>
                    <p><?php
                        $email = $_POST['email'];
                        echo " $email";
                        ?></p>
                </div>

                <div class="d-flex">
                    <p>Komentar : </p>
                    <p><?php
                        $komentar = $_POST['komentar'];
                        echo "$komentar";
                        ?></p>
                </div>





                <a href="./forminputkomentar.php"><button class="btn btn-primary rounded w-100 mt-4">Kembali</button></a>


            </div>

        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>