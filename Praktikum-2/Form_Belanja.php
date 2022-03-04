<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
        <h2>Belanja Online</h2><br>
        <form methode="POST" action="Form_Belanja.php">
        <div class="form-group row">
            <label for="customer" class="col-4 col-form-label">Customer</label> 
            <div class="col-8">
            <input id="customer" name="customer" placeholder="Nama Customer" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-4">Pilih Produk</label> 
            <div class="col-8">
            <div class="custom-control custom-radio custom-control-inline">
                <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV"> 
                <label for="produk_0" class="custom-control-label">TV</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="KULKAS"> 
                <label for="produk_1" class="custom-control-label">KULKAS</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="MESIN CUCI"> 
                <label for="produk_2" class="custom-control-label">MESIN CUCI</label>
            </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
            <div class="col-8">
            <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
            </div>
        </div> 
        <div class="form-group row">
            <div class="offset-4 col-8">
            <input name="proses" value="proses" type="submit" class="btn btn-primary">
            </div>
        </div>
        </form>
        <table class="table">
            <thead >
                <tr class="bg-primary text-white">
                <th >Daftar Harga</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td>TV : 4.200.000</td>
                </tr>
                <tr>
                <td>KULKAS : 3.100.000</td>
                </tr>
                <tr>
                <td>MESIN CUCI : 3.800.000</td>
                </tr>
            </tbody>
        </table>
        <?php
        $_customer = $_GET['customer'];
        $_produk = $_GET['produk'];
        $_jumlah = $_GET['jumlah'];
        if ($_produk == "TV"){
            $total = 4200000*$_jumlah;
        }elseif($_produk == "KULKAS"){
            $total = 3100000*$_jumlah;
        }elseif($_produk == "MESIN CUCI"){
            $total = 3800000*$_jumlah;
        }

        echo 'Nama Customer : '.$_customer;
        echo '<br/>Produk Pilihan : '.$_produk;
        echo '<br/>Jumlah Beli : '.$_jumlah;
        echo '<br/>Total Barang : Rp.'.$total;
        ?>
    </div>
</body>
</html>
