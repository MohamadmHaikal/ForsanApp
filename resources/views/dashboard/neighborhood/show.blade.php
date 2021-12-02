@extends('dashboard.layout.master')
@section('content')
    <div class="card-box">

        <h4 class="header-title m-t-0 m-b-30"> Neighborhood</h4>

        <table class="table table-striped m-0">
            <form action="{{ route('neighborhood.list') }}" data-parsley-validate novalidate>

                <div class="form-group">
                    <label class="col-sm-2 control-label">City Name:</label>

                    <select class="form-control" name="city" disabled>
                        <option value="{{ $Neigh->city->id }}" selected="selected">{{ $Neigh->city->name }}</option>
                    </select>


                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Neighborhood Name:</label>
                    <input type="text" name="name" parsley-trigger="change" required placeholder="Enter neighborhood name"
                        class="form-control" id="userName" value="{{ $Neigh->name }}" disabled>
                </div>

                <div class="form-group text-right m-b-0">
                    <button class="btn btn-primary waves-effect waves-light m-b-5"> <span>Back</span> <i
                            class="ti-back-left m-l-5"></i> </button>

                </div>

            </form>
        </table>

    </div>

    <!-- End row -->
@endsection
