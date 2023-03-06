@extends('admin_layout')
@section('admin_content')
<div class="table-agile-info">
    <div class="panel panel-default">
      <div class="panel-heading">
       Thông tin người mua
      </div>
      {{-- <div class="row w3-res-tb">
        <div class="col-sm-5 m-b-xs">
          <select class="input-sm form-control w-sm inline v-middle">
            <option value="0">Bulk action</option>
            <option value="1">Delete selected</option>
            <option value="2">Bulk edit</option>
            <option value="3">Export</option>
          </select>
          <button class="btn btn-sm btn-default">Apply</button>                
        </div>
        <div class="col-sm-4">
        </div>
        <div class="col-sm-3">
          <div class="input-group">
            <input type="text" class="input-sm form-control" placeholder="Search">
            <span class="input-group-btn">
              <button class="btn btn-sm btn-default" type="button">Go!</button>
            </span>
          </div>
        </div>
      </div> --}}
      <div class="table-responsive">
        <?php
          $message = Session::get('message');
          if($message){
              echo '<span class="text-alert">'.$message.'</span>';
              Session::put('message',null);
          }
          ?>
        <table class="table table-striped b-t b-light">
          <thead>
            <tr>
             
              <th>Tên người mua</th>
              <th>Địa chỉ</th>
              
            
             
            </tr>
          </thead>
          <tbody>
     
                
           @foreach ($order_by_id as $item)
              
                <tr>
              
                    <td>
                       {{ $item->customer_name }}
                    </td>
                    
                     <td>
                       {{ $item->customer_phone }}
                     </td>
                   </tr>
              @break;
           
            @endforeach
          </tbody>
        </table>
      </div>
      <footer class="panel-footer">
       
      </footer>
    </div>
  </div>
    <br>
    <div class="table-agile-info">
        <div class="panel panel-default">
          <div class="panel-heading">
           Thông tin vận chuyển
          </div>
        
          <div class="table-responsive">
            <?php
              $message = Session::get('message');
              if($message){
                  echo '<span class="text-alert">'.$message.'</span>';
                  Session::put('message',null);
              }
              ?>
            <table class="table table-striped b-t b-light">
              <thead>
                <tr>
                 
                  <th>Tên người vận chuyển</th>
                  <th>Địa chỉ</th>
                  <th>SDT</th>
                
                 
                </tr>
              </thead>
              <tbody>
         
                @foreach ($order_by_id as $item)   
               
                <tr>
                  
                 <td>
                    {{ $item->shipping_name }}
                 </td>
                 
                  <td>
                    {{ $item->shipping_address }}
                  </td>
                  <td>
                    {{ $item->shipping_phone }}
                  </td>
                </tr>
                @break;
              @endforeach
              </tbody>
            </table>
          </div>
          <footer class="panel-footer">
           
          </footer>
        </div>
      </div>
    <br>
    <br>
    <div class="table-agile-info">
        <div class="panel panel-default">
          <div class="panel-heading">
            Liệt kê chi tiết đơn hàng
          </div>
          <div class="row w3-res-tb">
            <div class="col-sm-5 m-b-xs">
              <select class="input-sm form-control w-sm inline v-middle">
                <option value="0">Bulk action</option>
                <option value="1">Delete selected</option>
                <option value="2">Bulk edit</option>
                <option value="3">Export</option>
              </select>
              <button class="btn btn-sm btn-default">Apply</button>                
            </div>
            <div class="col-sm-4">
            </div>
            <div class="col-sm-3">
              <div class="input-group">
                <input type="text" class="input-sm form-control" placeholder="Search">
                <span class="input-group-btn">
                  <button class="btn btn-sm btn-default" type="button">Go!</button>
                </span>
              </div>
            </div>
          </div>
          <div class="table-responsive">
            <?php
              $message = Session::get('message');
              if($message){
                  echo '<span class="text-alert">'.$message.'</span>';
                  Session::put('message',null);
              }
              ?>
            <table class="table table-striped b-t b-light">
              <thead>
                <tr>
                  <th style="width:20px;">
                    <label class="i-checks m-b-none">
                      <input type="checkbox"><i></i>
                    </label>
                  </th>
                  <th>Tên sản phẩm</th>
                  <th>Số lượng</th>
                  <th>giá </th>
                  <th>Tổng tiền</th>
                 
                
                  <th style="width:30px;"></th>
                </tr>
              </thead>
              <tbody>
         
                    
                @foreach ($order_by_id as $item)   

                <tr>
                  <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
                  <td>
                    {{ $item->product_name }}
                  </td>
                  <td> {{ $item->product_sales_quantity }}</td>
                 <td> {{ $item->product_price }}</td>
                 <td> {{ $item->product_sales_quantity* $item->product_price}}</td>
                 
                </tr>
                
               @endforeach
               
              </tbody>
            </table>
          </div>
        
        </div>
      </div>
@endsection