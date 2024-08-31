 <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item bg-primary rounded">
            <a href="{{route('admin.dashboard')}}" class="nav-link mt-2">
              <i style="color: white;" class="nav-icon fas fa-tachometer-alt"></i>
              <p style="font-family: 'Khmer Moul', cursive; font-weight: 400; color: white;">
                គ្រប់គ្រងទំព័រសង្ខេប
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i style="color: darkblue;" class="nav-icon fas fa-users"></i>
              <p style="font-family: 'Khmer Os SiemReap', cursive; font-weight: 400; color: blue;">
                គ្រប់គ្រងអ្នកប្រើប្រាស់
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item bg_hover">
                <a href="{{route('admin.users.index')}}" class="nav-link ">
                  <i style="color: darkblue;" class="far fa-circle nav-icon"></i>
                  <p style="font-family: 'Khmer Os SiemReap', cursive; font-weight: 400; color: blue;">បញ្ជីអ្នកប្រើប្រាស់</p>
                </a>
              </li>
              <li class="nav-item bg_hover">
                <a href="{{route('admin.users.create')}}" class="nav-link ">
                  <i style="color: darkblue;"  class="far fa-circle nav-icon"></i>
                  <p style="font-family: 'Khmer Os SiemReap', cursive; font-weight: 400; color: blue;">បង្កើតអ្នកប្រើ</p>
                </a>
              </li>
              <li class="nav-item bg_hover">
                <a href="pages/layout/boxed.html" class="nav-link ">
                  <i style="color: darkblue;"  class="far fa-circle nav-icon"></i>
                  <p style="font-family: 'Khmer Os SiemReap', cursive; font-weight: 400; color: blue;">សិទ្ធិអ្នកប្រើ</p>
                </a>
              </li>
            </ul>

          </li>

        <!-- Authentication Links -->
            @guest
                @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @endif

                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else

            {{-- <li class="nav-item">
                <a href="{{ route('logout') }}" class="nav-link"
                onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();"
                >
                <i class="nav-icon fas fa-arrow-circle-left"></i>
                <p>
                    {{ __('ចាកចេញ') }}
                </p>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </a>
            </li> --}}
            <li class="nav-item bg_hover_logout" style="list-style: none; font-family: 'Khmer Moul', cursive;">
                <a style="text-decoration: none; color: red; font-weight: 600; margin-top:400px; position: absolute; z-index: 1;" href="{{ route('logout') }}" class="nav-link"
                onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">

                <i class="nav-icon fas fa-arrow-circle-left" ></i>

                    {{ __('ចាកចេញ') }}

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </a>
            </li>
            @endguest


        </ul>
      </nav>
