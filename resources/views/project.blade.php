@extends('layouts.app')

@section('content')
<br>
<br>

<div id="colorlib-project">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
                <h1><b>PRODUCTS</b></h1>
                <p>Simply awesome</p>
            </div>
        </div>
        <div class="row">
            @foreach ($projects as $p)
            <div class="col-md-4 animate-box">
                <div class="project-entry">
                    <a href="#" class="project-img text-center" style="background-image: url(/storage/{{ $p->project_image }});">
                        <span class="icon"><i class="fas fa-plus-circle"></i></span>
                    </a>
                    <div class="desc">
                        <h3 class="text-center">{{ $p->project_name }}</h3>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>


@endsection
