@extends('dashboard.layout.master')
@section('content')
    <div class="card-box">

        <h4 class="header-title m-t-0 m-b-30">Edit Neighborhood</h4>

        <table class="table table-striped m-0">
            <form action="{{ route('neighborhood.update', [$Neigh->id]) }}" data-parsley-validate novalidate method="POST">
                @csrf
                <div class="form-group">
                    <label class="col-sm-2 control-label">City Name:</label>

                    <select class="form-control" name="city">
                        @foreach ($citys as $city)
                            @if ($Neigh->city_id == $city->id)
                                <option value="{{ $city->id }}" selected="selected">{{ $city->name }}</option>
                            @else
                                <option value="{{ $city->id }}">{{ $city->name }}</option>
                            @endif

                        @endforeach
                    </select>


                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Neighborhood Name:</label>
                    <input type="text" name="name" parsley-trigger="change" required placeholder="Enter neighborhood name"
                        class="form-control" id="userName" value="{{ $Neigh->name }}">
                </div>

                <div class="form-group text-right m-b-0">
                    <button class="btn btn-primary waves-effect waves-light m-b-5"> <span>Save Change</span> <i
                            class="ti-back-left m-l-5"></i> </button>

                </div>

            </form>
        </table>

    </div>

    <!-- End row -->
@endsection
