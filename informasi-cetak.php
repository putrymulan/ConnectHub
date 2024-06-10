<?php
include('koneksi.php');
require_once("dompdf/autoload.inc.php");

use Dompdf\Dompdf;

$dompdf = new Dompdf();
$query = mysqli_query($koneksi, "SELECT * FROM tb_informasi");
$html = '<center><h3>Data Transaksi</h3></center><hr/><br>';
$html .= '<table border="1" width="100%">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Kategori</th>
                <th>Harga</th>
                <th>Seat</th>
                <th>Status</th>
                <th>Nomor Telp</th>
            </tr>';
$no = 1;
while ($informasi = mysqli_fetch_array($query)) {
    $html .= "<tr>
                <td>" . $no . "</td>
                <td>" . $informasi['nama'] . "</td>
                <td>" . $informasi['kategori'] . "</td>
                <td>Rp. " . number_format($informasi['harga']) . "</td>
                <td>" . $informasi['seat'] . "</td>
                <td>" . $informasi['status'] . "</td>
                <td>" . $informasi['nomor'] . "</td>
            </tr>";
    $no++;
}
$html .= "</table>";
$dompdf->loadHtml($html);
// Setting ukuran dan orientasi kertas
$dompdf->setPaper('A4', 'potrait');
// Rendering dari HTML Ke PDF
$dompdf->render();
// Melakukan output file Pdf
$dompdf->stream('laporan-transaksi.pdf');
?>
