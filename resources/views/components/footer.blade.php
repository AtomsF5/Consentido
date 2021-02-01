<div class="m-3">
    @if (Route::has('login'))
    <div class="container mx-auto bg-indigo-900 text-white flex justify-around items-center rounded-sm">
        @auth
        <a href="{{ url('/dashboard') }}" class="ml-3">Tablero</a>
        @else
        <a href="{{ route('login') }}" class="ml-2">Iniciar</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-2">Registrar</a>
            @endif
        @endauth
        @endif
        <div class="container flex justify-end">
            <img src="{{asset('images/insta.svg')}}" alt="Instagram" class="mt-2 ">
            <img src="{{asset('images/Twitter.svg')}}" alt="Twitter" class="mt-2 mx-1">
        </div>
    </div>
</div>

