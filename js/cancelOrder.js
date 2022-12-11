window.addEventListener('load', () => {
    const form = document.querySelector('.cancel-order');
    form.addEventListener('submit', (event) => {
        event.preventDefault();
    })

    document.querySelector('#submit-button').addEventListener('click', () => {
        const data = new FormData(form);
        data.append('id', form.id.value);

        const config = {
            method: 'POST',
            body: data
        }

        fetch('./processCancelOrder.php', config)
        .then((response) => {
            return response.json();
        })
        .then((json) => {
            if (json.status == 'ok') {
                alert('Pedido cancelado com sucesso!');
                window.location.href = 'orders.php';
            } else if (json.status == 'sla') {
                alert('Erro');
            } else {
                alert('Não foi possível cancelar o pedido!');
            }
        })
    });
});