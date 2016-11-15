<?php $__env->startSection('css'); ?>
    #text-area-kegiatan{
    resize: none;
    }
<?php $__env->stopSection(); ?>
<?php $__env->startSection('main-content'); ?>
    <div class="ui container">
        <div class="ui secondary pointing menu">
            <a class="item" href="<?php echo e(url('beranda')); ?>">
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
                <a class="item active" href="<?php echo e(url('profil')); ?>">
                    Profil
                </a>
                <a href="<?php echo e(url('/')); ?>" class="item">
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
            <?php /*<div class="ui card" style="width: 100%;">
                <div class="content">
                    <div class="header">Akun</div>
                    <div class="meta">Data akun anda.
                    </div>
                    <div class="description">
                        <div class="ui form">
                            <div class="inline fields">
                                <div class="sixteen wide field">
                                    <div class="four wide field">
                                    <label>Sekolah</label>
                                        </div>
                                    <div class="twelve wide field">
                                    SMPN 01 Bandung
                                    </div>
                                </div>
                            </div>
                            <div class="inline fields">
                                <div class="sixteen wide field">
                                    <div class="four wide field">
                                        <label>Nama Lengkap</label>
                                    </div>
                                    <div class="twelve wide field">
                                        <input type="text" placeholder="Hendra Permana">
                                    </div>
                                </div>
                            </div>
                            <div class="inline fields">
                                <div class="sixteen wide field">
                                    <div class="four wide field">
                                        <label>Biografi</label>
                                    </div>
                                    <div class="twelve wide field">
                                        <textarea rows="5" id="text-area-kegiatan">Pelajar dari SMPN 01 Bandung</textarea>
                                    </div>
                                </div>
                            </div>
                            <hr/>
                            <div class="extra content">
                                <button class="ui teal button"><i class="send outline icon"></i> Kirim</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>*/ ?>
            <div class="ui card" style="width: 100%">

                <div class="content">
                    <div class="header">Akun</div>
                    <div class="meta">Data akun anda.
                    </div>
                    <div class="description">
                        <div class="ui form">
                            <div class="inline fields">
                                <div class="sixteen wide field">
                                    <div class="four wide field">
                                        <label>Sekolah</label>
                                    </div>
                                    <div class="twelve wide field">
                                        SMPN 01 Tasikmalaya
                                    </div>
                                </div>
                            </div>
                            <div class="inline fields">
                                <div class="sixteen wide field">
                                    <div class="four wide field">
                                        <label>Username</label>
                                    </div>
                                    <div class="twelve wide field">
                                        @hynra
                                    </div>
                                </div>
                            </div>
                            <div class="inline fields">
                                <div class="sixteen wide field">
                                    <div class="four wide field">
                                        <label>Nama Lengkap</label>
                                    </div>
                                    <div class="twelve wide field">
                                        <input type="text" placeholder="Hendra Permana">
                                    </div>
                                </div>
                            </div>
                            <div class="inline fields">
                                <div class="sixteen wide field">
                                    <div class="four wide field">
                                        <label>Biografi</label>
                                    </div>
                                    <div class="twelve wide field">
                                        <textarea rows="5" id="text-area-kegiatan">Pelajar dari SMPN 01 Tasikmalaya</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="extra content">
                    <button class="ui teal button"><i class="edit icon"></i> Ubah</button>
                </div>

            </div>
            <div class="ui card" style="width: 100%">

                <div class="content">
                    <div class="header">Sandi</div>
                    <div class="meta">Ubah kata sandi.
                    </div>
                    <div class="description">
                        <div class="ui form">
                            <div class="inline fields">
                                <div class="sixteen wide field">
                                    <div class="four wide field">
                                        <label>Sandi saat ini</label>
                                    </div>
                                    <div class="twelve wide field">
                                        <input type="password">
                                    </div>
                                </div>
                            </div>
                            <div class="inline fields">
                                <div class="sixteen wide field">
                                    <div class="four wide field">
                                        <label>Sandi baru</label>
                                    </div>
                                    <div class="twelve wide field">
                                        <input type="password">
                                    </div>
                                </div>
                            </div>
                            <div class="inline fields">
                                <div class="sixteen wide field">
                                    <div class="four wide field">
                                        <label>Ulangi sandi baru</label>
                                    </div>
                                    <div class="twelve wide field">
                                        <input type="password">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="extra content">
                    <button class="ui teal button"><i class="edit icon"></i> Ubah</button>
                </div>

            </div>
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
                                        <i class="star icon" style="color:#ffb70a;" ></i>
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
    <?php /*<div class="ui grid">
        <div class="one wide column"></div>
        <div class="fourteen wide column">

            <form class="ui form ">
                <div class="field">
                    <select class="ui fluid dropdown">
                        <option value="">Filter Kategori</option>
                        <option value="AL">Beribadah</option>
                        <option value="AL">Berdoa</option>
                        <option value="AL">Kebersihan</option>
                        <option value="AL">Kemanusiaan</option>
                        <option value="AL">Eksperimen Lapangan</option>
                    </select>
                </div>
            </form>
            <br/>
            <div class="ui link cards centered aligned">
                <div class="card">
                    <div class="image">
                        <img src="<?php echo e(url('/')); ?>/core/resources/assets/img/ibadah.png">
                    </div>
                    <div class="content">
                        <div class="header">Matt Giampietro</div>
                        <div class="meta">
                            <a>Friends</a>
                        </div>
                        <div class="description">
                            Matthew is an interior designer living in New York.
                        </div>
                    </div>
                    <div class="extra content">
      <span class="right floated">
        Joined in 2013
      </span>
                        <span>
        <i class="user icon"></i>
        75 Friends
      </span>
                    </div>
                </div>
                <div class="card">
                    <div class="image">
                        <img src="<?php echo e(url('/')); ?>/core/resources/assets/img/game-farming.png">
                    </div>
                    <div class="content">
                        <div class="header">Molly</div>
                        <div class="meta">
                            <span class="date">Coworker</span>
                        </div>
                        <div class="description">
                            Molly is a personal assistant living in Paris.
                        </div>
                    </div>
                    <div class="extra content">
      <span class="right floated">
        Joined in 2011
      </span>
                        <span>
        <i class="user icon"></i>
        35 Friends
      </span>
                    </div>
                </div>
                <div class="card">
                    <div class="image">
                        <img src="<?php echo e(url('/')); ?>/core/resources/assets/img/belajar.png">
                    </div>
                    <div class="content">
                        <div class="header">Elyse</div>
                        <div class="meta">
                            <a>Coworker</a>
                        </div>
                        <div class="description">
                            Elyse is a copywriter working in New York.
                        </div>
                    </div>
                    <div class="extra content">
      <span class="right floated">
        Joined in 2014
      </span>
                        <span>
        <i class="user icon"></i>
        151 Friends
      </span>
                    </div>
                </div>
                <div class="card">
                    <div class="image">
                        <img src="<?php echo e(url('/')); ?>/core/resources/assets/img/game-farming.png">
                    </div>
                    <div class="content">
                        <div class="header">Molly</div>
                        <div class="meta">
                            <span class="date">Coworker</span>
                        </div>
                        <div class="description">
                            Molly is a personal assistant living in Paris.
                        </div>
                    </div>
                    <div class="extra content">
      <span class="right floated">
        Joined in 2011
      </span>
                        <span>
        <i class="user icon"></i>
        35 Friends
      </span>
                    </div>
                </div>
                <div class="card">
                    <div class="image">
                        <img src="<?php echo e(url('/')); ?>/core/resources/assets/img/belajar.png">
                    </div>
                    <div class="content">
                        <div class="header">Elyse</div>
                        <div class="meta">
                            <a>Coworker</a>
                        </div>
                        <div class="description">
                            Elyse is a copywriter working in New York.
                        </div>
                    </div>
                    <div class="extra content">
      <span class="right floated">
        Joined in 2014
      </span>
                        <span>
        <i class="user icon"></i>
        151 Friends
      </span>
                    </div>
                </div>
                <div class="card">
                    <div class="image">
                        <img src="<?php echo e(url('/')); ?>/core/resources/assets/img/ibadah.png">
                    </div>
                    <div class="content">
                        <div class="header">Matt Giampietro</div>
                        <div class="meta">
                            <a>Friends</a>
                        </div>
                        <div class="description">
                            Matthew is an interior designer living in New York.
                        </div>
                    </div>
                    <div class="extra content">
      <span class="right floated">
        Joined in 2013
      </span>
                        <span>
        <i class="user icon"></i>
        75 Friends
      </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="one wide column"></div>
    </div>*/ ?>

    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>