<div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Daftar Pengguna</h4>
                    <p class="card-description">
                    <!-- Add class <code>.table</code> -->
                    <?php if ($_SESSION['level'] == 'Admin') { ?>
                            <a href ="?page=tambahuser" class="btn btn-primary btn-icon-split btn-sm">Tambah User </a>
                            <?php } ?>
                    </p>

                    <div class="table-responsive">
                        <table class="table" id="dataTable" width="100%" cellspacing="0">
                        <tr>
                                        <th>No</th>
                                        <th>Username</th>
                                        <th>Password</th>
                                        <th>Level</th>
                                        <?php if ($_SESSION['level'] == "Admin") { ?>
                                        <th>Pilihan</th>
                                        <?php } ?>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                    $no = 1;
                                    $sql = $koneksi->query("SELECT * FROM user");
                                    while ($data= $sql->fetch_assoc()) {
                                        
                                ?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $data['username']; ?></td>
                                    <td><?php echo $data['password']; ?></td>
                                    <td><?php echo $data['level']; ?></td>
                                    <?php if ($_SESSION['level'] == "Admin") { ?>
                                    <td><a type='button' href='?page=edituser&id=<?= $data['id']; ?>' class='btn btn-sm btn-primary'>Edit</a>/<a type='button' href='?page=hapususer&id=<?= $data['id']; ?>' class='btn btn-sm btn-danger'>Delete</a></td>
                                    <?php } ?>
                                </tr>
                                <?php } ?>
                                    
                                </td>
                            </tr>
                        
                        
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>