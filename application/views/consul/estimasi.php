        <div class="container">
            <div class="row">
            <div class="col-lg-1"></div>
                <div class="col-lg-10">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h4><?php echo $title ?></h4>
                        </div>
                        <div class="panel-body">
                            <table id="datatable" class="table table-striped table-bordered">
                                <tr>
                                    <th>ID Konsul</th>
                                    <th>Jenis Dinamo</th>
                                    <th>Kerusakan</th>
                                    <th>Keterangan</th>
                                </tr>
                                <?php foreach($content->result() as $a): ?>
                                <tr>
                                    <td><?php echo $a->idConsul ?></td>
                                    <td><?php echo $this->db->get_where('jenis',array('idJenis'=>$a->idJenis))->row()->namaJenis ?></td>
                                    <td><?php echo $this->db->get_where('rusak',array('idRusak'=>$a->idRusak))->row()->namaRusak ?></td>
                                    <td><?php echo $a->ket ?></td>
                                </tr>
                                <?php if($a->analisa==NULL||$a->esBiaya==NULL||$a->esWaktu==NULL){ ?>
                                <tr style="background-color: red">
                                    <td colspan="4">Belum Direspon</td>
                                </tr>
                                <?php }else{ ?>
                                <tr style="background-color: yellow">
                                    <td colspan="2"><?php echo $a->analisa ?></td>
                                    <td>Biaya sekitar : <?php echo $a->esBiaya ?></td>
                                    <td>Waktu Pengerjaan : <?php echo $a->esWaktu ?></td>
                                </tr>
                                <?php } ?>
                                <?php endforeach ?>
                                
                            </table>
                        </div>
                    </div>
                  </div>
              </div>
            </div>
    </body>
    
    <style>
        .error{
            color:red;
        }
    </style>
</html>