                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Karyawan</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <button id="bt-add" class="btn btn-danger btn-block text-center btn-icon-split align-middle" style="height: 100%;">
                                <span class="text-xl font-weight-bold text-white text-uppercase" style="display: flex; justify-content: center; align-items: center;">
                                    Tambah Cuti
                                </span>
                            </button>
                        </div>

                        <div class="col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xl font-weight-bold text-primary text-uppercase mb-1">
                                                Total Cuti
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total?></div>
                                        </div>
                                        <div class="col-auto">
                                            <a href="javascript:void(0)" id="bt-total" class="text-primary-300 text-md font-wight" data-target="md-total" data-toggle="modal">
                                                <u>Lihat Detail</u>
                                                <i class="fas fa-fas fa-chevron-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xl font-weight-bold text-primary text-uppercase mb-1">
                                                Pernah Cuti
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $c_pernah?></div>
                                        </div>
                                        <div class="col-auto">
                                            <a href="javascript:void(0)" id="bt-cuti1" class="text-primary-300 text-md font-wight" data-target="md-cuti1" data-toggle="modal">
                                                <u>Lihat Detail</u>
                                                <i class="fas fa-fas fa-chevron-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xl font-weight-bold text-primary text-uppercase mb-1">
                                                Pernah Cuti > 1 Kali
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $c_lebih1?></div>
                                        </div>
                                        <div class="col-auto">
                                            <a href="javascript:void(0)" id="bt-cuti2" class="text-primary-300 text-md font-wight" data-target="md-cuti2" data-toggle="modal">
                                                <u>Lihat Detail</u>
                                                <i class="fas fa-fas fa-chevron-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xl font-weight-bold text-primary text-uppercase mb-1">
                                                Sisa Cuti Karyawan
                                            </div>
                                            <h5 class="mb-0" style="font-size: 14px;">*) dari default cuti 12 Hari</h5>
                                        </div>
                                        <div class="col-auto">
                                            <a href="javascript:void(0)" id="bt-sisa" class="text-primary-300 text-md font-wight" data-target="md-sisa" data-toggle="modal">
                                                <u>Lihat Detail</u>
                                                <i class="fas fa-fas fa-chevron-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="md-add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Cuti</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    Nomor Induk
                    <select name="nomor_induk" id="" class="form-control">
                        <?php
                            foreach($karyawan as $r)
                                echo '<option value="'.$r['nomor_induk'].'" data-nama="'.$r['nama_karyawan'].'">'.$r['nomor_induk'].'</option>';
                        ?>
                    </select>
                    Nama Karyawan
                    <input type="text" name="nama_karyawan" class="form-control" id="" disabled>
                    Tanggal Cuti
                    <input type="date" name="tanggal_mulai" id="" class="form-control" max="2022-12-31" min="2022-01-01" require>
                    Lama Hari
                    <input type="number" name="lama_hari" id="" class="form-control" require>
                    Keterangan
                    <textarea name="keterangan" class="form-control" id="" cols="30" rows="10"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="bt-save">Save</button>
            </div>
        </div>
    </div>
    </div>

    <div class="modal fade" id="md-total" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Detail Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <table class="table table-responsive">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nomor Induk</th>
                                            <th>Nama</th>
                                            <th>Tanggal Mulai</th>
                                            <th>Lama Hari</th>
                                            <th>Keterangan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            foreach($total_d as $key=>$r){
                                                echo '<tr>';
                                                    echo '<td>'.($key+1).'</td>';
                                                    echo '<td>'.$r['nomor_induk'].'</td>';
                                                    echo '<td>'.$r['nama_karyawan'].'</td>';
                                                    echo '<td>'.$r['tanggal_mulai'].'</td>';
                                                    echo '<td>'.$r['lama_hari'].'</td>';
                                                    echo '<td>'.$r['keterangan'].'</td>';
                                                    echo '<td>
                                                        <div class="dropdown no-arrow mb-4">
                                                            <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                Aksi
                                                            </button>
                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                <button class="dropdown-item bt-del" data-izin="'.$r['id_jenis_izin'].'" href="#">Hapus</button>
                                                            </div>
                                                        </div>
                                                    </td>';
                                                echo '</tr>';
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal fade" id="md-cuti1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Detail Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <table class="table table-responsive">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nomor Induk</th>
                                            <th>Nama</th>
                                            <th>Tanggal Mulai</th>
                                            <th>Keterangan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            foreach($pernah as $key=>$r){
                                                echo '<tr>';
                                                    echo '<td>'.($key+1).'</td>';
                                                    echo '<td>'.$r['nomor_induk'].'</td>';
                                                    echo '<td>'.$r['nama_karyawan'].'</td>';
                                                    echo '<td>'.$r['tanggal_mulai'].'</td>';
                                                    echo '<td>'.$r['keterangan'].'</td>';
                                                echo '</tr>';
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="md-cuti2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Detail Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <table class="table table-responsive">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nomor Induk</th>
                                            <th>Nama</th>
                                            <th>Tanggal Mulai</th>
                                            <th>Keterangan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            foreach($lebih1 as $key=>$r){
                                                echo '<tr>';
                                                    echo '<td>'.($key+1).'</td>';
                                                    echo '<td>'.$r['nomor_induk'].'</td>';
                                                    echo '<td>'.$r['nama_karyawan'].'</td>';
                                                    echo '<td>'.$r['tanggal_mulai'].'</td>';
                                                    echo '<td>'.$r['keterangan'].'</td>';
                                                echo '</tr>';
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="md-sisa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Detail Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <table class="table table-responsive">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nomor Induk</th>
                                            <th>Nama</th>
                                            <th>Sisa Cuti(Hari)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            foreach($sisa as $key=>$r){
                                                echo '<tr>';
                                                    echo '<td>'.($key+1).'</td>';
                                                    echo '<td>'.$r['nomor_induk'].'</td>';
                                                    echo '<td>'.$r['nama_karyawan'].'</td>';
                                                    echo '<td>'.$r['sisa_cuti'].'</td>';
                                                echo '</tr>';
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url()?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url()?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url()?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url()?>assets/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?php echo base_url()?>assets/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?php echo base_url()?>assets/js/demo/chart-area-demo.js"></script>
    <script src="<?php echo base_url()?>assets/js/demo/chart-pie-demo.js"></script>

    
    <!-- Page level plugins -->
    <script src="<?php echo base_url()?>assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url()?>assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <script>
        var id_izin = null;

        $(document).ready(function(){
            $('#bt-add').click(function(){
                $('#md-add').modal('show')
            })

            $('#bt-save').click(function(){
                if(confirm('Simpan'))
                    add()
            })

            $('#md-add [name="nomor_induk"]').change(function(){
                let nama = $('#md-add [name="nomor_induk"] option[value="'+$(this).val()+'"]').data('nama')
                $('#md-add [name="nama_karyawan"]').val(nama)
            })

            $('#md-add [name="nomor_induk"]').trigger('change')

            $(document).on('click', '.bt-del', function(){
                id_izin = $(this).data('izin')
                if(confirm('Lanjutkan'))
                    delete_()
            })

            $('#bt-total').click(function(){
                $('#md-total').modal('show')
            })

            $('#bt-cuti1').click(function(){
                $('#md-cuti1').modal('show')
            })

            $('#bt-cuti2').click(function(){
                $('#md-cuti2').modal('show')
            })

            $('#bt-sisa').click(function(){
                $('#md-sisa').modal('show')
            })

        })

        function add(){
            $.ajax({
                url : '<?= site_url('karyawan/add_cuti')?>',
                type : 'post',
                dataType : 'json',
                data : {
                    nomor_induk : $('#md-add [name="nomor_induk"]').val(),
                    tanggal_mulai : $('#md-add [name="tanggal_mulai"]').val(),
                    lama_hari : $('#md-add [name="lama_hari"]').val(),
                    id_jenis_izin : 1,
                    keterangan : $('#md-add [name="keterangan"]').val()
                },
                success : function(data){
                    console.log(data)

                    if(data.status==1){
                        alert('Berhasil');
                        $('#md-add').modal('hide')
                        location.reload();
                    }else{
                        alert('Gagal')
                    }
                }, error : function(q,w,e){
                    alert(e)
                    console.log(q.responseText)
                }
            })
        }

        

        function delete_(){
            $.ajax({
                url : '<?= site_url('karyawan/delete_cuti')?>',
                type : 'post',
                dataType : 'json',
                data : {
                    id_izin : id_izin
                },
                success : function(data){
                    console.log(data)

                    if(data.status==1){
                        alert('Berhasil');
                        location.reload();
                    }else{
                        alert('Gagal')
                    }
                }, error : function(q,w,e){
                    alert(e)
                    console.log(q.responseText)
                }
            })
        }
    </script>

</body>

</html>