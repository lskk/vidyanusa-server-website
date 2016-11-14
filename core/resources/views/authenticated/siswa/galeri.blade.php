@extends('templates.template')
@section('css')
    #text-area-kegiatan{
    resize: none;
    }
@endsection
@section('main-content')
    <?php
    $user = Auth::user();
    $users_info = DB::table('users')->where('id', '=', $user->id)->get();
    $get_points = DB::table('points')->where('id_user', '=', $user->id)->get();

    $bio = NULL;
    $photo_profile = NULL;
    $poinf = NULL;
    foreach ($users_info as $user_info) {
        $bio = $user_info->bio;
        $photo_profile = $user_info->foto_profil;
    }
    foreach ($get_points as $get_point) {
        $poinf = $get_point->poin;
    }
    ?>
    <div class="ui container">
        <div class="ui secondary pointing menu">
            <a class="item" href="{{url('beranda')}}">
                <i class="home icon"></i>
                Beranda
            </a>
            <a class="item active" href="{{url('galeri')}}">
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
            {{--<a class="item" href="{{url('/')}}">
                Profile
            </a>--}}
            <div class="right menu">
                <a class="item" href="{{url('profil')}}">
                    Profil
                </a>
                <a href="{{url('logout')}}" class="item">
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
            {{--<div class="ui segment" align="center">
                <div class="ui small image">
                    <img src="{{url('/')}}/core/resources/assets/img/student.png" class="ui medium rounded image">
                </div>
                <div class="ui list" align="left">
                    <div class="item"><h2>Ezhar</h2></div>
                    <div class="item"><i class="university icon"></i> SMPN 01 Bandung</div>
                    <div class="item"><i class="star icon"></i> 300</div>
                </div>
            </div>--}}
            <div class="ui cards">
                <div class="card">
                    <div class="image">
                        <?php
                        if($photo_profile == NULL){
                        ?>
                        <img src="http://167.205.7.228:8089/VidyaNusa/default-profile-picture.png"
                             class="rounded image">
                        <?php
                        }else {
                        ?>
                        <img src="<?php echo $photo_profile;?>" class="rounded image">
                        <?php
                        }
                        ?>
                    </div>
                    <div class="content">
                        <div class="header"><?php echo $user->nama_lengkap;?></div>
                        <div class="meta">
                            <a>@<?php echo $user->username;?></a>
                        </div>
                        <div class="description">
                            <?php echo $bio;?>
                        </div>
                    </div>
                    <div class="extra content">
                        <span>
        <i class="star icon" style="color:#ffb70a;"></i>
                            <?php
                            if($poinf == NULL || $poinf == ''){
                                echo 0;
                            }else{ echo $poinf; }
                            ?> Poin
      </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="eight wide column">

                <div class="ui card four wide column" style="width: 100%;">
                    <div class="content">

                        {{--<div class="header">Tag kegiatan</div>
                        <div class="meta">4 tag</div>
                        <div class="description">
                            <div class="ui list">
                                <a class="item">
                                    <div class="content">
                                        <div class="header" style="color:#D01919;">Beribadah</div>
                                        <div class="description"><i class="file image outline icon"></i>1 <i class="file video outline icon"></i>0 video
                                        </div>
                                    </div>
                                </a>
                                <a class="item">
                                    <div class="content">
                                        <div class="header" style="color:#FBBD08;">Belajar</div>
                                        <div class="description"><i class="file image outline icon"></i>1 <i class="file video outline icon"></i>0 video
                                        </div>
                                    </div>
                                </a>
                                <a class="item">
                                    <div class="content">
                                        <div class="header" style="color:#F2711C;">Kemanusiaan</div>
                                        <div class="description"><i class="file image outline icon"></i>1 <i class="file video outline icon"></i>0 video
                                        </div>
                                    </div>
                                </a>
                                <a class="item">
                                    <div class="content">
                                        <div class="header" style="color:#21BA45;">Kebersihan</div>
                                        <div class="description"><i class="file image outline icon"></i>1 <i class="file video outline icon"></i>0 video
                                        </div>
                                    </div>
                                </a>

                            </div>
                        </div>--}}

                        {{--<div class="ui grid" align="center">
                            <div class="four wide column">Beribadah</div>
                            <div class="four wide column">Belajar</div>
                            <div class="four wide column">Kebersihan</div>
                            <div class="four wide column">Kemanusiaan</div>
                        </div>--}}


                        <div class="content">

                            <div class="header">
                                <h3>Hashtag</h3>
                            </div>
                            <div class="meta">
                                Setiap media yang sudah di post memiliki hashtag.
                            </div>
                        </div>
                        <br/>
                        <div class="extra content">
                            <div class="ui four buttons">

                                <div class="ui basic red button"><i class="hashtag icon"></i>Beribadah</div>
                                <div class="ui basic orange button"><i class="hashtag icon"></i>Kemanusiaan</div>
                                <div class="ui basic green button"><i class="hashtag icon"></i>Kebersihan</div>
                                <div class="ui basic yellow button"><i class="hashtag icon"></i>Belajar</div>
                            </div>
                        </div>


                    </div>
                </div>



                <div class="ui card" style="width: 100%;">

                    <form class="ui form " style="margin:1em;">
                        <div class="field">
                            <select class="ui fluid dropdown">
                                <option value="">Filter Tag</option>
                                <option value="AL">Beribadah</option>
                                <option value="AL">Berdoa</option>
                                <option value="AL">Kebersihan</option>
                                <option value="AL">Kemanusiaan</option>
                                {{--<option value="AL">Eksperimen Lapangan</option>--}}
                            </select>
                        </div>
                    </form>
                    <br/>
                    <div class="ui link cards centered aligned">
                        <div class="red card">
                            <div class="image">
                                <img src="{{url('/')}}/core/resources/assets/img/ibadah.png">
                            </div>
                            <div class="content">
                                <div class="header">Sholat berjamaah</div>
                                <div class="meta">
                                    <span>#Beribadah</span>
                                </div>
                                <div class="description">
                                    <i class="marker icon"></i> jl Dago, Bandung, Jawa Barat
                                </div>
                            </div>
                            <div class="extra content">
      <span class="right floated">
        14 jam yang lalu
      </span>

                            </div>
                        </div>
                        <div class="yellow card">
                            <div class="image">
                                <img src="{{url('/')}}/core/resources/assets/img/game-farming.png">
                            </div>
                            <div class="content">
                                <div class="header">Belajar via Game</div>
                                <div class="meta">
                                    <span class="date">#Belajar</span>
                                </div>
                                <div class="description">
                                    <i class="marker icon"></i> jl Buah Batu, Bandung, Jawa Barat
                                </div>
                            </div>
                            <div class="extra content">
      <span class="right floated">
        15 jam yang lalu
      </span>

                            </div>
                        </div>
                        <div class="green card">
                            <div class="image">
                                <img src="{{url('/')}}/core/resources/assets/img/kebersihan.png">
                            </div>
                            <div class="content">
                                <div class="header">Membersihkan halaman rumah</div>
                                <div class="meta">
                                    <span class="date">#Kebersihan</span>
                                </div>
                                <div class="description">
                                    <i class="marker icon"></i> jl Burangrang, Bandung, Jawa Barat
                                </div>
                            </div>
                            <div class="extra content">
      <span class="right floated">
        17 jam yang lalu
      </span>

                            </div>
                        </div>
                        <div class="orange card">
                            <div class="image">
                                <img src="{{url('/')}}/core/resources/assets/img/kemanusiaan.png">
                            </div>
                            <div class="content">
                                <div class="header">Membantu korban bencana</div>
                                <div class="meta">
                                    <span>#Kemanusiaan</span>
                                </div>
                                <div class="description">
                                    <i class="marker icon"></i> Garut, Jawa Barat
                                </div>
                            </div>
                            <div class="extra content">
      <span class="right floated">
        2 hari yang lalu
      </span>

                            </div>
                        </div>
                    </div>

                    <br/>
                </div>

        </div>
        <div class="three wide column">
            <div class="ui card">

                <div class="content">
                    <a class="header">Poin tertinggi</a>
                    {{--<div class="meta">
                        <span class="date">Terakhir update 2016</span>
                    </div>--}}
                    <div class="description">
                        <div class="ui divided items">
                            <div class="item">
                                <div class="ui tiny image">
                                    <img src="{{url('/')}}/core/resources/assets/img/student2.png">
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
                                    <img src="{{url('/')}}/core/resources/assets/img/student4.png">
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
                                    <img src="{{url('/')}}/core/resources/assets/img/student3.png">
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
                {{--<div class="extra content">
                    <a>
                        <i class="user icon"></i>
                        22 Friends
                    </a>
                </div>--}}
            </div>
            <div class="ui card">

                <div class="content">
                    <a class="header">Permainan</a>
                    {{--<div class="meta">
                        <span class="date">Terakhir update 2016</span>
                    </div>--}}
                    <div class="description">
                        <div class="ui divided items">
                            <div class="item">
                                <div class="content">
                                    <div class="meta">
                                        <a href="{{url('/')}}/core/resources/assets/swf/1.swf" target="_blank"
                                           style="color: #666;">
                                            Pecahan level 1
                                        </a>
                                    </div>

                                </div>

                            </div>
                            <div class="item">
                                <div class="content">
                                    <div class="meta">
                                        <a href="{{url('/')}}/core/resources/assets/swf/2.swf" target="_blank"
                                           style="color: #666;">
                                            Pecahan level 2
                                        </a>
                                    </div>
                                </div>

                            </div>
                            <div class="item">
                                <div class="content">
                                    <div class="meta">
                                        <a href="{{url('/')}}/core/resources/assets/swf/3.swf" target="_blank"
                                           style="color: #666;">
                                            Pecahan level 3
                                        </a>
                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                {{--<div class="extra content">
                    <a>
                        <i class="user icon"></i>
                        22 Friends
                    </a>
                </div>--}}
            </div>
        </div>
        <div class="one wide column">

        </div>

    </div>
    {{--<div class="ui grid">
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
                        <img src="{{url('/')}}/core/resources/assets/img/ibadah.png">
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
                        <img src="{{url('/')}}/core/resources/assets/img/game-farming.png">
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
                        <img src="{{url('/')}}/core/resources/assets/img/belajar.png">
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
                        <img src="{{url('/')}}/core/resources/assets/img/game-farming.png">
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
                        <img src="{{url('/')}}/core/resources/assets/img/belajar.png">
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
                        <img src="{{url('/')}}/core/resources/assets/img/ibadah.png">
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
    </div>--}}

    </div>

@endsection