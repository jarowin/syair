@extends('dashboard.layouts.master')

@section('title')
    Dashboard
@endsection

@section('content')
<div class="row">

    <div class="col-xl-12 col-md-12">
        <div class="row">
            {{-- <div class="col-sm-6">
                <div class="card prod-p-card background-pattern">
                    <div class="card-body">
                        <div class="row align-items-center m-b-0">
                            <div class="col">
                                <h6 class="m-b-5">Total Providers</h6>
                                <h3 class="m-b-0">{{ $providers->count($providers) }}</h3>
                            </div>
                            <div class="col-auto">
                                <i class="material-icons-two-tone text-primary">sports_esports</i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card prod-p-card bg-primary background-pattern-white">
                    <div class="card-body">
                        <div class="row align-items-center m-b-0">
                            <div class="col">
                                <h6 class="m-b-5 text-white">Total Games</h6>
                                <h3 class="m-b-0 text-white">{{ $games->count('$games') }}</h3>
                            </div>
                            <div class="col-auto">
                                <i class="material-icons-two-tone text-white">star</i>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</div>
@endsection
