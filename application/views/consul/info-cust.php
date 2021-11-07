        <div class="container">
            <div class="row">
            <div class="col-lg-1"></div>
                <div class="col-lg-10">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h4>Menu Customer</h4>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <a href="<?php echo base_url('user/inputRusak') ?>" class="btn btn-primary btn-lg col-lg-12">Input Data Kerusakan</a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12" align="center">
                                    <small>Form input data kerusakan motor listrik</small>
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-lg-12">
                                    <a href="<?php echo base_url('user/estimasi') ?>" class="btn btn-warning btn-lg col-lg-12">Estimasi Kerusakan</a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12" align="center">
                                    <small>Hasil estimasi kerusakan yang diberikan customer</small>
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-lg-12">
                                    <a href="<?php echo base_url('user/ajukanPerbaikan') ?>" class="btn btn-danger btn-lg col-lg-12">Ajukan Perbaikan</a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12" align="center">
                                    <small>Mengajukan perbaikan kerusakan motor listrik</small>
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col-lg-12">
                                    <a href="<?php echo base_url('user/pesanPart') ?>" class="btn btn-success btn-lg col-lg-12">Pesan Spare Part / Barang</a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12" align="center">
                                    <small>Pemesanan spare part / barang accessories motor listrik</small>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
              </div>
              <div class="row">
            <div class="col-lg-1"></div>
                <div class="col-lg-10">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h4>Pengajuan Perbaikan</h4>
                        </div>
                        <div class="panel-body">
                            <table id="datatable" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Customer</th>
                                        <th>ID Consul</th>
                                        <th>Pelayanan</th>
                                        <th>Pengerjaan</th>
                                        <th>Alamat</th>
                                        <th>Keterangan</th>
                                        <th>Status</th>
                                        <th>Start On</th>
                                      </tr>
                                </thead>
                                <tbody>
                                    <?php $content = $this->db->get_where('perbaikan',array('idUser'=>$this->session->userdata('idUser'))) ?>
                                    <?php $i=1; foreach($content->result() as $con): ?>
                                          <tr>
                                            <td><?php echo $i++ ?></td>
                                            <td><?php echo $this->db->get_where('user',array('idUser'=>$con->idUser))->row()->fullname ?></td>
                                            <td>
                                              <a class="btn btn-default col-lg-12" href="#" class="btn btn-default btn-lg" data-toggle="modal" data-target="<?php echo '#consul'.$con->idConsul ?>">Show</a>
                                            </td>
                                            <td><?php echo $con->pelayanan  ?></td>
                                            <td><?php echo $con->pengerjaan  ?></td>
                                            <td><?php echo $con->alamat  ?></td>
                                            <td><?php echo $con->ket  ?></td>
                                            <td><?php echo $con->status ?></td>
                                            <?php if($con->startDate == NULL){ ?>
                                            <td></td>
                                            <?php }else{ ?>
                                            <td><?php echo date('d/m/y',strtotime($con->startDate)) ?></td>
                                            <?php } ?>
                                          </tr>
                                        <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                  </div>
              </div>
              <div class="row">
                <div class="col-lg-1"></div>
                    <div class="col-lg-10">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h4>Pemesanan Part</h4>
                            </div>
                            <div class="panel-body">
                                <table id="datatable" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Customer</th>
                                            <th>ID Pesan</th>
                                            <th>Jenis Part</th>
                                            <th>Type Part</th>
                                            <th>Harga</th>
                                            <th>Jumlah</th>
                                            <th>Total</th>
                                            <th>Pembayaran</th>
                                            <th>Status</th>
                                            <th>Tgl Pesan</th>
                                          </tr>
                                    </thead>
                                    <tbody>
                                        <?php $order = $this->db->get_where('order_sparepart',array('idUser'=>$this->session->userdata('idUser'),'order_sta'=>'Di Pesan')); ?>
                                        <?php $i=1; foreach($order->result() as $con){ ?>
                                              <tr>
                                                <td><?php echo $i++ ?></td>
                                                <td><?php echo $this->db->get_where('user',array('idUser'=>$con->idUser))->row()->fullname ?></td>
                                                <td><?php echo $con->id_orderpart  ?></td>
                                                <td><?php echo $this->db->get_where("category_part",array("id_catpart"=>$con->id_catpart))->row()->nm_catpart  ?></td>
                                                <td><?php echo $this->db->get_where("type_part",array("id_type"=>$con->id_type))->row()->nm_type  ?></td>
                                                <td>Rp. <?php echo $con->harga_satuan  ?></td>
                                                <td><?php echo $con->qty ?></td>
                                                <td>Rp. <?php echo $con->harga_total ?></td>
                                                <td><?php echo $con->transaksi ?></td>
                                                <td><?php echo $con->order_sta ?></td>
                                                <td><?php echo $con->c_date ?></td>
                                              </tr>
                                            <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                      </div>
              </div>
            </div>

             <?php foreach($content->result() as $con): ?>
                <?php $a = $this->db->get_where('consul',array('idConsul'=>$con->idConsul))->row() ?>
              <div id="<?php echo 'consul'.$con->idConsul ?>" class="modal fade" role="dialog">
                <div class="modal-dialog">

                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">Data Estimasi</h4>
                    </div>
                    <div class="modal-body">
                      <form role="form" action="<?php //echo base_url('edPart').'/'.$con->idPart ?>" method="post">
                        <div class="form-group" align="center">
                          <img src="<?php  echo base_url().'uploads/kerusakan/'.$a->fileKerusakan ?>" class="img-circle" height="100px" width="100px" alt="File Kerusakan">
                        </div>
                        <div class="form-group">
                          <label for="jenis">Jenis : </label>
                          <input id="jenis" name="jenis" type="text" class="form-control" placeholder="Jenis" value="<?php echo $this->db->get_where('jenis',array('idJenis'=>$a->idJenis))->row()->namaJenis ?>" readonly />
                        </div>
                        <div class="form-group">
                          <label for="rusak">Kerusakan : </label>
                          <input id="rusak" name="rusak" type="text" class="form-control" placeholder="Rusak" value="<?php echo $this->db->get_where('rusak',array('idRusak'=>$a->idRusak))->row()->namaRusak ?>" readonly />
                        </div>
                        <div class="form-group">
                          <label for="analisa">Analisa : </label>
                          <input id="analisa" name="analisa" type="text" class="form-control" placeholder="Analisa" value="<?php echo $a->analisa ?>" readonly />
                        </div>
                        <div class="form-group">
                          <label for="esBiaya">Estimasi Biaya : </label>
                          <input id="esBiaya" name="esBiaya" type="text" class="form-control" placeholder="Estimasi Biaya" value="<?php echo $a->esBiaya ?>" readonly />
                        </div>
                        <div class="form-group">
                          <label for="esWaktu">Estimasi Pengerjaan : </label>
                          <input id="esWaktu" name="esWaktu" type="text" class="form-control" placeholder="Estimasi Waktu" value="<?php echo $a->esWaktu ?>" readonly />
                        </div>
                      </form>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                  </div>

                </div>
              </div>
            <?php endforeach ?>


    </body>
    
    <style>
        .error{
            color:red;
        }
    </style>
</html>