@extends('pelanggan/_layouts.template')

@section('title', 'Haii... Pelanggan')

@section('bread')

@endsection

@section('main')

    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-primary bg-pt" style="background-image:url({{asset('pelanggan/images/banner/bnr1.jpg')}});">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">Login</h1>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="#">Home</a></li>
							<li>Login</li>
						</ul>
					</div>
					<!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- contact area -->
        <div class="section-full content-inner shop-account">
            <!-- Product -->
            <div class="container">
                <div class="row">
					<div class="col-md-12 text-center">
						<h3 class="font-weight-700 m-t0 m-b20">Sudah Punya Akun?</h3>
					</div>
				</div>
                <div class="row dzseth">
					<div class="col-lg-6 col-md-12 col-sm-12 m-b30">
						<div class="p-a30 border-1 seth">
							<div class="tab-content">
									<h4 class="font-weight-700">Pelanggan Baru</h4>
									<p class="font-weight-600">Pelanggan yang belum punya akun, harus membuat akun pada aplikasi terlebih dahulu.</p>
									<a class="site-button m-r5 button-lg radius-no" href="{{url('daftar-pelanggan')}}">Buat Akun</a>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-12 col-sm-12 m-b30">
						<div class="p-a30 border-1">
							<div class="tab-content nav">
								<form class="tab-pane active col-12 p-a0" action="{{ route('login.submit') }}" method="post">
								{{ csrf_field() }}

								@include('errors/pesan_error') 
									<h4 class="font-weight-700">LOGIN</h4>
									<p class="font-weight-600">Masukkan Email dan Password anda.</p>
									<div class="form-group">
										<label class="font-weight-700">E-MAIL *</label>
										<input type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}" required>
									</div>
									<div class="form-group">
										<label class="font-weight-700">PASSWORD *</label>
										<input type="password" class="form-control password" name="password" placeholder="Password">
									</div>
									<div class="text-left">
										<button name="submit" type="submit" class="site-button m-r5 button-lg radius-no">login</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
            <!-- Product END -->
		</div>
		<div class="section-full p-t50 p-b20 bg-gray text-black shop-action">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-12">
						<div class="icon-bx-wraper left m-b30">
							<div class="icon-md text-black radius"> 
								<a href="#" class="icon-cell text-black"><i class="fa fa-gift"></i></a> 
							</div>
							<div class="icon-content">
								<h5 class="dlab-tilte font-20">Free shipping on orders $60+</h5>
								<p class="font-14">Order more than 60$ and you will get free shippining Worldwide. More info.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12">
						<div class="icon-bx-wraper left m-b30">
							<div class="icon-md text-black radius"> 
								<a href="#" class="icon-cell text-black"><i class="fa fa-plane"></i></a> 
							</div>
							<div class="icon-content">
								<h5 class="dlab-tilte font-20">Worldwide delivery</h5>
								<p class="font-14">We deliver to the following countries: USA, Canada, Europe, Australia</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12">
						<div class="icon-bx-wraper left m-b30">
							<div class="icon-md text-black radius"> 
								<a href="#" class="icon-cell text-black"><i class="fa fa-history"></i></a> 
							</div>
							<div class="icon-content">
								<h5 class="dlab-tilte font-20">60 days money back guranty!</h5>
								<p class="font-14">Not happy with our product, feel free to return it, we will refund 100% your money!</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
        <!-- contact area  END -->
    </div>
{{--     
<div class="main-login col-sm-4 col-sm-offset-4">
        <div class="logo"><img src="{{asset('admins/images/saline.png')}}">
        </div>

        <div class="box-login">
            <h3>Login Pelanggan</h3>  
            <p>Silahkan isi Email & Password anda.</p>
            <form class="form-login" action="{{ url('/login') }}" method="post">
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
                            <a class="forgot" href="{{ url('/password/reset') }}">
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

    </div> --}}
@endsection

