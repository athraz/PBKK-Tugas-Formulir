<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/form.css">
</head>

<body>
    <div class="card" style="padding: 0px">
        <img src="header/header.jpg" alt="Card image cap" style="height:120px; border-radius: 5px;">
    </div>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title" style="font-size: 24px; font-weight: 700">Formulir Pendaftaran Grup Belajar Pemrograman 2023</h5>
            <p class="card-text" style="font-size: 12px">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras egestas neque eu venenatis suscipit. Suspendisse tincidunt non ligula sit amet ullamcorper. Etiam sit amet orci non elit placerat hendrerit. Sed.</p>
        </div>
    </div>

    <form action="/form" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card">
            <div class="form-group">
                <label>Nama Lengkap</label>
                <input class="form-control" name="nama" placeholder="Masukkan Nama Lengkap">
                @error('nama')
                <div class="alert alert-danger"> {{ $message }} </div>
                @enderror
            </div>
        </div>
        <div class="card">
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email" placeholder="Masukkan Email">
                @error('email')
                <div class="alert alert-danger"> {{ $message }} </div>
                @enderror
            </div>
        </div>
        <div class="card">
            <div class="form-group">
                <label>Program Studi</label>
                <select name="prodi" class="form-control">
                    <option selected value=0>-</option>
                    <option value=1>Sistem Informasi</option>
                    <option value=2>Teknik Biomedik</option>
                    <option value=3>Teknik Elektro</option>
                    <option value=4>Teknik Informatika</option>
                    <option value=5>Teknik Komputer</option>
                    <option value=6>Teknologi Informasi</option>
                </select>
                @error('prodi')
                <div class="alert alert-danger"> {{ $message }} </div>
                @enderror
            </div>
        </div>
        <div class="card">
            <div class="form-group">
                <label>Nilai Dasar Pemrograman</label>
                <input class="form-control" type="text" name="double" placeholder="Masukkan Nilai Dasar Pemrograman">
                @error('double')
                <div class="alert alert-danger"> {{ $message }} </div>
                @enderror
            </div>
        </div>
        <div class="card">
            <div class="form-group">
                <label>Foto</label>
                <input class="form-control" type="file" name="foto">
                @error('foto')
                <div class="alert alert-danger"> {{ $message }} </div>
                @enderror
            </div>
        </div>
        <div class="submit">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" `integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>

</html>