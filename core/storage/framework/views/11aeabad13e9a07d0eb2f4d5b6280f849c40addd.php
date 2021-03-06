<?php $__env->startSection('main-content'); ?>
    <div class="ui container">
        <div class="ui secondary pointing menu">
            <a class="item" href="<?php echo e(url('/')); ?>">
                <i class="home icon"></i>
                Halaman Utama
            </a>
            <div class="right menu">
                <a href="<?php echo e(url('login')); ?>" class="item">
                    Masuk
                </a>
                <a href="<?php echo e(url('daftar/guru')); ?>" class="item  active">
                    Daftar
                </a>
            </div>
        </div>

        <div class="ui top attached tabular menu">
            <div class="item"><a href="<?php echo e(url('daftar/guru')); ?>">Guru</a></div>
            <div class="active item"><a href="<?php echo e(url('daftar/siswa')); ?>">Siswa</a></div>
        </div>
        <div class="ui bottom attached active tab segment">
            <div class="ui grid">
                <div class="eight wide column">
                    Anda mendaftarkan diri sebagai Siswa.
                </div>
                <div class="eight wide column">
                    <form class="ui form" method="post" action="<?php echo e(url('daftar/siswa')); ?>">
                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"/>

                        <?php if(count($errors) > 0): ?>
                            <div class="ui ignored negative message">
                                <ul>
                                    <?php foreach($errors->all() as $error): ?>
                                        <li><?php echo e($error); ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        <?php endif; ?>
                        <?php if( Session::has('message') ): ?>
                            <div class="ui ignored negative message">
                                <?php echo e(Session::get('message')); ?>

                            </div>
                        <?php endif; ?>
                        <div class="field">
                            <label>Email</label>
                            <input type="email" name="email">
                        </div>
                        <div class="field">
                            <label>Buat Username</label>
                            <input type="text" name="username">
                        </div>
                        <div class="field">
                            <label>Nama Lengkap</label>
                            <input type="text" name="nama_lengkap">
                        </div>
                        <div class="field">
                            <label>Jenis Kelamin</label>
                            <select class="ui fluid dropdown" name="kelamin">
                                <option value="">-</option>
                                <option value="1">Pria</option>
                                <option value="2">Wanita</option>
                            </select>
                        </div>
                        <div class="field">
                            <label>Sandi</label>
                            <input type="password" name="password">
                        </div>
                        <div class="field">
                            <label>Kode kelas</label>
                            <input type="text" name="kode">
                        </div>
                        <button class="ui button" type="submit">Submit</button>
                    </form>

                </div>
            </div>
        </div>

    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>