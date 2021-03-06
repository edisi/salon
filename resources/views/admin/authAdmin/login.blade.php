@extends('admin/_layouts.login')

@section('main')
<div class="main-login col-sm-4 col-sm-offset-4">
        <div class="logo"><img src="{{asset('admins/images/saline.png')}}">
        </div>

        <div class="box-login">
            <h3>Login Admin</h3>  
            <p>Silahkan isi Email & Password anda.</p>
            <form class="form-login" action="{{ route('admin.login.submit') }}" method="post">
                {{ csrf_field() }}

                @include('errors/pesan_error') 
                
                <fieldset>
                    <div class="form-group">
                        <span class="input-icon">
                            <input type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}" required autofocus>
                            <i class="icon-user"></i> 
                        </span>
                    </div>
                    <div class="form-group">
                        <span class="input-icon">
                            <input type="password" class="form-control password" name="password" placeholder="Password">
                            <i class="icon-lock"></i>
                            <a class="forgot" href="{{ route('admin.password.request') }}">
                                Lupa Password?
                            </a>
                        </span>
                    </div>
                    <div class="form-actions">                          
                        <button name="submit" type="submit" class="btn btn-bricky pull-right">
                            Login <i class="icon-circle-arrow-right"></i>
                        </button>
                    </div>                      
                </fieldset>
            </form>
        </div>
        
        <div class="copyright">
            &copy; Aplikasi Salon Online
        </div>

    </div>
@endsection

