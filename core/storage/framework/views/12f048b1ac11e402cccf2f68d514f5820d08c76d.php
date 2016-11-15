<?php $__env->startSection('css'); ?>
    #text-area-kegiatan{
    resize: none;
    }
<?php $__env->stopSection(); ?>
<?php $__env->startSection('main-content'); ?>
    <div class="ui container">
        <div class="ui secondary pointing menu">
            <a class="item active" href="<?php echo e(url('beranda')); ?>">
                <i class="home icon"></i>
                Beranda
            </a>
            <a class="item" href="<?php echo e(url('galeri')); ?>">
                <i class="camera retro icon"></i>
                Galeri
            </a>
            <a class="item" href="http://localhost/vidyanusa_moodle/" target="_blank">
                <i class="book icon"></i>
                Materi
            </a>
            <a class="item" href="http://localhost/vidyanusa_wordpress/" target="_blank">
                <i class="newspaper icon"></i>
                Blog
            </a>
            <a class="item" href="http://localhost/vidyanusa_phpbb/" target="_blank">
                <i class="talk icon"></i>
                Forum
            </a>
            <?php /*<a class="item" href="<?php echo e(url('/')); ?>">
                Profile
            </a>*/ ?>
            <div class="right menu">
                <a class="item" href="<?php echo e(url('profil')); ?>">
                    Profil
                </a>
                <a href="<?php echo e(url('logout')); ?>" class="item">
                    Keluar
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
            <div class="ui cards">
                <div class="card">
                    <div class="image">
                        <img src="<?php echo e(url('/')); ?>/core/resources/assets/img/student.png" class="rounded image">
                    </div>
                    <div class="content">
                        <div class="header">Hendra Permana</div>
                        <div class="meta">
                            <a>@hynra</a>
                        </div>
                        <div class="description">
                            Pelajar dari SMPN 01 Tasikmalaya
                        </div>
                    </div>
                    <div class="extra content">
                        <span>
        <i class="star icon" style="color:#ffb70a;"></i>
        15 Poin
      </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="eight wide column">

            <div class="ui card" style="width: 100%">

                <div class="content">
                    <div>
                        <div class="meta">
                        <h3 style="color: #343434;">Kegiatan</h3>
                        Kegiatan berupa gambar atau video.
                        </div>
                    </div>
                    <br/>
                    <div class="ui form">
                        <div class="field">
                            <?php /*Hashtag kegiatan*/ ?>
                            <select class="ui fluid dropdown" style="z-index: 1000;">
                                <option value="">Pilih hashtag</option>
                                <option value="AL">Beribadah</option>
                                <option value="AL">Berdoa</option>
                                <option value="AL">Kebersihan</option>
                                <option value="AL">Kemanusiaan</option>
                                <?php /*<option value="AL">Eksperimen Lapangan</option>*/ ?>
                            </select>
                            <?php /*<textarea rows="3" placeholder="Kegiatan apa yang sedang kamu lakukan?"
                                      id="text-area-kegiatan"></textarea>*/ ?>
                        </div>

                        <div class="field">
                            <?php /*Pilih media baik gambar atau video*/ ?>
                            <input type="file" name="media" class="ui button" title="a">
                            <?php /*<input type="file" id="files" class="hidden"/>
                            <label for="files">Pilih media baik gambar atau video</label>*/ ?>

                        </div>
                        <br/>
                        <div>
                            Keterangan
                            <br/>
                            <div class="meta">
                                Kegiatan yang di bagikan otomatis disimpan di <a href="<?php echo e(url('galeri')); ?>" style="color: #5BB8C1;">Galeri</a> dan muncul di Beranda seluruh akun Vidyanusa.
                                <?php /*Terus kirim kegiatan untuk mendapatkan poin.*/ ?>
                            </div>
                        </div>
                        <?php /*<br/>
                        <br/>
                        <br/>*/ ?>

                    </div>
                </div>
                <div class="extra content">
                    <button class="ui teal button"><i class="send outline icon"></i> Bagikan</button>
                </div>

            </div>
            <hr/>

            <div class="ui feed">

                <div class="event">
                    <div class="label">
                        <img src="<?php echo e(url('/')); ?>/core/resources/assets/img/student2.png">
                    </div>
                    <div class="content">
                        <div class="summary">
                            <a>Haffiyan P</a> menambahkan kegiatan <a href="#">Beribadah</a>
                            <div class="date">
                                <i class="marker icon"></i>jl Dago, Bandung, Jawa Barat
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
                            <a>Achmad Ridho</a> menambahkan kegiatan <a href="#">Kebersihan</a>
                            <div class="date">
                                <i class="marker icon"></i>jl Dago, Bandung, Jawa Barat
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
                            <a>Caliandra T</a> mendapatkan 5 poin dari game <a href="#">berkebun</a>
                            <div class="date">
                                <i class="marker icon"></i>jl Dago, Bandung, Jawa Barat
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
                                <i class="marker icon"></i>jl Dago, Bandung, Jawa Barat
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


            </div>
            <button class="fluid ui button">Tampilkan lebih</button>
        </div>
        <div class="three wide column">
            <div class="ui card">

                <div class="content">
                    <a class="header">Poin tertinggi</a>
                    <?php /*<div class="meta">
                        <span class="date">Terakhir update 2016</span>
                    </div>*/ ?>
                    <div class="description">
                        <div class="ui divided items">
                            <div class="item">
                                <div class="ui tiny image">
                                    <img src="<?php echo e(url('/')); ?>/core/resources/assets/img/student2.png">
                                </div>
                                <div class="content">
                                    <div class="meta">
                                        Haffiyan P
                                        <a>@fiyyan</a>
                                        <br/>
                                        <br/>
                                        <i class="star icon" style="color:#ffb70a;"></i>
                                        84 Poin
                                    </div>

                                </div>

                            </div>
                            <div class="item">
                                <div class="ui tiny image">
                                    <img src="<?php echo e(url('/')); ?>/core/resources/assets/img/student4.png">
                                </div>
                                <div class="content">
                                    <div class="meta">
                                        Caliandra T
                                        <a>@caliandra</a>
                                        <br/>
                                        <br/>
                                        <i class="star icon" style="color:#ffb70a;"></i>
                                        80 Poin
                                    </div>

                                </div>

                            </div>
                            <div class="item">
                                <div class="ui tiny image">
                                    <img src="<?php echo e(url('/')); ?>/core/resources/assets/img/student3.png">
                                </div>
                                <div class="content">
                                    <div class="meta">
                                        Achmad Ridho
                                        <a>@aridho</a>
                                        <br/>
                                        <br/>
                                        <i class="star icon" style="color:#ffb70a;"></i>
                                        78 Poin
                                    </div>

                                </div>

                            </div>
                            <button class="fluid ui button">Lihat selengkapnya</button>
                        </div>
                    </div>
                </div>
                <?php /*<div class="extra content">
                    <a>
                        <i class="user icon"></i>
                        22 Friends
                    </a>
                </div>*/ ?>
            </div>
            <div class="ui card">

                <div class="content">
                    <a class="header">Permainan</a>
                    <?php /*<div class="meta">
                        <span class="date">Terakhir update 2016</span>
                    </div>*/ ?>
                    <div class="description">
                        <div class="ui divided items">
                            <div class="item">
                                <div class="content">
                                    <div class="meta">
                                        <a href="<?php echo e(url('/')); ?>/core/resources/assets/swf/1.swf" target="_blank"
                                           style="color: #666;">
                                            Pecahan level 1
                                        </a>
                                    </div>

                                </div>

                            </div>
                            <div class="item">
                                <div class="content">
                                    <div class="meta">
                                        <a href="<?php echo e(url('/')); ?>/core/resources/assets/swf/2.swf" target="_blank"
                                           style="color: #666;">
                                            Pecahan level 2
                                        </a>
                                    </div>
                                </div>

                            </div>
                            <div class="item">
                                <div class="content">
                                    <div class="meta">
                                        <a href="<?php echo e(url('/')); ?>/core/resources/assets/swf/3.swf" target="_blank"
                                           style="color: #666;">
                                            Pecahan level 3
                                        </a>
                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                <?php /*<div class="extra content">
                    <a>
                        <i class="user icon"></i>
                        22 Friends
                    </a>
                </div>*/ ?>
            </div>
        </div>
        <div class="one wide column">

        </div>

    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>