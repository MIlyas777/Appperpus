<div class="col-md-12">
    <!-- Horizontal Form -->
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title"><?=$judul;?></h3>
        </div>
        <form method="post" action="<?=base_url()?>anggota/update" class="form-horizontal">
            <div class="box-body">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Id Anggota</label>
                    <div class="col-sm-10">
                        <input type="text" name="id_anggota" value="<?= $data['id_anggota'];?>" class="form-control" readonly >
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Nama Anggota</label>
                    <div class="col-sm-10">
                        <input type="text" name="nama_anggota" class="form-control" id="inputPassword3" placeholder="nama anggota" requiredvalue="<?= $data['nama_anggota'];?>">                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Jenis Kelamin</label>
                    <div class="col-sm-10">
                        <select name="jenkel" class="form-control">
                            <?php
                                if ($data['jenkel'] == "Laki-laki"){?>
                                    <option value="Laki-laki" selected>Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                               <?php }else{?>
                                <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan" selected>Perempuan</option>
                                <?php }
                            ?>
                        </select>  
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Alamat</label>
                    <div class="col-sm-10">
                        <textarea name="alamat" class="form-control" cols="30" rows="5" required value="<?= $data['alamat'];?>"></textarea>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">No HP</label>
                    <div class="col-sm-10">
                        <input type="text" name="no_hp" class="form-control" placeholder="No_HP" required value="<? $data['no_hp'];?>"></input>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        
                    </div>
                </div>
                <div class="box-footer">
                <button type="submit" class="btn btn-primary">Update</button>
                    <a href="<?= base_url()?>anggota" class="btn btn-warning">Cancel</a>  
                </div>
            </div>
        </form>
    </div>
</div>