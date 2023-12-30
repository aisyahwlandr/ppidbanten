<?php
include '../koneksi.php';
require '../vendor/autoload.php';
// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();
$html = '
<h2>Laporan Berita Tahun Ini</h2>
<table border = 1">
<tr>
    <th>No</th>
    <th>Judul</th>
    <th>Kategori</th>
    <th>Tanggal</th>
</tr>'; ?>
<?php
$no = 0;
$hasil = mysqli_query($db, "SELECT * FROM news");

while ($row = mysqli_fetch_object($hasil)) {
    $no++;

$html.='
    <tr>
        <td>'. $no .'</td>
        <td>'. $row->title .'</td>
        <td>'. $row->category_id .'</td>
        <td>'. $row->publish_at .'</td>
    </tr>';
}

$html .= '</table>';

$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream('berita-tahun-ini.pdf');

?>