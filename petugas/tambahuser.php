<div class="row well">
        <div class="col-md-4">
            <div class="card well">
                <div class="card-header">
                    <h3 class="">Tambah User</h3>
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        <div class="mb-3 mt-3">
                            <label for="nama" class="form-label">Nama:</label>
                            <input type="text" class="form-control" id="nama" placeholder="Enter Name" name="username">
                        </div>
                        <div class="mb-3">
                            <label for="pwd" class="form-label">Password:</label>
                            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
                        </div>
                        <div class="mb-3">
                            <label for="level" class="form-label">level<spam style="color: red;">*</span></label>
                            <select class="form-control" name="level" id="level">
                                    <option value="">Pilih Level</option>
                                    <option value="Petugas">Petugas</option>
                                    <option value="Admin">Admin</option>    
                              
                                </select>                    
                        </div>

                        <button type="submit" name="submit" class="btn btn-primary">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
</div>
        
<?php
    include_once("../conn/koneksi.php");
    if(isset($_POST['submit'])) {
        $id = $_POST['id'];
        $name = $_POST['username'];
        $password = md5($_POST['password']);
        $level = $_POST['level']

        $result = mysqli_query($koneksi, "INSERT INTO user (id, username, password, level) VALUES('$id','$name','$password','$level')");

        echo "User added successfully. <a href='index.php?page=user'>View Users</a>";
        echo"<script>alert('Berhasil menambahkan data')</script>";
    }


?>
