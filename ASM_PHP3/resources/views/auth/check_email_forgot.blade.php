<div style="width:600px; margin:0 auto">
     <div style="text-align:center">
          <h2></h2>
          <p>Email này để giúp bạn lấy lại mật khẩu tài khoản bạn đã quên</p>
          <p>Vui lòng click vào link dưới đây để đặt lại mật khẩu</p>
          <p>Chú ý: mã xác nhận trong link chỉ có hiệu lực trong vòng 72 giờ</p>
          <p>
               <a href="{{route('getpass', ['user' => $user->id, 'token' => $user->token])}}" 
               style="display: inline:block; background:green; color:#fff; padding:7px 25px; font-weight:bold"> </a>Đặt lại mật khẩu</p>
     </div>

</div>