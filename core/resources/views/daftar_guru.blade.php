@extends('templates.template')

@section('main-content')
    <div class="ui container">
        <div class="ui secondary pointing menu">
            <a class="item" href="{{url('/')}}">
                <i class="home icon"></i>
                Halaman Utama
            </a>
            <div class="right menu">
                <a href="{{url('login')}}" class="item">
                    Masuk
                </a>
                <a href="{{url('daftar/guru')}}" class="item  active">
                    Daftar
                </a>
            </div>
        </div>

        <div class="ui top attached tabular menu">
            <div class="active item"><a href="{{url('daftar/guru')}}">Guru</a></div>
            <div class="item"><a href="{{url('daftar/siswa')}}">Siswa</a></div>
        </div>
        <div class="ui bottom attached active tab segment">
            <div class="ui grid">
                <div class="eight wide column">
                    Anda mendaftarkan diri sebagai Guru.
                </div>
                <div class="eight wide column">
                    <form class="ui form" method="post" action="{{url('daftar/guru')}}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>

                        @if (count($errors) > 0)
                            <div class="ui ignored negative message">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="field">
                            <label>Email</label>
                            <input type="text" name="email">
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
                            <label>Password</label>
                            <input type="password" name="password">
                        </div>
                        <div class="field">
                            <label>Sekolah</label>
                            <select class="ui fluid dropdown" name="sekolah">
                                <option value="">-</option>
                                <?php
                                foreach ($schools as $school){
                                ?>
                                <option value="<?php echo $school->id;?>"><?php echo $school->nama_sekolah;?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <button class="ui button" type="submit">Submit</button>
                    </form>

                </div>
            </div>
        </div>

    </div>

@endsection