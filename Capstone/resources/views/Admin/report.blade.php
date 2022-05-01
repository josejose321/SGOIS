@extends('layouts.admin1')
@section('title', 'UNC REPORT')


@section('content')
    <div class="container-fluid">
        <h1>REPORTS</h1>
    </div>
    <br><br><br> <br><br><br><br><br>
    @if (Session::has('success'))
        <script>
            swal({
                title: "Success!",
                text: "{{ Session::get('success') }}",
                icon: "success",
                button: "ok!",
            });
        </script>
    @endif
    @if ($errors->any())
        <script>
            swal({
                title: "Successfully Added!",
                text: "{{ $errors->all() }}",
                icon: "success",
                button: "ok!",
            });
        </script>
    @endif


@endsection
