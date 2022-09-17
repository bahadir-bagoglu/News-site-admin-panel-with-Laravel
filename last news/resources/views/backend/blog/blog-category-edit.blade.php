@extends('backend.app')
@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Haber Kategori Düzenle</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Anasayfa</a></li>
                        <li class="breadcrumb-item active">Haber Kategori</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <form method="post"  id="form-data" >
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Haber Kategori</h3>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Kategoriler</label>
                                    <select class="form-control select2" style="width: 100%;" name="up_categoryId">
                                        <option  value="0"  selected="selected">Üst Kategori</option>
                                        @foreach ($categories as $categoryy)
                                        <option value="{{$categoryy->id}}">{{$categoryy->category_name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Kategori Adı</label>
                                    <input type="text" name="category_name" value="{{$category->category_name}}" class="form-control" placeholder="Kategori Adı Yazınız">
                                </div>

                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Kategori Görünürlüğü</h3><br>
                                </div>
                                <br>
                                <div class="card-body">
                                    <div class="form-group">
                                        <div class="input-group"><br>
                                            <input type="checkbox" name="category_status" {{$category->category_status == 'on' ? 'checked' : ' ' }} checked data-bootstrap-switch><br>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            </div>

                            <div class="card-footer">
                                <button onclick="saveButton()" type="button" class="btn btn-primary">Kaydet</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
</div>

@endsection
@section('js')

<script src="/backend/plugins/select2/js/select2.full.min.js"></script>
<script src="/backend/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<script src="/backend/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>

    <script>
        $(function () {
            //Initialize Select2 Elements
            $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })

            $("input[data-bootstrap-switch]").each(function () {
                $(this).bootstrapSwitch('state', $(this).prop('checked'));
            });
        });
    </script>
    
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script>
    var url = "{{route("blog-category-edit" , $category->id )}}";
    function saveButton() {
    var formdata = document.querySelector('#form-data');
    var form = new FormData(formdata);

    axios({
        method: 'post',
        url: url,
        data: form
    }).then(function (response) {
        console.log(response);
        if (response.data.status == 'success') {
            toastr.success(response.data.content, response.data.title);
        } else {
            toastr.error(response.data.content, response.data.title);
        }
    })
}  

</script>


@endsection
@section('css')
    <link rel="/backend/stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <link rel="/backend/stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
@endsection
@endsection