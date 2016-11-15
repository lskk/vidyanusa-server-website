<?php $__env->startSection('main-content'); ?>
    <div class="ui container">
        <div class="ui secondary pointing menu">
            <a class="item" href="<?php echo e(url('/')); ?>" style="background-color: #336799;color: #ffffff;">
                Home
            </a>
            <div class="right menu">
                <a href="<?php echo e(url('login')); ?>" class="item">
                    Login
                </a>
                <a href="<?php echo e(url('daftar')); ?>" class="item  active">
                    Daftar
                </a>
            </div>
        </div>

        <div class="ui top attached tabular menu">
            <div class="active item">Guru</div>
            <div class="item">Siswa</div>
        </div>
        <div class="ui bottom attached active tab segment">
            <div class="ui grid">
                <div class="eight wide column">
                    Anda mendaftarkan diri sebagai Guru.
                </div>
                <div class="eight wide column">
                    <form class="ui form">
                        <div class="field">
                            <label>Email</label>
                            <input type="text" name="nama_lengkap">
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
                            <select class="ui fluid dropdown">
                                <option value="">-</option>
                                <option value="AL">Pria</option>
                                <option value="AL">Wanita</option>
                            </select>
                        </div>
                        <div class="field">
                            <label>Password</label>
                            <input type="password" name="password">
                        </div>
                        <div class="field">
                            <label>Ulangi password</label>
                            <input type="password" name="ulang_password">
                        </div>
                        <div class="field">
                            <label>Sekolah</label>
                            <select class="ui fluid dropdown">
                                <option value="">-</option>
                                <option value="AL">-</option>
                            </select>
                        </div>
                        <button class="ui button" type="submit">Submit</button>
                    </form>

                </div>
            </div>
        </div>

    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>