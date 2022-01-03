                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Karyawan</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">
                        <div class="col-md-12 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xl font-weight-bold text-primary mb-1">
                                                Karyawan Baru
                                            </div>
                                            
                                        </div>
                                        <div class="col-auto">
                                            <a href="javascript:void(0)" id="bt-new" class="text-primary-300 text-md font-wight" data-target="md-new" data-toggle="modal">
                                                <u>Lihat Detail</u>
                                                <i class="fas fa-fas fa-chevron-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mb-4">
                             <!-- DataTales Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <div class="row">
                                        <div class="col-md-8 col-sm-12">
                                            <h6 class="m-0 font-weight-bold text-primary">Data Karyawan</h6>
                                        </div>
                                        <div class="col-md-4 col-sm-12 text-right">
                                            <div class="input-group">
                                                <button data-target="#md-add" data-toggle="modal" class="btn btn-md btn-success btn-icon-split">
                                                    <span class="icon text-white-50">
                                                        <i class="fas fa-plus"></i>
                                                    </span>
                                                    <span class="text">Tambah Karyawan</span>
                                                </button>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nomor Induk</th>
                                                    <th>Nama</th>
                                                    <th>Alamat</th>
                                                    <th>Tanggal Lahir</th>
                                                    <th>Tanggal Bergabung</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                
                                                ?>
                                            </tbody>
                                        </table>
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
                <h5 class="modal-title" id="exampleModalLabel">Tambah Karyawan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    Nama Karyawan
                    <input type="text" class="form-control" name="nama_karyawan" id="" require>
                    Alamat
                    <textarea name="alamat" id="" cols="30" class="form-control" rows="10" require></textarea>
                    Tanggal Lahir
                    <input type="date" name="tanggal_lahir" id="" class="form-control" require>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="bt-add">Save</button>
            </div>
        </div>
    </div>
    </div>

    <div class="modal fade" id="md-update" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Karyawan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    Nomor Induk
                    <input type="text" class="form-control" name="nomor_induk" id="" disabled>
                    Nama Karyawan
                    <input type="text" class="form-control" name="nama_karyawan" id="" require>
                    Alamat
                    <textarea name="alamat" id="" cols="30" class="form-control" rows="10" require></textarea>
                    Tanggal Lahir
                    <input type="date" name="tanggal_lahir" id="" class="form-control" require>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="bt-update">Save</button>
            </div>
        </div>
    </div>
    </div>

    <div class="modal fade" id="md-new" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Data Karyawan Baru</h5>
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
                                            <th>Nama</th>
                                            <th>Nomor Induk</th>
                                            <th>Alamat</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Tanggal Bergabung</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            foreach($new as $key=>$r){
                                                echo '<tr>';
                                                    echo '<td>'.($key+1).'</td>';
                                                    echo '<td>'.$r['nama_karyawan'].'</td>';
                                                    echo '<td>'.$r['nomor_induk'].'</td>';
                                                    echo '<td>'.$r['alamat'].'</td>';
                                                    echo '<td>'.$r['tanggal_lahir'].'</td>';
                                                    echo '<td>'.$r['registered'].'</td>';
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
                    <button type="button" class="btn btn-primary" id="bt-update">Save</button>
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
        var nomor_induk = null;

        $(document).ready(function(){
            get(null, 'all');

            $('#bt-add').click(function(){
                if(confirm('Simpan'))
                    add()
            })

            $(document).on('click', '.bt-ed', function(){
                nomor_induk = $(this).data('induk')
                let res = get(nomor_induk, 'one')

                $('#md-update').modal('show')

                res = res.data[0]
                $('#md-update [name="nomor_induk"]').val(res.nomor_induk)
                $('#md-update [name="nama_karyawan"]').val(res.nama_karyawan)
                $('#md-update [name="alamat"]').val(res.alamat)
                $('#md-update [name="tanggal_lahir"]').val(res.tanggal_lahir)
            })

            $(document).on('click', '.bt-del', function(){
                nomor_induk = $(this).data('induk')

                if(confirm('Lanjutkan'))
                    delete_()
            })

            $('#bt-update').click(function(){
                if(confirm('Lanjutkan?'))
                    update()
            })

            $('#bt-new').click(function(){
                $('#md-new').modal('show')
            })

        })

        function get(nomor_induk_=null, act='all'){
            let res;
            $.ajax({
                url : '<?= base_url('karyawan/get_data_karyawan')?>',
                type : 'post',
                dataType : 'json',
                async : false,
                data : { nomor_induk : nomor_induk_ }, 
                success : function(data){
                    console.log(data)

                    if(act=='all'){
                        let d = data.data
                        let s = '';
                        d.forEach((item, idx) => {
                            s+='<tr>'
                                s+="<td>"+(idx+1)+'</td>'
                                s+="<td>"+item.nama_karyawan+'</td>'
                                s+="<td>"+item.nomor_induk+'</td>'
                                s+="<td>"+item.alamat+'</td>'
                                s+="<td>"+item.tanggal_lahir+'</td>'
                                s+="<td>"+item.registered+'</td>'
                                s+='<td>'
                                    s+=`<div class="dropdown no-arrow mb-4">
                                            <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Aksi
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <button class="dropdown-item bt-ed" data-induk="`+item.nomor_induk+`" href="#">Edit</button>
                                                <button class="dropdown-item bt-del" data-induk="`+item.nomor_induk+`" href="#">Hapus</button>
                                            </div>
                                        </div>`
                                s+='</td>'
                            s+='</tr>'
                        })

                        $('#dataTable').DataTable().destroy();
                        $('#dataTable tbody').html(s)
                        $('#dataTable').DataTable();
                    }else{
                        res = data;
                    }
                }, error : function(q,w,e) {
                    alert(e)
                    console.log(q.responseText)
                }
            })

            return res;
        }

        function add(){
            $.ajax({
                url : '<?= site_url('karyawan/add_karyawan')?>',
                type : 'post',
                dataType : 'json',
                data : {
                    nama_karyawan : $('#md-add [name="nama_karyawan"]').val(),
                    alamat : $('#md-add [name="alamat"]').val(),
                    tanggal_lahir : $('#md-add [name="tanggal_lahir"]').val()
                },
                success : function(data){
                    console.log(data)

                    if(data.status==1){
                        alert('Berhasil');
                        $('#md-add').modal('hide')
                        get();
                    }else{
                        alert('Gagal')
                    }
                }, error : function(q,w,e){
                    alert(e)
                    console.log(q.responseText)
                }
            })
        }

        function update(){
            $.ajax({
                url : '<?= site_url('karyawan/update_karyawan')?>',
                type : 'post',
                dataType : 'json',
                data : {
                    nomor_induk : nomor_induk,
                    nama_karyawan : $('#md-update [name="nama_karyawan"]').val(),
                    alamat : $('#md-update [name="alamat"]').val(),
                    tanggal_lahir : $('#md-update [name="tanggal_lahir"]').val()
                },
                success : function(data){
                    console.log(data)

                    if(data.status==1){
                        alert('Berhasil');
                        $('#md-update').modal('hide')
                        get();
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
                url : '<?= site_url('karyawan/delete_karyawan')?>',
                type : 'post',
                dataType : 'json',
                data : {
                    nomor_induk : nomor_induk
                },
                success : function(data){
                    console.log(data)

                    if(data.status==1){
                        alert('Berhasil');
                        get();
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