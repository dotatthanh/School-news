@extends('layouts.master')

@section('title')
    News Edit
@endsection

@section('content')
    @component('components.breadcrumb')
        @slot('li_1')
            News
        @endslot
        @slot('title')
            News Edit
        @endslot
    @endcomponent

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">News Edit</h4>

                    <form method="POST" action="{{ route('news.update', $data_edit->id) }}" enctype="multipart/form-data">
                        @method('PUT')
                        @include('news._form')

                    </form>
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
    </div>
@endsection

@section('script')
    <!--tinymce js-->
    <script src="{{ asset('assets/libs/tinymce/tinymce.min.js') }}"></script>

    <!-- init js -->
    <script src="{{ asset('assets/js/pages/form-editor.init.js') }}"></script>
    <!-- select 2 plugin -->
    <script src="{{ asset('assets\libs\select2\select2.min.js') }}"></script>

    <!-- init js -->
    <script src="{{ asset('assets\js\pages\ecommerce-select2.init.js') }}"></script>
    <!-- form advanced init -->
    <script src="{{ asset('assets\js\pages\form-advanced.init.js') }}"></script>
@endsection

@section('css')
    <!-- select2 css -->
    <link href="{{ asset('assets\libs\select2\select2.min.css') }}" rel="stylesheet" type="text/css">
@endsection
