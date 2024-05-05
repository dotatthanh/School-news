@extends('layouts.master')

@section('title')
    Contact List
@endsection

@section('content')
    @component('components.breadcrumb')
        @slot('li_1')
            Contact
        @endslot
        @slot('title')
            Contact List
        @endslot
    @endcomponent
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Contact List</h4>

                    <form method="GET" action="{{ route('contacts.index') }}" class="row mb-2">
                        <div class="col-sm-3">
                            <div class="search-box mr-2 mb-2 d-inline-block">
                                <div class="position-relative">
                                    <input type="text" name="search" class="form-control" placeholder="Enter email">
                                    <i class="bx bx-search-alt search-icon"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <button type="submit" class="btn btn-success waves-effect waves-light">
                                <i class="bx bx-search-alt search-icon font-size-16 align-middle mr-2"></i> Search
                            </button>
                        </div>
                    </form>

                    <div class="table-responsive">
                        <table class="table table-editable table-nowrap align-middle table-edits">
                            <thead>
                                <tr>
                                    <th style="width: 70px;">STT</th>
                                    <th>Subject</th>
                                    <th>Full Name</th>
                                    <th>Email</th>
                                    <th>Phone number</th>
                                    <th>Address</th>
                                    <th>Message</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php($stt = 1)
                                @foreach ($data as $item)
                                    <tr>
                                        <td>{{ $stt++ }}</td>
                                        <td>{{ $item->subject }}</td>
                                        <td>{{ $item->full_name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->phone_number }}</td>
                                        <td>{{ $item->address }}</td>
                                        <td>
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#message{{ $item->id }}">View</button>

                                            <div class="modal fade" id="message{{ $item->id }}" tabindex="-1"
                                                role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">message</h5>
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            {!! $item->message !!}
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    {{ $data->links() }}
                </div>
            </div>
        </div> <!-- end col -->
    </div>
@endsection
