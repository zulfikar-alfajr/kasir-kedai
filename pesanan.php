<h1><b>Daftar Pesanan</b></h1><hr>
<table width="700" border="0" cellpadding="2" cellspacing="1" >

  <tr>
    <td colspan="2"><a href="?page=pesanan_tambah"target="_self"><img src="images/add.png"> Tambah Pesanan</a></td>
  </tr>

  <tr>
    <td colspan="2"><table width="100%" class="daftar_tabel" border="0" cellspacing="0" cellpadding="2">
      <tr>
        <th><b>ID Order</b></th>
		<th><b>No Meja</b></th>
        <th><b>Tanggal</b></th>
        <th><b>ID User</b> </th>
		<th><b>Keterangan</b> </th>
		<th><b>Status</b> </th>
		<th><b>Opsi</b> </th>

      </tr>
	  </td>
      <?php
	$ordersSql = "SELECT * from orders";
	$ordersQry = mysqli_query($koneksi, $ordersSql)  or die ("Query Pesanan salah : ".mysql_error());
	$nomor  = 0; 
	 foreach($ordersQry as $ordersRow) {
	$nomor++;

	?>
      <tr>
 
		<td><?php echo $ordersRow['id_order']; ?></td>
        <td><?php echo $ordersRow['no_meja']; ?></td>
		<td><?php echo $ordersRow['tanggal']; ?></td>
		<td><?php echo $ordersRow['id_user']; ?></td>
		<td><?php echo $ordersRow['keterangan']; ?></td>
		<td><?php 
          if ($ordersRow['status_order']=='Belum Dibayar') {
            echo "<p style='color:red;'><b>Belum Dibayar<b></p>";
          } else {
            echo "<p class='btn btn-success btn-sm'>Dibayar</p>";
          }
          ?></td>
		 <td align="center"><a href="?page=pesanan_hapus&amp;Kode=<?php echo $ordersRow['id_order']; ?>" target="_self" alt="Delete Data" onclick="return confirm('ANDA YAKIN AKAN MENGHAPUS DATA PENTING INI ... ?')"><img src="images/delete.png"></a><br>&nbsp;&nbsp;&nbsp;<a href="?page=pesanan_edit&amp;kode=<?php echo $ordersRow['id_order']; ?>" target="_self" ><img src="images/edit.png"></a>
     </td>
		   </tr>
      <?php } ?>
    </table></td>
  </tr>
  <tr>

	</td>
  </tr>
</table>
