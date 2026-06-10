@extends('layouts.app')

@section('title', 'Contato — WindMarket')

@section('content')

<div class="max-w-xl mx-auto mt-10">

    {{-- CABEÇALHO --}}
    <div class="border-l-2 border-blood pl-4 mb-10">
        <h1 class="font-display font-bold text-white text-3xl mb-2">Fale conosco</h1>
        <p class="text-ash text-sm leading-relaxed">
            Interessado em turbinas, quer anunciar seus produtos ou tirar dúvidas?
            Preencha o formulário abaixo.
        </p>
    </div>

    {{-- ALERTA DE SUCESSO --}}
    @if(session('sucesso'))
        <div class="bg-[#0a1a0a] border border-[#1a4a1a] text-green-500
                    text-sm px-4 py-3 rounded-sm mb-8 flex items-center gap-2">
            <span>✓</span> {{ session('sucesso') }}
        </div>
    @endif

    {{--
        Formulário com proteção CSRF.
        @csrf insere <input type="hidden" name="_token" value="...">
        O middleware VerifyCsrfToken valida esse token em todo POST.
        Sem ele, o Laravel retorna erro 419 (Page Expired).
    --}}
    <form action="{{ route('contato.store') }}" method="POST" novalidate class="space-y-5">
        @csrf

        {{-- NOME --}}
        <div>
            <label for="nome" class="block text-[0.72rem] uppercase tracking-[0.12em] text-ash font-semibold mb-1.5">
                Nome <span class="text-blood">*</span>
            </label>
            <input
                type="text"
                id="nome"
                name="nome"
                value="{{ old('nome') }}"
                placeholder="Seu nome completo"
                class="w-full bg-pit border text-smoke text-sm px-4 py-3 rounded-sm outline-none
                       placeholder:text-ember transition-colors duration-200
                       {{ $errors->has('nome') ? 'border-blood' : 'border-ember focus:border-blood' }}"
            >
            @error('nome')
                <p class="text-blood text-[0.72rem] mt-1.5">{{ $message }}</p>
            @enderror
        </div>

        {{-- EMAIL --}}
        <div>
            <label for="email" class="block text-[0.72rem] uppercase tracking-[0.12em] text-ash font-semibold mb-1.5">
                E-mail <span class="text-blood">*</span>
            </label>
            <input
                type="email"
                id="email"
                name="email"
                value="{{ old('email') }}"
                placeholder="seu@email.com"
                class="w-full bg-pit border text-smoke text-sm px-4 py-3 rounded-sm outline-none
                       placeholder:text-ember transition-colors duration-200
                       {{ $errors->has('email') ? 'border-blood' : 'border-ember focus:border-blood' }}"
            >
            @error('email')
                <p class="text-blood text-[0.72rem] mt-1.5">{{ $message }}</p>
            @enderror
        </div>

        {{-- TELEFONE --}}
        <div>
            <label for="telefone" class="block text-[0.72rem] uppercase tracking-[0.12em] text-ash font-semibold mb-1.5">
                Telefone
                <span class="text-ember normal-case tracking-normal ml-1">(opcional)</span>
            </label>
            <input
                type="text"
                id="telefone"
                name="telefone"
                value="{{ old('telefone') }}"
                placeholder="(11) 99999-9999"
                class="w-full bg-pit border text-smoke text-sm px-4 py-3 rounded-sm outline-none
                       placeholder:text-ember transition-colors duration-200
                       {{ $errors->has('telefone') ? 'border-blood' : 'border-ember focus:border-blood' }}"
            >
            @error('telefone')
                <p class="text-blood text-[0.72rem] mt-1.5">{{ $message }}</p>
            @enderror
        </div>

        {{-- MENSAGEM --}}
        <div>
            <label for="mensagem" class="block text-[0.72rem] uppercase tracking-[0.12em] text-ash font-semibold mb-1.5">
                Mensagem <span class="text-blood">*</span>
            </label>
            <textarea
                id="mensagem"
                name="mensagem"
                rows="5"
                placeholder="Descreva sua necessidade, produto ou dúvida..."
                class="w-full bg-pit border text-smoke text-sm px-4 py-3 rounded-sm outline-none
                       placeholder:text-ember transition-colors duration-200 resize-y
                       {{ $errors->has('mensagem') ? 'border-blood' : 'border-ember focus:border-blood' }}"
            >{{ old('mensagem') }}</textarea>
            @error('mensagem')
                <p class="text-blood text-[0.72rem] mt-1.5">{{ $message }}</p>
            @enderror
        </div>

        {{-- BOTÃO --}}
        <button
            type="submit"
            class="w-full bg-blood text-white font-display font-bold text-sm uppercase tracking-[0.08em]
                   py-3.5 rounded-sm hover:bg-crimson active:scale-[0.99] transition-all duration-200 mt-2">
            Enviar mensagem
        </button>

    </form>
</div>

@endsection
