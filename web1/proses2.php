<?php 

$total_harga = $_POST['total_harga'];
$uang_bayar = $_POST['uang_bayar'];

if($total_harga>$uang_bayar){
	echo "<script>alert('maaf uang bayar anda kurang')</script>";
	echo "script>window.history.back()</script>";
}elseif ($total_harga<$uang_bayar){
	$uangkembali = number_format($uang_bayar - $total_harga,0,",",".");
	echo "<script>alert('terimakasih, uang kembali anda sebesar Rp.$uangkembali');</script>";
	echo "<script>window.location.assign('formpenjualanbarang.php')</script>";
}else{
	echo "<script>alert('terimakasih');</sript>";
	echo "<script>window.location.assign('formpenjualanbarang.php')</script>";
}
// $nama_barang = $_POST['nama_barang'];
// $harga_barang = $_POST['harga_barang'];
// $jumlah_barang = $_POST['jumlah_barang'];
// $total_harga = $harga_barang*$jumlah_barang;

// echo "Nama barang: $nama_barang <br>";
// echo "Harga barang: $harga_barang <br>";
// echo "Jumlah barang: $jumlah_barang <br>";
// echo "Total harga: $total_harga <br>";

// echo "Uang bayar:<form><input type='number' name='uang_bayar'>
// </form> <br>";
// echo "<form action='proses2.php' method='post'><button type='submit' class='btn btn-primary btn-lg' name='bayar'>Bayar</button></form>";
?>