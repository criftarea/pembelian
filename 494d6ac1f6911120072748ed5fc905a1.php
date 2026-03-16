
	<?php $__env->startSection('konten3'); ?>
  <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Tambah Pelaporan</title>
  <style>
    .btn-custom-save {
      background-color: green;
      color: white;
      width: 100%;
      margin-bottom: 10px;
    }
    .btn-custom-reset {
      background-color: blue;
      color: white;
      width: 100%;
    }
    .btn-back {
      position: absolute;
      top: 20px;
      right: 20px;
      background-color: gray;
      color: white;
      border: none;
      padding: 5px 10px;
      border-radius: 50%;
    }
    .btn-back i {
      font-size: 16px;
    }
  </style>
</head>
<body>
  <div class="container mt-5 position-relative">
    <h2>Edit Data pelaporan</h2>
   
<form method="POST" action="<?php echo e(route('pelapor.simpan_edit', $pelapor->id_pelapor)); ?>">
    <?php echo csrf_field(); ?> 
    <?php echo method_field('PUT'); ?>
    <div class="form-group">
      <label for="id_pelapor">Id Pelapor</label>
    <input type="text" name="id_pelapor" class="form-control" required value="<?php echo e(old('id_pelapor', $pelapor->id_pelapor)); ?>">
    <?php $__errorArgs = ['id_pelapor'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>
    <div class="form-group">
      <label for="nama_pelapor">Nama Pelapor</label>
    <input type="text" name="nama_pelapor" class="form-control" required value="<?php echo e(old('nama_pelapor', $pelapor->nama_pelapor)); ?>">
    </div>
    <div class="form-group">
      <label for="jenis_laporan">Jenis Laporan</label>
    <select name="status" class="form-control" required>
        <option value="">Pilih</option>
        <option value="Surat"     <?php echo e($pelapor->status == 'Surat' ? 'selected' : ''); ?>>Surat</option>
        <option value="Langsung" <?php echo e($pelapor->status == 'Langsung' ? 'selected' : ''); ?>>Langsung</option>
        <option value="Perwakilan" <?php echo e($pelapor->status == 'Perwakilan' ? 'selected' : ''); ?>>Perwakilan</option>
  </select>
    <div class="form-group">
      <label for="uraian_laporan_gratifikasi">Uraian laporan Gratifikasi</label>
    <input type="uraian_laporan_gratifikasi" class="form-control" required value="<?php echo e(old('uraian_laporan_gratifikasi', $pelapor->uraian_laporan_gratifikasi)); ?>">
    </div>
    <div class="form-group">
      <label for="taksiran_dana_gratifikasi">Taksiran Dana Gratifikasi</label>
    <textarea name="taksiran_dana_gratifikasi" class="form-control"><?php echo e(old('taksiran_dana_gratifikasi', $pelapor->taksiran_dana_gratifikasi)); ?></textarea>
    </div>
    <div class="form-group">
      <label for="alamat">Alamat</label>
    <textarea name="alamat" class="form-control"><?php echo e(old('alamat', $pelapor->alamat)); ?></textarea>
    </div>
    <div class="form-group">
      <label for="alamat">Alamat</label>
    <textarea name="alamat" class="form-control"><?php echo e(old('alamat', $pelapor->alamat)); ?></textarea>
    </div>
    <div class="form-group">
      <label for="alamat">Alamat</label>
    <textarea name="alamat" class="form-control"><?php echo e(old('alamat', $pelapor->alamat)); ?></textarea>
    </div>
    <div class="form-group">
      <label for="alamat">Alamat</label>
    <textarea name="alamat" class="form-control"><?php echo e(old('alamat', $pelapor->alamat)); ?></textarea>
    </div>
    <div class="form-group">
      <label for="alamat">Alamat</label>
    <textarea name="alamat" class="form-control"><?php echo e(old('alamat', $pelapor->alamat)); ?></textarea>
    </div>
    <div class="form-group">
      <label for="alamat">Alamat</label>
    <textarea name="alamat" class="form-control"><?php echo e(old('alamat', $pelapor->alamat)); ?></textarea>
    </div>
    <div class="form-group">
      <label for="alamat">Alamat</label>
    <textarea name="alamat" class="form-control"><?php echo e(old('alamat', $pelapor->alamat)); ?></textarea>
    </div>
    
  <br><br>
  <button type="submit" 
  class="btn btn-success btn-sm mb-2" title="Simpan Data">
  <i class="fa fa-check"></i> Simpan</button>
  <a href="<?php echo e(route('pelapor.tampil')); ?>" class="btn btn-primary btn-sm mb-2" title="Kembali">
    <i class="fa fa-arrow-left"></i> Kembali</a>
</form>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.menu3', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pelapor\resources\views/pelapor/edit.blade.php ENDPATH**/ ?>