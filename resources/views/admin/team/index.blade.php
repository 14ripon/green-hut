@extends('admin.layouts.app')

@section('title', 'Home - Admin')

@section('content')


    <div class="content-wrapper px-4">
        <!-- Main content -->
        <div class="content">
            <div class="content-header">
                <div class="header-icon">
                    <i class="pe-7s-note2"></i>
                </div>
                <div class="header-title">
                    <h1>Scroling Component</h1>
                    <small class="">A simple and user-friendly Basic form</small>
                    <ul class="breadcrumb">
                        <li><a class="pr-2" href="index.html"><i class="pe-7s-home"></i> Home</a>/</li>
                        <li><a class="px-2" href="#">Forms</a>/</li>
                        <li class="active px-2">Basic Form</li>
                    </ul>
                </div>
            </div>

            <div class="clearfix"></div>

            <!-- this page conntent-->
            <div class="card lobicard lobicard-sortable" data-sortable="true" data-inner-id="x5dGz22KYW" data-index="4" style="display: block;">
                <div class="card-header ui-sortable-handle">
                    <div class="card-title" style="max-width: calc(100% - 210px);">
                        Team Member
                    </div>
                    <div class="dropdown"><ul class="dropdown-menu dropdown-menu-right"><li><a data-func="editTitle" data-tooltip="Edit title" data-toggle="tooltip" data-title="Edit title" data-placement="bottom" data-original-title="" title=""><i class="card-control-icon fa fa-edit"></i><span class="control-title">Edit title</span></a></li><li><a data-func="unpin" data-tooltip="Unpin" data-toggle="tooltip" data-title="Unpin" data-placement="bottom" data-original-title="" title=""><i class="card-control-icon fa fa-arrows"></i><span class="control-title">Unpin</span></a></li><li><a data-func="reload" data-tooltip="Reload" data-toggle="tooltip" data-title="Reload" data-placement="bottom" data-original-title="" title=""><i class="card-control-icon fa fa-refresh"></i><span class="control-title">Reload</span></a></li><li><a data-func="minimize" data-tooltip="Minimize" data-toggle="tooltip" data-title="Minimize" data-placement="bottom" data-original-title="" title=""><i class="card-control-icon fa fa-chevron-up"></i><span class="control-title">Minimize</span></a></li><li><a data-func="expand" data-tooltip="Fullscreen" data-toggle="tooltip" data-title="Fullscreen" data-placement="bottom" data-original-title="" title=""><i class="card-control-icon fa fa-expand"></i><span class="control-title">Fullscreen</span></a></li><li><a data-func="close" data-tooltip="Close" data-toggle="tooltip" data-title="Close" data-placement="bottom" data-original-title="" title=""><i class="card-control-icon fa fa-times-circle"></i><span class="control-title">Close</span></a></li></ul><div class="dropdown-toggle" data-toggle="dropdown"><span class="card-control-icon fa fa-cog"></span></div></div></div>
                <div class="card-block p-3 basic-forms">

                    <a class="btn btn-base md-trigger mb-2 mr-1" href="{{ route('teams.create') }}">Add New Team</a>

                    <table class="table table-bordered table-hover my-2">
                        <tr>
                            <th>#ID</th>
                            <th>Name</th>
                            <th>Title</th>
                            <th>Profile</th>
                            <th>Social</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>

                        @foreach($teams as $team)
                            <tr>
                                <td>{{ $team->id }}</td>
                                <td>{{ $team->name }}</td>
                                <td>{{ $team->title }}</td>
                                <td>
                                    <img class="img-thumbnail" style="width: 120px;" src="{{ asset('storage/'.$team->image) }}" alt="">
                                </td>
                                <td style="font-size: 20px;">
                                    <a href="{{ $team->social->facebook ?? '' }}" target="_blank"><i class="hvr-buzz-out fa fa-facebook"></i></a>
                                    <a href="{{ $team->social->linkedin ?? '' }}" target="_blank"><i class="hvr-buzz-out fa fa-linkedin-in"></i></a>
                                    <a href="{{ $team->social->whats_app ?? '' }}" target="_blank"><i class="hvr-buzz-out fa fa-whatsapp"></i></a>
                                    <a href="tel:{{ $team->social->phone ?? '' }}" target="_blank"><i class="hvr-buzz-out fa fa-phone"></i></a>
                                </td>
                                <td>
                                    <button
                                        class="btn btn-sm status-btn {{ $team->status ? 'btn-success' : 'btn-danger' }}"
                                        onclick="toggleStatus(this, {{ $team->id }})"
                                        data-status="{{ $team->status }}">
                                        {{ $team->status ? 'Active' : 'Inactive' }}
                                    </button>
                                </td>
                                <td>
                                    <a class="btn btn-base" data-toggle="tooltip" data-placement="left" title="" data-original-title="Update" href="{{ route('teams.edit', $team->id) }}" class="btn btn-dark"><i class="fa fa-pencil" aria-hidden="true"></i></a>


                                    <form class="d-inline" action="{{ route('teams.destroy', $team->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button data-toggle="tooltip" data-original-title="Delete" class="btn btn-danger" type="submit" onclick="return confirm('Are you sure?')">
                                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>



                </div>
            </div>


        </div><!-- /content -->
    </div><!-- /content-wrapper -->


@endsection

@push('js')
    <script>
        function toggleStatus(el, id) {
            fetch("{{ route('teams.toggle.status') }}", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": "{{ csrf_token() }}"
                },
                body: JSON.stringify({ id: id })
            })
                .then(res => res.json())
                .then(data => {
                    if (data.success) {

                        // 🔥 remove both classes first
                        el.classList.remove('btn-success', 'btn-danger');

                        if (data.status) {
                            el.classList.add('btn-success');
                            el.innerText = 'Active';
                            el.dataset.status = 1;
                        } else {
                            el.classList.add('btn-danger');
                            el.innerText = 'Inactive';
                            el.dataset.status = 0;
                        }
                    }
                });
        }
    </script>
@endpush
