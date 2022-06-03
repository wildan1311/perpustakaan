<div class="table-responsive p-0 mb-3 ms-5 me-5">
                  <table class="table align-items-center mb-0">
                    <thead>
                      <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 text-center">Id Buku</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Judul Buku</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Pengarang</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Penerbit</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        @include 'koneksi.php';
                        
                        if(isset($_GET['page'])){
                          $page = $_GET['page'];
                        }else{
                          $page = 1;
                        }

                        $startfrom = ($page-1) * 10;
                        $sql = "select * from buku";
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
                        $banyak_page = "select count(transaksi.id_buku) as total from transaksi";
                        $result = mysqli_query($koneksi, $banyak_page);
                        $baris = mysqli_fetch_assoc($result);
                        $total_pages = ceil($baris['total']/10); // calculate total pages with results 
                        echo "<tr>
                                <td colspan='5'>
                        ";
                        for ($i=1; $i<=$total_pages; $i++) {  // print links for all pages
                                    echo "<a href='tables.php?page=".$i."'";
                                    if ($i==$page)  echo "class='curPage'";
                                    echo ">$i </a> ";
                        };
                        echo "
                                </td>
                                </tr>
                        ";
                      ?>
                      
                      
                      </tbody>
                    </table>
                  </div>