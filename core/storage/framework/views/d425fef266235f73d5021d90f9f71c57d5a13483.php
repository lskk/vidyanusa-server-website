<?php $__env->startSection('main-content'); ?>
    <div class="ui container">
        <div class="ui secondary pointing menu">
            <a class="item active" href="<?php echo e(url('/')); ?>">
                <i class="home icon"></i>
                Beranda
            </a>
            <?php /*<a class="item" href="<?php echo e(url('/')); ?>">
                Profile
            </a>*/ ?>
            <div class="right menu">
                <a href="<?php echo e(url('/')); ?>" class="item">
                    Logout
                </a>
            </div>
        </div>
    </div>
    <br/>
    <div class="ui grid">
        <div class="one wide column">

        </div>
        <div class="three wide column centered">
            <?php /*<div class="ui segment" align="center">
                <div class="ui small image">
                    <img src="<?php echo e(url('/')); ?>/core/resources/assets/img/student.png" class="ui medium rounded image">
                </div>
                <div class="ui list" align="left">
                    <div class="item"><h2>Ezhar</h2></div>
                    <div class="item"><i class="university icon"></i> SMPN 01 Bandung</div>
                    <div class="item"><i class="star icon"></i> 300</div>
                </div>
            </div>*/ ?>
            <div class="ui link cards">
                <div class="card">
                    <div class="image">
                        <img src="<?php echo e(url('/')); ?>/core/resources/assets/img/student.png">
                    </div>
                    <div class="content">
                        <div class="header">Dendi Pradika</div>
                        <div class="meta">
                            <a>@dpradika</a>
                        </div>
                        <div class="description">
                            Pelajar dari SMPN 01 Bandung
                        </div>
                    </div>
                    <div class="extra content">

                        <span>
        <i class="star icon"></i>
        15 Points
      </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="eight wide column">
            <div class="ui card">

            <div class="ui feed">

                <div class="event">
                    <div class="label">
                        <img src="<?php echo e(url('/')); ?>/core/resources/assets/img/student2.png">
                    </div>
                    <div class="content">
                        <div class="summary">
                            <a>Akmal</a> menambahkan kegiatan <a href="#">Beribadah</a>
                            <div class="date">
                                10 menit lalu
                            </div>
                        </div>
                        <div class="extra images">
                            <a><img src="<?php echo e(url('/')); ?>/core/resources/assets/img/ibadah.png"></a>
                        </div>
                        <div class="meta">
                            <a class="like">
                                <i class="like icon"></i> 34 Like
                            </a>
                        </div>
                    </div>
                </div>

                <div class="event">
                    <div class="label">
                        <img src="<?php echo e(url('/')); ?>/core/resources/assets/img/student3.png">
                    </div>
                    <div class="content">
                        <div class="summary">
                            <a>Anna</a> menambahkan kegiatan <a href="#">Kebersihan</a>
                            <div class="date">
                                13 menit lalu
                            </div>
                        </div>
                        <div class="extra images">
                            <a><img src="<?php echo e(url('/')); ?>/core/resources/assets/img/kebersihan.png"></a>
                        </div>
                        <div class="meta">
                            <a class="like">
                                <i class="like icon"></i> 49 Like
                            </a>
                        </div>
                    </div>
                </div>

                <div class="event">
                    <div class="label">
                        <img src="<?php echo e(url('/')); ?>/core/resources/assets/img/student4.png">
                    </div>
                    <div class="content">
                        <div class="summary">
                            <a>Melly</a> mendapatkan 5 poin dari game <a href="#">berkebun</a>
                            <div class="date">
                                17 menit lalu
                            </div>
                        </div>
                        <div class="extra images">
                            <a><img src="<?php echo e(url('/')); ?>/core/resources/assets/img/game-farming.png"></a>
                        </div>
                        <div class="meta">
                            <a class="like">
                                <i class="like icon"></i> 77 Like
                            </a>
                        </div>
                    </div>
                </div>

                <div class="event">
                    <div class="label">
                        <img src="<?php echo e(url('/')); ?>/core/resources/assets/img/student5.png">
                    </div>
                    <div class="content">
                        <div class="summary">
                            <a>Indra</a> menambahkan kegiatan <a href="#">belajar</a>
                            <div class="date">
                                19 menit lalu
                            </div>
                        </div>
                        <div class="extra images">
                            <a><img src="<?php echo e(url('/')); ?>/core/resources/assets/img/belajar.png"></a>
                        </div>
                        <div class="meta">
                            <a class="like">
                                <i class="like icon"></i> 48 Like
                            </a>
                        </div>
                    </div>
                </div>


                <?php /*<button class="fluid ui button">Load more</button>*/ ?>


            </div>
            </div>
        </div>
        <div class="three wide column">
            <div class="ui card">

                <div class="content">
                    <a class="header">Games</a>
                    <div class="meta">
                        <span class="date">Joined in 2013</span>
                    </div>
                    <div class="description">
                        Kristy is an art director living in New York.
                    </div>
                </div>
                <div class="extra content">
                    <a>
                        <i class="user icon"></i>
                        22 Friends
                    </a>
                </div>
            </div>
        </div>
        <div class="one wide column">

        </div>

    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>