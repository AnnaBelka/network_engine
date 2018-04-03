@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="h1 card-header">Сотрудники</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <table class="table table-striped">
                            @foreach($employees as $employee)
                                <tr>
                                    <td class="text-center">
                                        {{$employee->first_name}} {{$employee->last_name}}
                                    </td>
                                    <td class="h5">
                                        <a href="{{ url('/company') }}/{{$employee->company_name}}">{{$employee->company_name}}</a>
                                    </td>
                                    <td>
                                        <div>
                                            E-mail:
                                            <a href="mailto:{{$employee->email}}">{{$employee->email}}</a>
                                        </div>
                                        <div>
                                            Телефон:
                                            <a href="tel:{{$employee->phone}}">{{$employee->phone}}</a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </table>

                        {{ $employees->links() }}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection