@extends('layouts.admin')
@section('content')
<div class=" mt-4 container ">
    <div class=" mb-lg-0 mb-4">
      <div class="card z-index-2 h-100">
        <div class="card-header pb-0 pt-3 bg-transparent">
          <h6 class="text-capitalize">SẢN PHẨM</h6>
          
        </div>
        <div class="card-body p-3 rounded">
            <div class="white_card_body QA_section">
                <div class="QA_table ">

                    <table class="table  p-0">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">TÊN SP</th>
                                <th scope="col">GIÁ</th>
                                <th scope="col">HÌNH ẢNH</th>
                                <th scope="col">SỐ LƯỢNG</th>
                                <th scope="col">MÔ TẢ</th>
                                <th scope="col">TRẠNG THÁI</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                         <tr>
                            <td class="f_s_14 f_w_400 color_text_2">1</td>
                            <td class="f_s_14 f_w_400 color_text_2">Sản phẩm 1</td>
                            <td class="f_s_14 f_w_400 color_text_2">1000</td>
                            <td class="f_s_14 f_w_400 color_text_2"><img src="" alt="1" srcset=""></td>
                            <td class="f_s_14 f_w_400 color_text_2">30</td>
                            <td class="f_s_14 f_w_400 color_text_2">Mô tả sản phẩm</td>
                            <td>1</td>
                            <td>
                                <a href="">xóa</a>
                                <a href="">sửa</a>
                            </td>

                         </tr>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
      </div>
    </div>
   
  </div>
@endsection