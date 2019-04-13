<!Doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Registration Form</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
        <!------ Include the above in your HEAD tag ---------->
        <link rel="stylesheet" href="../sourse/css/re.css">
    </head>
    <body>
        <div class="container">
            <form action="{{ route('adminblog.store')  }}" method="post" class="beta-form-checkout" enctype="multipart/form-data">
                {!! csrf_field() !!}
                {{ method_field('POST') }}
                <!---heading---->
            <header class="heading"> BLOG</header><hr></hr>
            <!---Form starting---->
            <div class="row ">
                <!--- For Name---->
                <div class="form-group">
                    <div class="col-sm-12">
                        <div class="row">
                            
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <label class="firstname"> Tên   :</label> </div>
                                        <div class="col-xs-8"  >
                                            <input class="form-control" placeholder="Tên blog" name="name_blog" type="text" >
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="col-xs-4">
                                            <label class="firstname"> Hình ảnh   :</label> </div>
                                            <div class="col-xs-8"  >
                                                <input class="form-control" placeholder="Mật khẩu" name="img_blog" type="file">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-xs-4">
                                                <label class="firstname"> Mô tả   :</label> </div>
                                                <div class="col-xs-8"  >
                                                    <input class="form-control" placeholder="Mô tả" name="detail_blog" type="text" >
                                                </div>
                                            </div>
                                        </div>
                                        
                                        
                                        
                                        <div class="col-sm-12" style="padding: 20px 0;">
                                            <div class ="row">
                                                <div class="form-block">
                                                    <div class="col-sm-8 col-sm-offset-4">
                                                        <button type="submit" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Thêm </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </form>
                            </div>
                        </body>
                    </html>