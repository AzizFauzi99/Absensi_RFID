<?php

    error_reporting(0);
    include "koneksi.php";

    //baca isi tabel tmprfid
    $sql = mysqli_query($konek, "SELECT * FROM tmprfid");
    $data = mysqli_fetch_array($sql);


    //baca nokartu
    $nokartu = $data['nokartu'];

?>

<div class="form-floating mb-3 mt-5">
    <input type="text" name="nokartu" id="nokartu" placeholder="Tempelkan kartu RFID anda" class="form-control" value="<?php echo $nokartu; ?>">
    <label for="nokartu">Tempelkan Kartu RFID Anda</label> 
</div>