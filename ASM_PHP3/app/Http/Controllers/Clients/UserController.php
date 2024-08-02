<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        // bài toán : tìm tên người dùng đăng nhập để hiển thị (chưa làm đc)
        $user = User::query()->get();
        return view('clients.contents.user.account', [
            'user' => $user
        ]);
    }

        // hiển thị đơn hàng
        // code .....
        public function DonHangUser () {
            
        }
        // chỉnh sửa thông tin khách hàng
        // code .....

        
}
