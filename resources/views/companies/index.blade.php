@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="h1 card-header">Компании</div>

                    <div class="card-body">
                        <table class="table table-striped">
                            @foreach($companies as $company)
                                <tr>
                                    <td class="text-center">
                                        <img class="img-polaroid" src="{{asset('storage/companies_logo/'.$company->logo)}}" width="100">
                                    </td>
                                    <td class="h5">{{$company->name}}</td>
                                    <td>
                                        <div>
                                            E-mail:
                                            <a href="mailto:{{$company->email}}">{{$company->email}}</a>
                                        </div>
                                        <div>
                                            Сайт:
                                            <a href="{{$company->website}}">{{$company->website}}</a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </table>

                        {{ $companies->links() }}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection