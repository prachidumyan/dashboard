<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        {{-- <title>{{ $page_title}}</title> --}}

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/style.css')}}">
        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
        <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <script defer src="{{ asset('fontawesome/js/all.js') }}"></script> 
        <!-- Styles -->
    </head>
    <body style="background-color: #ecf0f5 ">
    
    <!--section1-->
    <div id="c">
        <header>
            <nav id="navbar">
                <ul id="ul" type="none">
                    <li id="nav_main_head">
                        Dashboard
                        <span><i class="fas fa-user"></i></span>
                    </li>
                    <li id="icon">
                        <span><i class="fas fa-envelope-square"></i></span>
                        <span> <i class="far fa-bell"></i></span>
                       <span><i class="far fa-flag"></i></span>
                        <span><i class="fas fa-cogs"></i></span>
                        
                    </li>
                </ul>
            </nav>
        
        <aside class="side-bar">
            <div id="dashboard-left">
                <a href="{{ route('dashboard')}}">
                    <span><i class="fas fa-tachometer-alt"></i></span> Dashboard
                </a>
            </div>
            
        </aside>
        </header>
        <div id="fleet-dashboard">
            <p id="fleet-dashboard-heading">FLEET DASHBOARD</p>
            <div class="under_nav">
                <span><i class="fas fa-tachometer-alt"></i>Home</span>
                <span>></span>
                <span>Dashboard</span>
            </div>
        
        </div>
        @yield('dashboard')
        @yield('vechile_details')

    <script>
        document.getElementById("close-button").onclick=function(){
            document.getElementById("content-page").style.display="none";
        }
    
    </script>
    
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
    
    <script>
    $(document).ready(function(){
    
        $('#vehicle_table').DataTable({
            "ajax": {
                    'type': 'GET',
                    'url': "{{route('vehicle_list')}}",
                },
        });
    });
    </script>
        </body>
    </html>
    