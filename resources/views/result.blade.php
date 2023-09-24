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
    @if (session('status'))
    <div class="card alert alert-success">
        {{ session('status') }}
    </div>
    @endif
    
    <div class="card">
        <div class="card-body">
            @if (!is_null($results))
            <p class="card-text" style="font-size: 14px">Nama Lengkap: <?php echo $results['nama']; ?></p>
            <p class="card-text" style="font-size: 14px">Email: <?php echo $results['email']; ?></p>
            <p class="card-text" style="font-size: 14px">Program Studi:
                <?php
                if ($results['prodi'] == 1) echo 'Sistem Informasi';
                else if ($results['prodi'] == 2) echo 'Teknik Biomedik';
                else if ($results['prodi'] == 3) echo 'Teknik Elektro';
                else if ($results['prodi'] == 4) echo 'Teknik Informatika';
                else if ($results['prodi'] == 5) echo 'Teknik Komputer';
                else if ($results['prodi'] == 6) echo 'Teknologi Inforamsi';
                ?></p>
            <p class="card-text" style="font-size: 14px">Nilai Dasar Pemrograman: <?php echo $results['double']; ?></p>
            <p class="card-text" style="font-size: 14px">Foto: </p>
            <img class="img-fluid" src="{{ url('img').'/'.$results['foto'] }}">
            @else
            <p>Mohon isi form terlebih dahulu.</p>
            @endif
        </div>
    </div>
    
    <div class="back">
        <button class="btn btn-danger"><a href="/form" style="text-decoration: none; color: white;">Back</a></button>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" `integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>

</html>