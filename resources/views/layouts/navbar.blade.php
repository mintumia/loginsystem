<div>

    <ul class="flex items-start p-4 mx-2 text-center bg-red-50">
        @guest()
        @if(Route::has('login') && Request::url() !== route('login'))

            <li>
                <a class="mx-2 p-4 text-gray-50 bg-blue-600" href="{{route('login')}}">Sign in</a>

            </li>
        @endif

            @if(Route::has('register') && Request::url() !== route('register'))
                <li>
                    <a class="mx-2 p-4 text-gray-50 bg-blue-600" href="{{route('register')}}">Register</a>

                </li>
            @endif
        @endguest


        @auth()
            <li>

                <form action="{{route('logout')}}" method="post" role="button"
                      onclick="event.preventDefault();this.closest('form').submit();">
                    @csrf
                    <p class="mx-2 p-4 text-gray-50 bg-blue-600">Logout</p>
                   </form>

            </li>

        @endauth
    </ul>

</div>

