@extends('layouts.master')

@section('title')
    Category List
@endsection

@section('content')
    @component('components.breadcrumb')
        @slot('li_1')
            Category
        @endslot
        @slot('title')
            Category List
        @endslot
    @endcomponent

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form method="GET" action="{{ route('categories.index') }}">
                        <div class="row mb-2">
                            <div class="col-sm-3">
                                <div class="search-box mr-2 mb-2 d-inline-block">
                                    <div class="position-relative">
                                        <input type="text" name="name" class="form-control" placeholder="Enter category name">
                                        <i class="bx bx-search-alt search-icon"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <select class="form-control select2" name="parent_category_id">
                                    <option value="">Select parent category</option>
                                    @foreach (getConst('PARENT_CATEGORY') as $id => $parentCategoryName)
                                        <option value="{{ $id }}"
                                            {{ isset(request()->parent_category_id) && request()->parent_category_id == $id ? 'selected' : '' }}>
                                            {{ $parentCategoryName }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-sm-2">
                                <button type="submit" class="btn btn-success waves-effect waves-light">
                                    <i class="bx bx-search-alt search-icon font-size-16 align-middle mr-2"></i> Search
                                </button>
                            </div>

                            <div class="col-sm-4">
                                <div class="text-sm-end">
                                    <a href="{{ route('categories.create') }}" class="text-white btn btn-success btn-rounded waves-effect waves-light mb-2 mr-2"><i class="mdi mdi-plus mr-1"></i> Add category</a>
                                </div>
                            </div>
                        </div>
                    </form>

                    <div class="table-responsive">
                        <table class="table table-centered table-nowrap">
                            <thead class="thead-light">
                                <tr>
                                    <th style="width: 70px;" class="text-center">STT</th>
                                    <th>Code</th>
                                    <th>Parent category</th>
                                    <th>Category Name</th>
                                    <th class="text-center">Hành động</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php ($stt = 1)
                                @foreach ($categories as $item)
                                    <tr>
                                        <td class="text-center">{{ $stt++ }}</td>
                                        <td>{{ $item->code }}</td>
                                        <td>{{ getConst('PARENT_CATEGORY')[$item->parent_category_id] }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td class="text-center">
                                            <ul class="list-inline font-size-20 contact-links mb-0">
                                                <li class="list-inline-item px">
                                                    <a href="{{ route('categories.edit', $item->id) }}" data-toggle="tooltip" data-placement="top" title="Sửa"><i class="mdi mdi-pencil text-success"></i></a>
                                                </li>

                                                <li class="list-inline-item px">
                                                    <form method="post" action="{{ route('categories.destroy', $item->id) }}">
                                                        @csrf
                                                        @method('DELETE')

                                                        <button type="submit" data-toggle="tooltip" data-placement="top" title="Xóa" class="border-0 bg-white"><i class="mdi mdi-trash-can text-danger"></i></button>
                                                    </form>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    {{ $categories->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection


@section('script')
    <!-- select 2 plugin -->
    <script src="{{ asset('assets\libs\select2\select2.min.js') }}"></script>

    <!-- init js -->
    <script src="{{ asset('assets\js\pages\ecommerce-select2.init.js') }}"></script>
@endsection

@section('css')
    <!-- select2 css -->
    <link href="{{ asset('assets\libs\select2\select2.min.css') }}" rel="stylesheet" type="text/css">
@endsection
