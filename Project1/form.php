<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Form Menghitung BMI</title>
</head>
<body><br>
    <div class="container">
        <h1 class="text-center">Menghitung BMI</h1><br>
        <form method="POST" action="hitung.php">
        <div class="form-group row">
            <label for="Tanggal" class="col-4 col-form-label">Tanggal Periksa</label> 
            <div class="col-8">
            <input id="Tanggal" name="Tanggal" type="date" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="nama" class="col-4 col-form-label">Nama Pasien</label> 
            <div class="col-8">
            <input id="nama" name="nama" placeholder="Nama Lengkap Pasien" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-4">Gender</label> 
            <div class="col-8">
            <div class="custom-control custom-radio custom-control-inline">
                <input name="gender" id="gender_0" type="radio" class="custom-control-input" value="L"> 
                <label for="gender_0" class="custom-control-label">Laki-Laki</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input name="gender" id="gender_1" type="radio" class="custom-control-input" value="p"> 
                <label for="gender_1" class="custom-control-label">Perempuan</label>
            </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="berat" class="col-4 col-form-label">Berat Badan (kg)</label> 
            <div class="col-8">
            <input id="berat" name="berat" placeholder="Berat Badan (kg)" type="text" class="form-control">
            </div>
        </div> 
        <div class="form-group row">
            <label for="tinggi" class="col-4 col-form-label">Tinggi Badan (cm)</label> 
            <div class="col-8">
            <input id="tinggi" name="tinggi" placeholder="Tinggi Badan (cm)" type="text" class="form-control">
            </div>
        </div> 
        <div class="form-group row">
            <div class="offset-4 col-8">
            <button name="submit" type="submit" class="btn btn-primary">Hitung</button>
            </div>
        </div>
        </form>
    </div>
</body>
</html>