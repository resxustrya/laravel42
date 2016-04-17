

@extends('home')

@section('content')

    <div class="preloader-wrapper big active" id="loader">
        <div class="spinner-layer spinner-blue-only">
            <div class="circle-clipper left">
                <div class="circle"></div>
            </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
        </div>
    </div>

    <form action="/upload" id="myform" method="POST">
        <div class="file-field input-field">
            <div class="btn">
                <span>File</span>
                <input type="file" id="file" name="photo">
            </div>
            <div class="file-path-wrapper">
                <input class="file-path validate" type="text">
            </div>
            <input type="submit" id="submit" value="submit" class="waves-effect waves-light btn" />
        </div>
    </form>
    <script>
    /*
        var files;
        $(document).ready(function() {
            $('#loader').hide();
            $('#file').on('change',prepareUpload);

            $('#submit').click(function(event) {
                event.stopPropagation();
                //event.preventDefault();

                $('#myform').hide();
                $('#loader').show();

                var data = new FormData();
                $.each(file, function(key, value){
                    data.append(key,value);
                });

            })
        });

        function prepareUpload(event) {
            files = event.target.files;
        }
        function showToast() {
            Materialize.toast('I am a toast!', 3000, 'rounded')
        }*/
    </script>
@stop