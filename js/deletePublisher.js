window.addEventListener('load', () => {
    const form = document.querySelector('.delete-publisher');
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

        fetch('./processDeletePublisher.php', config)
        .then((response) => {
            return response.json();
        })
        .then((json) => {
            if (json.status == 'ok') {
                alert('Editora deletada com sucesso!');
                window.location.href = 'publisherAdmin.php';
            } else if (json.status == 'sla') {
                alert('Erro');
            } else {
                alert('Não foi possível deletar a editora!');
            }
        })
    });
});