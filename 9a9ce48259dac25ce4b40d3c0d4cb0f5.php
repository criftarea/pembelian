<a href="#">Tambah Data</a>
<table> 
    <thead>
        <tr>
            <th>No</th>
            <th>Nis</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Tanggal Lahir</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $siswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($loop->iteration); ?></td>
            <td><?php echo e($d->nis); ?></td>
            <td><?php echo e($d->nama); ?></td>
            <td><?php echo e($d->jenis_kelamin); ?></td>
            <td><?php echo e($d->tanggal_lahir); ?></td>
            <td></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table><?php /**PATH C:\xampp\htdocs\kelasd\kelasd\kelasd\resources\views/siswa/index.blade.php ENDPATH**/ ?>