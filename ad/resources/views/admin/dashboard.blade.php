@extends('admin_layout')
@section('admin_content')
<section class="wrapper">
    <!-- //market-->
    <div class="market-updates">
        <div class="col-md-3 market-update-gd">
            <div class="market-update-block clr-block-2">
                <div class="col-md-4 market-update-right">
                    <i class="fa fa-eye"> </i>
                </div>
                 <div class="col-md-8 market-update-left">
                 <h4>Khách Hàng</h4>
                <h3>0</h3>
                
              </div>
              <div class="clearfix"> </div>
            </div>
        </div>
        <div class="col-md-3 market-update-gd">
            <div class="market-update-block clr-block-1">
                <div class="col-md-4 market-update-right">
                    <i class="fa fa-users" ></i>
                </div>
                <div class="col-md-8 market-update-left">
                <h4>Người Dùng</h4>
                    <h3>0</h3>
                    
                </div>
              <div class="clearfix"> </div>
            </div>
        </div>
        <div class="col-md-3 market-update-gd">
            <div class="market-update-block clr-block-3">
                <div class="col-md-4 market-update-right">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                </div>
                <div class="col-md-8 market-update-left">
                    <h4>Đơn đặt hàng</h4>
                    <h3>0</h3>
                    
                </div>
              <div class="clearfix"> </div>
            </div>
        </div>
@endsection
@section('admin_footer')
<p><a>Chào Mừng Admin</a></p>
@endsection 