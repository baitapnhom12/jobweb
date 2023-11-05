<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Huấn CV</title>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    @include('pages.header')
    <div class="container">
        <!-- content -->
        <div class="content">
            @yield('content')
            @include('pages.sidebar')
        </div>
        <!-- end-content -->
    </div>
    @include('pages.footer')

    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="
        crossorigin="anonymous"></script>
        <script>
            function ChangeToSlug() {
    
                var slug;
    
                //Lấy text từ thẻ input title 
                slug = document.getElementById("slug").value;
                slug = slug.toLowerCase();
                //Đổi ký tự có dấu thành không dấu
                slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
                slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
                slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
                slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
                slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
                slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
                slug = slug.replace(/đ/gi, 'd');
                //Xóa các ký tự đặt biệt
                slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
                //Đổi khoảng trắng thành ký tự gạch ngang
                slug = slug.replace(/ /gi, "-");
                //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
                //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
                slug = slug.replace(/\-\-\-\-\-/gi, '-');
                slug = slug.replace(/\-\-\-\-/gi, '-');
                slug = slug.replace(/\-\-\-/gi, '-');
                slug = slug.replace(/\-\-/gi, '-');
                //Xóa các ký tự gạch ngang ở đầu và cuối
                slug = '@' + slug + '@';
                slug = slug.replace(/\@\-|\-\@|\@/gi, '');
                //In slug ra textbox có id “slug”
                document.getElementById('convert_slug').value = slug;
            }
        </script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js" type="text/javascript"></script>
    <script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/38.1.1/classic/ckeditor.js"></script>
    <script src="{{ asset('Script/index.js') }}"></script>
    <script src="{{ asset('Script/validate.js') }}"></script>
    <script>
        $(document).ready(function() {
     $('[title="Hosted on free web hosting 000webhost.com. Host your own website for FREE."]').hide();
 }); 
    </script>
    @if (session('sussces_user'))
    <script>
        swal("Thành công", "Đăng kí tài khoản thành công", "success");
    </script>
    @endif
    
    @if (session('fail_user'))
    <script>
        swal("Lỗi", "Gmail đã được sử dụng", "error");
    </script>
    @endif

    @if (session('fail_login'))
    <script>
        swal("Thất bại", "Sai tài khoản hoặc mật khẩu", "error");
    </script>
    @endif
    @if (session('fail_job'))
    <script>
        swal("Thất bại", "Công việc này đã có người đăng", "error");
    </script>
    @endif

    @if (session('customer'))
    <script>
         swal("Thành công", "Bạn đã ứng tuyển thành công", "success");
         setTimeout(() => {
            window.location.reload(1);
         }, 3000);
    </script>
    @endif
    @if (session('delete_customer'))
    <script>
         swal("Thành công", "Xóa thành công", "success");
         setTimeout(() => {
            window.location.reload(1);
         }, 3000);
    </script>
    @endif
    

    @if (session('insert_job'))
    <script>
         swal("Thành công", "Đã thêm công việc mới", "success");
    </script>
    @endif
    @if (session('delete_job'))
    <script>
         swal("Thành công", "Xóa thành công", "success");
    </script>
    @endif
    @if (session('update_job'))
    <script>
         swal("Thành công", "Cập nhật thành công", "success");
    </script>
    @endif

    <script>
        ClassicEditor
                .create( document.querySelector( '#editor' ) )
                .then( editor => {
                        console.log( editor );
                } )
                .catch( error => {
                        console.error( error );
                } );
</script>

</body>

</html>
