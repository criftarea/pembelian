Form Tambah Data
<form method="POST" action="<?php echo e(route('siswa.store')); ?>" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
NIS :
<input type="text" name="nis" required>
<br>
Nama Siswa :
<input type="text" name="nama" required>
<br>
Alamat :
<textarea name="alamat"></textarea>
<br>
Tanggal_lahir :
<input type="date" name="tanggal_lahir">
<br>
Jenis_kelamin :
<select name="jk" required>
    <option value="">Pilih</option>
    <option value="Laki-laki">Laki-laki</option>
    <option value="Perempuan">Perempuan</option>
</select>
<br>
<button type="submit">Simpan Data</button>
<a href="<?php echo e(route('siswa.index')); ?>">Kembali</a>
</form> <?php /**PATH C:\xampp\htdocs\kelasd\resources\views/siswa/form_tambah.blade.php ENDPATH**/ ?>