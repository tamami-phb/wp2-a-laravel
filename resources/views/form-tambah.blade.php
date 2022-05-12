<!DOCTYPE html>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </head>
    <body>
<div class="container">      
<form action="/tambah" method="POST">
    @csrf
    <div class="form-floating mb-3">
        <input type="text" id="nim" name="nim" class="form-control" placeholder="NIM">
        <label for="nim" >NIM</label>
    </div>

    <div class="form-floating mb-3">
        <input type="text" id="nama" name="nama" class="form-control" placeholder="NAMA">
        <label for="nama">NAMA</label>
    </div>

    <div class="form-floating mb-3">
        <input type="text" id="kelas" name="kelas" class="form-control" placeholder="KELAS">
        <label for="kelas">KELAS</label>
    </div>

    <input type="submit" value="Simpan" class="btn btn-primary">
</form>
</div>

    </body>
</html>