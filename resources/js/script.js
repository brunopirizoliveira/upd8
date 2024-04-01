// Função para adicionar um novo cliente
function adicionarCliente() {
    // Aqui você pode colocar o código para enviar uma solicitação para adicionar um novo cliente via API REST
    console.log("Função para adicionar cliente chamada");
    window.location.href = '/clientes-create';
}

// Evento de clique para o botão "Adicionar Cliente"
document.getElementById("addClienteBtn").addEventListener("click", adicionarCliente);

// Evento de clique para os botões "Remover"
document.querySelectorAll('.btn-remover').forEach(btn => {
    btn.addEventListener('click', async function() {
        const clienteId = this.dataset.clienteId;

        // Crie um objeto FormData e inclua o token CSRF
        const formData = new FormData();
        formData.append('_token', '{{ csrf_token() }}');

        // Envie uma solicitação DELETE com o token CSRF
        try {
            const response = await fetch(`/clientes/${clienteId}`, {
                method: 'DELETE',
                body: formData
            }).then(() => location.reload());

        } catch (error) {
            console.error('Erro ao excluir cliente:', error);
        }
    });
});


// Evento de clique para o botão "Editar"
document.querySelectorAll('.btn-edit').forEach(btn => {
    btn.addEventListener('click', function() {
        const clienteId = this.dataset.clienteId;
        window.location.href = `/clientes/${clienteId}/edit`;
    });
});