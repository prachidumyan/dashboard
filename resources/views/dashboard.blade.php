@extends('app')

@section('dashboard')
        <!--box1-->
    <div class="d" id="d1">
        <h4 id="h4-1"class="background-filter">fitness certificate</h4>
        <div class="icon-grid-box">
            <div class="inside-box">{{ $total_vehicle }}</div>
            <div class="inside-box-total-vechical">total vehicles</div>
            <img src="{{ asset('images/caricon.png') }}" width="100px" height="100px" class="icon">
        </div>
        <a href="{{ route('vehicle_details')}}">
            <div class="background-filter-margin" >{{ $expiring }} expiring</div>
            <div class="background-filter-margin">0 expired</div>
        </a>
    </div>
    <!--box2-->
    <div class="d" id="d2">
        <h4 id="h4-2" class="background-filter">permit certificate</h4>
        <div class="icon-grid-box">
            <div class="inside-box">{{ $total_vehicle }}</div>
            <div class="inside-box-total-vechical">total vehicals</div>
            <img src="{{ asset('images/contact.png') }}" width="100px" height="100px" class="icon">
        </div>
        <a href="{{ route('vehicle_details')}}">
            <div class="background-filter-margin">{{ $expiring }} expiring</div>
            <div class="background-filter-margin">{{ $expired }} expired</div>
        </a>
    </div>
    <!--box3-->
    <div class="d" id="d3">
        <h4 id="h4-3" class="background-filter">insurance certificate</h4>
        <div>
            <div class="icon-grid-box">
                <div class="inside-box">{{ $total_vehicle }}</div>
                <div class="inside-box-total-vechical">total vehicals</div>
                <img src="{{ asset('images/folder.png') }}" width="100px" height="100px" class="icon">
            </div>
        </div>
        <a href="{{ route('vehicle_details')}}">
            <div class="background-filter-margin">{{ $expiring }} expiring</div>
            <div class="background-filter-margin">{{ $expired }} expired</div>
        </a>
    </div>
    <!--box4-->
    <div class="d" id="d4">
        <h4 id="h4-4" class="background-filter">speed limit device</h4>
        <div class="icon-grid-box">
            <div class="inside-box">{{ $total_vehicle }}</div>
            <div class="inside-box-total-vechical">total vehicals</div>
            <img src="{{ asset('images/speed.png') }}" width="100px" height="100px" class="icon">
        </div>
        <a href="{{ route('vehicle_details')}}">
            <div class="background-filter-margin">{{ $expiring }} expiring</div>
            <div class="background-filter-margin">{{ $expired }} expired</div>
        </a>
    </div>
    <!--box5-->
    <div class="d" id="d5">
        <h4 id="h4-5" class="background-filter">reflective tape</h4>
        <div class="icon-grid-box">
            <div class="inside-box">{{ $total_vehicle }}</div>
            <div class="inside-box-total-vechical">total vehicals</div>
            <img src="{{ asset('images/contact.png') }}" width="100px" height="100px" class="icon">
        </div>
        <a href="{{ route('vehicle_details')}}">
            <div class="background-filter-margin">{{ $expiring }} expiring</div>
            <div class="background-filter-margin">{{ $expired }} expired</div>
        </a>
    </div>
    <!--box6-->
    <div class="d" id="d6">
        <h4 id="h4-6" class="background-filter">pollution certificate</h4>
        <div class="icon-grid-box">
            <div class="inside-box">{{ $total_vehicle }}</div>
            <div class="inside-box-total-vechical">total vehicals</div>
            <img src="{{ asset('images/bin.png') }}" width="100px" height="100px" class="icon">
        </div>
        <a href="{{ route('vehicle_details')}}">
            <div class="background-filter-margin">{{ $expiring }} expiring</div>
            <div class="background-filter-margin">{{ $expired }} expired</div>
        </a>
    </div>
    <!--box7-->
    <div class="d" id="d7">
        <h4 id="h4-7" class="background-filter">road tax</h4>
        <div class="icon-grid-box">
            <div class="inside-box">{{ $total_vehicle }}</div>
            <div class="inside-box-total-vechical">total vehicals</div>
            <img src="{{ asset('images/dollar.png') }}" width="100px" height="100px" class="icon">
        </div>
        <a href="{{ route('vehicle_details')}}">
            <div class="background-filter-margin">{{ $expiring }} expiring</div>
            <div class="background-filter-margin">{{ $expired }} expired</div>
        </a>
    </div>
    <!--box8-->
    <div class="d" id="d8">
    <h4 id="h4-8" class="background-filter">gps</h4>
        <div class="icon-grid-box">
            <div class="inside-box">{{ $total_vehicle }}</div>
            <div class="inside-box-total-vechical">total vehicals</div>
            <img src="{{ asset('images/map.png') }}" width="100px" height="100px" class="icon">
    </div>
    <a href="{{ route('vehicle_details')}}">
        <div class="background-filter-margin">{{ $expiring }} expiring</div>
        <div class="background-filter-margin">{{ $expired }} expired</div>
    </a>
</div>


<!--section2-->
<!--box1-->

    
    <a href="https://www.facebook.com/gaadiwalaonline" id="d9" class="link-on-icons">
            <img src="{{ asset('images/fb.png') }}" width="30px" height="30px" >
    </a>
        
    <a href="https://twitter.com/gaadiwalaonline" id="d10" class="link-on-icons"><img src="{{ asset('images/twetter.png') }}" width="30px" height="30px" ></a>

<a href="https://www.linkedin.com/company/gaadiwalaonline-com/about" id="d11" class="link-on-icons"><img src="{{ asset('images/linkedin.png') }}" width="30px" height="30px"  ></a>

    <a href="https://www.instagram.com/gaadiwalaonlineindia/?hl=en" id="d12" class="link-on-icons"><img src="{{ asset('images/insta.png') }}" width="30px" height="30px" ></a>
    
</div>

@endsection
    
