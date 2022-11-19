
<?php
  $id = $_POST['id_buku'];
  @include 'koneksi.php';

  $sql = "select * from buku where id_buku = '$id'";
  $row = ociparse($koneksi, $sql);
  ociexecute($row);
  $row = oci_fetch_assoc($row);
  if ($row)
  // print_r($row);
    echo"<tr>
    <td>
      <div class='d-flex px-2 py-1'>
        <div class='d-flex flex-column justify-content-center'>
          <h6 class='mb-0 text-sm'>".$row['ID_BUKU']."</h6>
        </div>
      </div>
    </td>
    <td>
      <p class='text-xs font-weight-bold mb-0'>".$row['JUDUL']."</p>
    </td>
    <td>
      <p class='text-xs font-weight-bold mb-0'>".$row['PENGARANG']."</p>
    </td>
    <td class='align-middle text-center'>
      <span class='text-secondary text-xs font-weight-bold'>".$row['PENERBIT']."</span>
    </td>
    <td class='align-middle'>
  <a href='javascript:;' class='text-secondary font-weight-bold text-xs' data-toggle='tooltip' data-original-title='Edit user'>
    Edit
  </a>
</td>
  </tr>";
?>