@extends('layouts.master')

@section('title')
    News List
@endsection

@section('content')
    @component('components.breadcrumb')
        @slot('li_1')
            News
        @endslot
        @slot('title')
            News List
        @endslot
    @endcomponent
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">News List</h4>

                    <form method="GET" action="{{ route('news.index') }}" class="row mb-2">
                        <div class="col-sm-3">
                            <div class="search-box mr-2 mb-2 d-inline-block">
                                <div class="position-relative">
                                    <input type="text" name="search" class="form-control" placeholder="Enter title">
                                    <i class="bx bx-search-alt search-icon"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <button type="submit" class="btn btn-success waves-effect waves-light">
                                <i class="bx bx-search-alt search-icon font-size-16 align-middle mr-2"></i> Search
                            </button>
                        </div>

                        <div class="col-sm-6">
                            <div class="text-sm-end">
                                <a href="{{ route('news.create') }}"
                                    class="text-white btn btn-success btn-rounded waves-effect waves-light mb-2 mr-2"><i
                                        class="mdi mdi-plus mr-1"></i> Add news</a>
                            </div>
                        </div>
                    </form>

                    <div class="table-responsive">
                        <table class="table table-editable table-nowrap align-middle table-edits">
                            <thead>
                                <tr>
                                    <th style="width: 70px;">STT</th>
                                    <th>Title</th>
                                    <th>Image</th>
                                    <th>Parent category</th>
                                    <th>Category</th>
                                    <th>Sub category</th>
                                    {{-- <th>Summary</th> --}}
                                    {{-- <th>Content</th> --}}
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php($stt = 1)
                                @foreach ($news as $item)
                                    <tr>
                                        <td>{{ $stt++ }}</td>
                                        <td>{{ $item->title }}</td>
                                        <td>
                                            <img src="{{ asset($item->image) }}" alt="" style="max-width: 200px;">
                                        </td>
                                        <td>{{ getConst('PARENT_CATEGORY')[$item->parent_category_id] }}</td>
                                        <td>{{ $item->category->name }}</td>
                                        <td>{{ $item->subCategory->name }}</td>
                                        {{-- <td>
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#summary{{ $item->id }}">View</button>

                                            <div class="modal fade" id="summary{{ $item->id }}" tabindex="-1"
                                                role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Summary</h5>
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            {!! $item->summary !!}
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#content{{ $item->id }}">View</button>

                                            <div class="modal fade" id="content{{ $item->id }}" tabindex="-1"
                                                role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Conntent</h5>
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            {!! $item->content !!}
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td> --}}
                                        <td class="text-center">
                                            <ul class="list-inline font-size-20 contact-links mb-0">
                                                <li class="list-inline-item px">
                                                    <a href="{{ route('news.edit', $item->id) }}" data-toggle="tooltip"
                                                        data-placement="top" title="Sửa"><i
                                                            class="mdi mdi-pencil text-success"></i></a>
                                                </li>

                                                <li class="list-inline-item px">
                                                    <form method="post" action="{{ route('news.destroy', $item->id) }}">
                                                        @csrf
                                                        @method('DELETE')

                                                        <button type="submit" data-toggle="tooltip" data-placement="top"
                                                            title="Xóa" class="border-0 bg-white"><i
                                                                class="mdi mdi-trash-can text-danger"></i></button>
                                                    </form>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    {{ $news->links() }}
                </div>
            </div>
        </div> <!-- end col -->
    </div>
@endsection
