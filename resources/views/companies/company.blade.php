@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Компания {{$company->name}}</div>
                    <div class="card-body text-center">

                        <div class="alert alert-success">
                            <img class="img-polaroid" src="{{asset('storage/companies_logo/'.$company->logo)}}" max-width="200">
                        </div>

                        <div>
                            E-mail:
                            <a href="mailto:{{$company->email}}">{{$company->email}}</a>
                        </div>
                        <div>
                            Сайт:
                            <a href="{{$company->website}}">{{$company->website}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection