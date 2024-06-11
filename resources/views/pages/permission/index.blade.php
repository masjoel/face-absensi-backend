@extends('layouts.app')

@section('title', 'Permissions')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>All {{ $title }}</h1>

                @include('pages.permission.breadcrumb')
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        @include('layouts.alert')
                    </div>
                </div>
                {{-- <h2 class="section-title">Permissions</h2>
                <p class="section-lead">
                    You can manage all Permissions, such as editing, deleting and more.
                </p> --}}


                <div class="row mt-4">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>All Permissions</h4>
                            </div>
                            <div class="card-body">

                                <div class="float-right">
                                    <form method="GET" action="{{ route('permissions.index') }}">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search by name" name="name">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="clearfix mb-3"></div>

                                <div class="table-responsive">
                                    <table class="table-striped table">
                                        <tr>

                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Department</th>
                                            <th>Date Permission</th>
                                            <th>Is Approval</th>

                                            <th>Action</th>
                                        </tr>
                                        @foreach ($permissions as $permission)
                                            <tr>

                                                <td>{{ $permission->user->name }}
                                                </td>
                                                <td>
                                                    {{ $permission->user->position }}
                                                </td>
                                                <td>
                                                    {{ $permission->user->department }}
                                                </td>
                                                <td>
                                                    {{ $permission->date_permission }}
                                                </td>
                                                <td>
                                                    @if ($permission->is_approved == 1)
                                                        Approved
                                                    @else
                                                        Not Approved
                                                    @endif
                                                </td>


                                                <td>
                                                    <div class="d-flex justify-content-center">
                                                        <a href='{{ route('permissions.show', $permission->id) }}'
                                                            class="btn btn-sm btn-warning btn-icon">
                                                            <i class="fas fa-search"></i>
                                                            Detail
                                                        </a>
                                                        <a href='{{ route('permissions.edit', $permission->id) }}'
                                                            class="ml-2 btn btn-sm btn-info btn-icon">
                                                            <i class="fas fa-edit"></i>
                                                            Edit
                                                        </a>

                                                        <button class="ml-2 btn btn-sm btn-danger btn-icon confirm-delete"
                                                            id="delete" data-id="{{ $permission->id }}" title="Hapus"
                                                            data-toggle="tooltip">
                                                            <i class="fas fa-trash-alt"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach


                                    </table>
                                </div>
                                <div class="float-right">
                                    {{ $permissions->withQueryString()->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/selectric/public/jquery.selectric.min.js') }}"></script>
    <script src="{{ asset('library/sweetalert2/sweetalert2.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/features-posts.js') }}"></script>
    <script>
        $(document).on("click", "button#delete", function(e) {
            e.preventDefault();
            let id = $(this).data('id');
            showDeletePopup(BASE_URL + '/permissions/' + id, '{{ csrf_token() }}', '', '',
                BASE_URL + '/permissions');
        });
    </script>
@endpush