@extends('dashboard.layout.master')
@section('content')
    <div class="card-box">

        <h4 class="header-title m-t-0 m-b-30">Add New City</h4>

        <table class="table table-striped m-0">
            <form action="{{ route('city.store') }}" data-parsley-validate novalidate method="POST">
                @csrf
                <div class="form-group">
                    <label for="userName">City Name:</label>
                    <input type="text" name="name" parsley-trigger="change" required placeholder="Enter city name"
                        class="form-control" id="userName">
                </div>


                <div class="form-group text-right m-b-0">
                    <button class="btn btn-primary waves-effect waves-light m-b-5"> <span>Add</span> <i
                            class="ti-back-left m-l-5"></i> </button>

                </div>

            </form>
        </table>

    </div>

    <!-- End row -->
@endsection
