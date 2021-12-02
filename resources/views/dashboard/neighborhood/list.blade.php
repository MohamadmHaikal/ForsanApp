@extends('dashboard.layout.master')
@section('content')
    <div class="card-box">



        <h4 class="header-title m-t-0 m-b-30">Neighborhoods</h4>
        <a href="{{ route('neighborhood.create') }}" class="btn btn-success waves-effect waves-light m-b-5  m-t-0 m-b-30">
            <i class="fa fa-plus-square m-r-5"></i> <span>Add New Neighborhood</span> </a>
        {{-- successPassReset --}}
        @if (Session::get('doneMessage'))
            <div class="row " id="success-alert">
                <div class="alert alert-success text-center"> <i class="fa fa-check"></i>
                    {{ Session::get('doneMessage') }}</div>
            </div>
        @endif

        <table class="table table-striped m-0">

            @if ($Neighs->count() == 0)

                <div class="alert alert-success">
                    <strong>No Data</strong>
                </div>
            @else
                <thead>
                    <tr>
                        <th>#</th>
                        <th>City Name</th>
                        <th>Name</th>

                        <th>Option</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($Neighs as $Neigh)

                        <tr>
                            <th scope="row">{{ $Neigh->id }}</th>
                            <td>{{ $Neigh->city->name }}</td>
                            <td>{{ $Neigh->name }}</td>
                            <td>

                                <div class="row">

                                    <a href="{{ route('neighborhood.edit', [$Neigh->id]) }}"
                                        class="btn btn-icon waves-effect btn-success  m-b-5"> <i class="fa fa-pencil"></i>
                                    </a>

                                    <a href="{{ route('neighborhood.destroy', [$Neigh->id]) }}"
                                        class="btn btn-icon waves-effect btn-danger  m-b-5"> <i class="fa fa-trash"></i>
                                    </a>

                                    <a href="{{ route('neighborhood.show', [$Neigh->id]) }}"
                                        class="btn btn-icon waves-effect btn-info  m-b-5"> <i class="fa fa-eye"></i>
                                    </a>

                                </div>

                            </td>

                        </tr>
                    @endforeach

                </tbody>
            @endif
        </table>

    </div>

    <!-- End row -->
@endsection
