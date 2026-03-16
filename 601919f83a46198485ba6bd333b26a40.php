
	<?php $__env->startSection('konten4'); ?>

    <button type="button" data-toggle="modal" data-target="#tambah" 
class="btn btn-primary btn-sm" title="Tambah data Siswa"><i class="fa fa-plus"></i> &nbsp; Tambah Data</button>
<br />
<br>
<h2>Data Pembelian</h2>


<div class="table-responsive">
<table class="table table-bordered table-hover" id="example"> 
    <thead class="thead-dark">
        <tr>
            <th>No</th>
            <th>Id Pembelian</th>
            <th>Id Barang</th>
            <th>Id Suplier</th>
            <th>Qyt</th>
            <th>Tanggal</th>
            <th>Tindakan</th>
        </tr>
    </thead>
<tbody>
        <?php $__currentLoopData = $pembelian; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($loop->iteration); ?></td>
        <td><?php echo e($d->id_pembelian); ?></td>
        <td><?php echo e($d->id_barang); ?></td>
        <td><?php echo e($d->id_suplier); ?></td>
        <td><?php echo e($d->qyt); ?></td>
        <td><?php echo e($d->tgl); ?></td>
        <td>
            <form onsubmit="return confirm('Yakin hapus data?');" method="POST" action="<?php echo e(route('pembelian.destroy', $d->id_pembelian)); ?>">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <a href="<?php echo e(route('pembelian.edit', $d->id_pembelian)); ?>" 
                    class="btn btn-success btn-sm mb-2" title="Edit Data">
                    <i class="fa fa-edit"></i> Edit</a>
                <button type="submit" class="btn btn-danger btn-sm mb-2" title="Hapus Data">
                    <i class="fa fa-trash"></i> Hapus</button>
            </form>
        </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</tbody>
</table>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


<?php if(session('status')): ?>
	<script>
		Swal.fire({
		title: "<?php echo e(session('status')['judul']); ?>",
		text: "<?php echo e(session('status')['pesan']); ?>",
		icon: "<?php echo e(session('status')['icon']); ?>"
		});
	</script>
	<?php endif; ?>
  

        <div class="modal fade" id="tambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog" style="width: 600px">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="POST" action="<?php echo e(route('pembelian.store')); ?>">
                    
                    <?php echo csrf_field(); ?> 


                <div class="modal-body">
                    <div class="form-group">
                        <label for="id_pembelian">Id Pembelian</label>
                        <input type="text" class="form-control" id="id_pembelian" name="id_pembelian" required>
                        </div>
                        <div class="form-group">
                          <label for="id_barang">Id Barang</label>
                        <input type="text" class="form-control" id="id_barang" name="id_barang" required>
                        </div>
                        <div class="form-group">
                          <label for="id_suplier">Id Suplier</label>
                          <input type="text" class="form-control" id="id_suplier" name="id_suplier" required>
                        </div>
                        <div class="form-group">
                            <label for="qyt">Qyt</label>
                            <input type="text" class="form-control" id="qyt" name="qyt" required>
                          </div>
                          <div class="form-group">
                            <label for="tgl">Tanggal</label>
                            <input type="date" class="form-control" id="tgl" name="tgl" required>
                          </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
              </div>
            </div>
          </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.menu4', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pembelian\resources\views/pembelian/index.blade.php ENDPATH**/ ?>