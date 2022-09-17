@extends('backend.app')
@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Reklam Ekle</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Anasayfa</a></li>
                        <li class="breadcrumb-item active">Reklamlar</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <form action"" method="post" id="form-data" enctype="multipart/form-data">
                @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Reklam</h3>
                        </div>
                        <div class="card-body">
                            <center><img id="coverImageShow" width="70%" height="350px"></center>
                            <br>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Reklam Resmi</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input id="coverImage" type="file" name="image" class="custom-file-input"
                                               id="customFile">
                                        <label class="custom-file-label" for="customFile">Dosya seçin</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Şirket İsmi ve Reklam İçeriği</label>
                                <input type="text" name="slider_name" class="form-control" placeholder="Slider Başlık Yazınız">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Reklam Kaynağı Url</label>
                                <input type="text" name="slider_url" class="form-control" placeholder="Slider Url Yazınız">
                            </div>

                            
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Reklam  Görünürlüğü</h3><br>
                                </div>
                                <br>
                                <div class="card-body">
                                    <div class="form-group">
                                        <div class="input-group"><br>
                                            <input type="checkbox" name="slider_status" checked data-bootstrap-switch>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="card-footer">
                            <button onclick="saveButton()" type="button" class="btn btn-primary">Yayınla</button>
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

        $("input[data-bootstrap-switch]").each(function(){
            $(this).bootstrapSwitch('state', $(this).prop('checked'));
        });
    });
</script>

<script type="text/javascript">
    $(document).ready(function () {
        bsCustomFileInput.init();
    });
</script>

<script>
    $("#coverImage").change(function () {
        var input = this;
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#coverImageShow').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    });
</script>

<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script>
    var url = "{{route("slider-add")}}";
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