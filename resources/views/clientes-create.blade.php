<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

<div class="container mx-auto px-4 py-8">

    <h1 class="text-2xl font-bold mb-4">Cadastrar Cliente</h1>

    <form action="{{ isset($cliente) ? route('clientes.update', $cliente->id) : route('clientes.store') }}" method="POST">
        @csrf
        @if(isset($cliente))
            @method('PUT')
        @endif    
        
        <div class="mb-4">
            <label for="nome" class="block text-sm font-medium text-gray-700">Nome:</label>
            <input type="text" id="nome" name="nome" value="{{ isset($cliente) ? $cliente->nome : '' }}"
                    class="mt-1 p-2 border border-gray-300 rounded-md w-full">
        </div>

        <div class="mb-4">
            <label for="telefone" class="block text-sm font-medium text-gray-700">Telefone:</label>
            <input type="text" id="telefone" name="telefone" value="{{ isset($cliente) ? $cliente->telefone : '' }}"
                    class="mt-1 p-2 border border-gray-300 rounded-md w-full">
        </div>

        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700">Email:</label>
            <input type="email" id="email" name="email" value="{{ isset($cliente) ? $cliente->email : '' }}"
                    class="mt-1 p-2 border border-gray-300 rounded-md w-full">
        </div>
        <div class="flex items-center justify-between">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Cadastrar</button>
        </div>
    </form>

</div>

</body>
</html>
