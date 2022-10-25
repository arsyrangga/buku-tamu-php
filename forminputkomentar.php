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

        <form action="./tampilkomentar.php" method="POST" class="d-flex flex-column align-items-center w-100 mt-2">
            <div class="col-md-5 shadow py-5 px-5 rounded bg-light">
                <h3 class="text-center mt-4"> Buku Tamu</h3>
                <p>Komentar dan saran anda sangat kami butuhkan untuk meningkatkan kualitas situs kamu</p>


                <div class="form-group mt-5">
                    <label for="name">Nama</label>
                    <input id="name" name="name" type="text" class="form-control mt-2" type="number">
                </div>
                <div class="form-group mt-2">
                    <label for="email">Email</label>
                    <input id="email" name="email" type="text" id="" class="form-control mt-2" type="email">
                </div>
                <div class="form-group mt-2">
                    <label for="komentar">Komentar</label>
                    <textarea id="komentar" name="komentar" type="text" class="form-control mt-2" style="resize: none;"></textarea>
                </div>
                <button class="btn btn-primary rounded w-100 mt-4">Kirim</button>


            </div>

        </form>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>