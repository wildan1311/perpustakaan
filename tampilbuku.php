
<?php
  $id = $_POST['id_buku'];
  @include 'koneksi.php';
  $sql = "select * from buku where id_buku='$id'";
  $row = mysqli_fetch_all(mysqli_query($koneksi, $sql),MYSQLI_ASSOC);
  foreach($row as $row){
    echo"<tr>
    <td>
      <div class='d-flex px-2 py-1'>
        <div class='d-flex flex-column justify-content-center'>
          <h6 class='mb-0 text-sm'>".$row['id_buku']."</h6>
        </div>
      </div>
    </td>
    <td>
      <p class='text-xs font-weight-bold mb-0'>".$row['judul']."</p>
    </td>
    <td>
      <p class='text-xs font-weight-bold mb-0'>".$row['pengarang']."</p>
    </td>
    <td class='align-middle text-center'>
      <span class='text-secondary text-xs font-weight-bold'>".$row['penerbit']."</span>
    </td>
    <td class='align-middle'>
  <a href='javascript:;' class='text-secondary font-weight-bold text-xs' data-toggle='tooltip' data-original-title='Edit user'>
    Edit
  </a>
</td>
  </tr>";
  }
?>