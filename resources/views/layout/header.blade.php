@php $data = DB::table('logo')->where('id','1')->first(); @endphp
<section class="header sticky-top">
    <nav class="navbar navbar-expand-lg navbar-light py-3">
        <div class="container-fluid nav-contain"><a class="navbar-brand" href="{{route('home')}}"><img src="{{ asset($data->featured_image) }}"></a>
            <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-bar" aria-controls="navbar-bar" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
            <div class="collapse navbar-collapse" id="navbar-bar">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link" aria-current="page" href="{{route('home')}}">Home</a>
                    <a class="nav-link" href="{{route('pricing')}}">Pricing</a>
                    @if(Auth::guest())
                    <!--<a class="nav-link" href="{{route('testimonials')}}">Testimonial</a>-->
                    <a class="nav-link" href="{{route('login')}}">Login</a>
                    <a class="nav-link last-header-color" href="{{route('create')}}">Get Started</a>
                    @else
                    <a class="nav-link" href="{{route('my_policies')}}">My Policies</a>
                    @if(isset(auth()->user()->admin) && auth()->user()->admin == 1)
                    <a class="nav-link" href="{{route('dashboard')}}">Dashboard</a>
                    @endif
                    <div class="dropdown">
                        <a class="nav-link last-header-color">My Account
                          <i class="fa fa-caret-down"></i>
                        </a>
                        <div class="dropdown-content">
                            <a href="{{route('settings')}}">Settings</a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout')}}" method="POST" class="d-none">  @csrf
                            </form>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </nav>
</section>