<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciar Clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

<div class="container mx-auto p-4">

    <h1 class="text-2xl font-bold mb-4">Gerenciar Clientes</h1>

    <!-- Botão de adicionar cliente -->
    <button id="addClienteBtn" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4">Adicionar Cliente</button>

    <!-- Tabela de clientes -->
    <table class="w-full bg-white border border-gray-200 rounded shadow-md">
        <thead class="bg-gray-200">
            <tr>
                <th class="px-4 py-2">Nome</th>
                <th class="px-4 py-2">Telefone</th>
                <th class="px-4 py-2">E-mail</th>
                <th class="px-4 py-2">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clientes as $cliente)
            <tr>
                <td class="border px-4 py-2">{{ $cliente->nome }}</td>
                <td class="border px-4 py-2">{{ $cliente->telefone }}</td>
                <td class="border px-4 py-2">{{ $cliente->email }}</td>
                <td class="border px-4 py-2">
                    <button  data-cliente-id="{{ $cliente->id }}" class="btn-edit bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-2 rounded mr-2" >Editar</button> <!-- Botão Editar -->
                    

                    <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded btn-remover" data-cliente-id="{{ $cliente->id }}">Remover</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>
<input type="hidden" name="_token" value="{{ csrf_token() }}" />
<script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
