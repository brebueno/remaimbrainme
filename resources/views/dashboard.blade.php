<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
            
        </h2>
        
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                {{-- <x-jet-welcome /> --}}
                --fazer o HTML do dashboard--
                <h3>Cadastre no botão abaixo seus medicamentos</h3>

                <x-jet-button class="ml-4 pt-5 mt-5">
                    <a href="{{ route('meus_medicamentos')}}"> {{ __('Cadastre') }} </a>
                 </x-jet-button>
            </div>
        </div>
    </div>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @section('conteudo')
                <header class="text-center fw-bold">
                    Meus medicamentos: {{($medicamentos)}}
                </header>
            
            </div>
        </div>
    </div>

</x-app-layout>
@endsection
