window.addEventListener('load', () => {
    const form = document.querySelector('.add-publisher');
    form.addEventListener('submit', (event) => {
        event.preventDefault();
    })

    document.querySelector('#submit-button').addEventListener('click', () => {
        const data = new FormData(form);
        data.append('name', form.name.value);
        data.append('email', form.email.value);
        data.append('cellphone', form.cellphone.value);
        data.append('cnpj', form.cnpj.value);

        const config = {
            method: 'POST',
            body: data
        }

        fetch('./processAddPublisher.php', config)
        .then((response) => {
            return response.json();
        })
        .then((json) => {
            if (json.status == 'ok') {
                alert('Editora adicionada com sucesso!');
                window.location.href = 'publisherAdmin.php';
            } else if (json.status == 'sla') {
                alert('Erro');
            } else {
                alert('Não foi possível adicionar a editora!');
            }
        })
    });
});