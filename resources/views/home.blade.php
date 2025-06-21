<x-layout-guest page-title="Home"> 
    <p class="display-6 text-center my-5">VIEW HOME</p>

    {{-- Para ver as informações do usuário autenticado --}}
    @php
        dump(auth()->user());
    @endphp

</x-layout-guest>