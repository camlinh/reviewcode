@extends('admins.admin')
@section('content-admin')
<section id="main-content">
  <section class="wrapper">
    <h3><i class="fa fa-angle-right"></i> Quản lý nông sản</h3>
    
    <!-- row -->
    <div class="row mt">
      <div class="col-md-12">
        <div class="content-panel">
          <table class="table table-striped table-advance table-hover">
            <h4><i class="fa fa-angle-right"></i></h4>
            <hr>
            <thead>
              <tr>
                
                <th class="hidden-phone">Tên nông sản</th>
                <th>Loại</th>
                <th>Thời gian thu hoạch</th>
                <th>Giá/kg</th>
                <th>Khối lượng</th>
                <th>Mô tả</th>
                <th>Chủ sản phẩm</th>
                <th>Ngày tạo</th>
                <th>Hình ảnh</th>
              </tr>
            </thead>
            @foreach($new_product as $new)
            <tbody>
              <tr>
                
                <td class="hidden-phone">{{$new->name_product}}</td>
                <td>{{$new->id_type_product}}</td>
                <td>{{$new->time_harvest}}</td>
                <td>{{$new->Price_kg}}</td>
                <td>{{$new->amout}}</td>
                <td>{{$new->detail_product}}</td>
                <th>{{$new->name}}</th>
                <td>{{$new->phone}}</td>
                
                <td><figure>
                  <img class="card-img-top img-fluid adminimg" src="sourse/img/features/{{$new->img_product}}" alt="Card image cap">
                </figure></td>
                <td></td>
                
                <td>
                  
                  <form action="{{route('adminproduct.destroy', $new->id_product)}}" class="submitDelete" method="post" >
                    {!! csrf_field() !!}
                    {{ method_field('DELETE') }}
                    <button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                  </form>
                </td>
              </tr>
              
            </tbody>
            @endforeach
          </table>
          
        </div>
        <!-- /content-panel -->
      </div>
      <!-- /col-md-12 -->
    </div>
    <!-- /row -->
    
  </section>
</section>
@endsection