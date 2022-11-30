<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition']) }}>
    {{ $slot }}
</button>
<a href="{{ route('register')}}"> Não Possui conta? Registre-se </a>
<a href="Medicamentos.html" class="btn btn-ciano flex-fill"><img src="imagens/remedio.png" class="w-25"   alt="Medicamentos"> <h2>Nunca mais esqueça de tomar seus medicamentos e não deixe-os acabar</h2>