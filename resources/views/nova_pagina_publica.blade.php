<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                NOVA PAGINA
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                     {{-- apresentar dados do usuario logado --}}

                     @auth
                          {{-- Apresenta apenas se tiver user logado --}}
                          <p>Usuario: Estou logado com <strong>{{ Auth::user()->name }}</strong></p>
                           <p>Email: <strong>{{ Auth::user()->email }}</strong></p>
                           <p><a href="{{ route('main_logout') }}"><strong>Sair</strong></a> </p>

                          @else

                           <p>Não existe usuário logado</p>
                            <p>clique <a href="{{ route('login') }}"><strong>Aqui</strong></a> para fazer login</p>

                     @endauth

                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
