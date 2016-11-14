@extends('templates.template')

@section('main-content')
    <div class="ui container">
    <div class="ui secondary pointing menu">
        <a class="item" href="{{url('/')}}">
            <i class="home icon"></i>
            Halaman Utama
        </a>
        <div class="right menu">
            <a href="{{url('login')}}" class="item active">
                Masuk
            </a>
            <a href="{{url('daftar/guru')}}" class="item">
                Daftar
            </a>
        </div>
    </div>

    <div class="ui segment">
        <div class="ui grid">
            <div class="eight wide column">
                <form class="ui form" method="post" action="{{url('login')}}">
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
                    @if ( Session::has('message') )
                        <div class="ui ignored negative message">
                            {{ Session::get('message') }}
                        </div>
                    @endif
                    <div class="field">
                        <label>Email</label>
                        <input type="email" name="email">
                    </div>
                    <div class="field">
                        <label>Sandi</label>
                        <input type="password" name="password">
                    </div>

                    <button class="ui button" type="submit">Submit</button>
                    {{--<a class="ui button" href="beranda">Kirim</a>--}}
                </form>

            </div>


            <div class="eight wide column">
                Silahkan masuk menggunakan akun anda ketika berhasil mendaftar ke Vidyanusa.
                Apabila belum memiliki akun, silahkan daftar <a href="{{url('daftar/guru')}}">disini</a>.
            </div>
        </div>
    </div>
    </div>

@endsection