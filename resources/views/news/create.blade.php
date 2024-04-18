@extends('layouts.master')

@section('title')
    News Create
@endsection

@section('content')
    @component('components.breadcrumb')
        @slot('li_1')
            News
        @endslot
        @slot('title')
            News Create
        @endslot
    @endcomponent

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">News Create</h4>

                    <form method="POST" action="{{ route('news.store') }}" enctype="multipart/form-data">

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

    <script type="text/javascript">
        function getSubCategory() {
            var parentCategoryId = $(`select[name="parent_category_id"]`).val();
            var csrfToken = $('meta[name="csrf-token"]').attr('content');
            if (parentCategoryId) {
                // gọi api
                $.ajax({
                    url: "/admin/categories/get-sub-categories",
                    type: "POST",
                    data: {
                        parent_category_id: parentCategoryId,
                        _token: csrfToken,
                    },
                    success: function (respon) {
                        if (respon.data) {
                            $('select[name="category_id"]').empty();
                            if (respon.data.length > 0) {
                                $(`select[name="category_id"]`).prop('disabled', false);
                                $('select[name="category_id"]').append('<option value="">Select category</option>');
                                $.each(respon.data, function(index, item) {
                                    $('select[name="category_id"]').append('<option value="' + item.id + '">' + item.name + '</option>');
                                });
                            }
                            else {
                                $(`select[name="category_id"]`).prop('disabled', true);
                                $('select[name="category_id"]').append('<option value="">There are no categories</option>');
                            }
                            $('select[name="category_id"]').select2();
                        }
                    },
                    errors: function () {
                        alert('Error server!!!');
                    }
                });
            }
            else {
                $(`select[name="category_id"]`).prop('disabled', true);
            }
        }

        $(document).ready(function() {
            getSubCategory();
        })
    </script>
@endsection

@section('css')
    <!-- select2 css -->
    <link href="{{ asset('assets\libs\select2\select2.min.css') }}" rel="stylesheet" type="text/css">
@endsection
