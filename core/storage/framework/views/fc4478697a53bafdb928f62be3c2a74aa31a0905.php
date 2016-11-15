<?php $__env->startSection('main-content'); ?>
    <div class="ui container">
    <div class="ui secondary pointing menu">
        <a class="item" href="<?php echo e(url('/')); ?>">
            <i class="home icon"></i>
            Halaman Utama
        </a>
        <div class="right menu">
            <a href="<?php echo e(url('login')); ?>" class="item active">
                Masuk
            </a>
            <a href="<?php echo e(url('daftar/guru')); ?>" class="item">
                Daftar
            </a>
        </div>
    </div>

    <div class="ui segment">
        <div class="ui grid">
            <div class="eight wide column">
                <form class="ui form">
                    <div class="field">
                        <label>Username atau Email</label>
                        <input type="text" name="username">
                    </div>
                    <div class="field">
                        <label>Sandi</label>
                        <input type="password" name="last-name">
                    </div>

                    <?php /*<button class="ui button" type="submit">Submit</button>*/ ?>
                    <a class="ui button" href="beranda">Kirim</a>
                </form>

            </div>


            <div class="eight wide column">
                Silahkan masuk menggunakan akun anda ketika berhasil mendaftar ke Vidyanusa.
                Apabila belum memiliki akun, silahkan daftar <a href="<?php echo e(url('daftar/guru')); ?>">disini</a>.
            </div>
        </div>
    </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>