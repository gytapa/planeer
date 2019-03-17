@extends('layouts.adminLayout')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @include('employee.employee.form', ['employee' => $employee])
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection