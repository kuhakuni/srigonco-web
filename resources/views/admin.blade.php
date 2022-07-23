<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Login Admin</title>
    <style>
        body {
            background-color: #F4F8F0;
            overflow-y: hidden;
        }
p{
  font-size: 18px;
  color: #73A9AD;
}
        .card h3 {
            color: #6F6666;
            font-weight: 600;
            font-size: 32px;
        }

        .card {
            border-radius: 20px;
            border: none;
            box-shadow: 8px 8px 8px rgba(0, 0, 0, 0.25);
        }

        input[type="text"],
        input[type="password"] {
            border: 3px solid #E5E5E5;
            border-radius: 10px;
        }

        input[type="checkbox"] {
          border: 2px solid #E5E5E5;
          border-radius: 2px;
        }
        input[type="button"] {
          border-radius: 50px;
          background-color: #73A9AD;
          border:none;
          color: #FFFFFF;
          font-size: 24px;
        }
    </style>
</head>

<body>
<p class="text-center">Designed by KKN FILKOM UB 2022</p>
    <div class="card col-8 col-lg-4  p-4 mx-auto">
        <img src="" alt="">
        <h3 class="text-center">Admin Srigonco</h3>
        <form class="p-4" action="" method="post">
            <input class="col-12 p-2 mb-3" type="text" name="username" placeholder="Nama Pengguna">
            <input class="col-12 p-2 mb-3" type="password" name="pass" placeholder="Kata Sandi">
            <label class="">
                <input type="checkbox" name="remember">
                Ingat Saya
            </label>
            <input class="col-12 py-2 mt-3" type="button" value="Masuk">
        </form>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>