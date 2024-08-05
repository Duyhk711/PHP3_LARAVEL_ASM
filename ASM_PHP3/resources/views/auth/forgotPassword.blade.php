@extends('layouts.clientShop')

@section('content')
    <div class="ltn__login-area pb-110">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area text-center">
                        <h3 class="section-title">Lấy lại mật khẩu </h3>
                        <p>Vui lòng nhập email mà bạn đã đăng kí tài khoản trên hệ thống của chúng tôi</p>
                       
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="account-login-inner">
                        <form method="POST" action="{{ route('postforgetpass') }}" class="ltn__form-box contact-form-box">
                            @csrf
                              <label for="">Email</label>
                            <input type="text" name="email" placeholder="Email*">
                            @error('email') <small class="help-block">{{$message}} </small> @enderror


                            <div class="btn-wrapper">
                                <button class="theme-btn-1 btn reverse-color btn-block" type="submit">gửi email xác nhận</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- LOGIN AREA END -->
@endsection
