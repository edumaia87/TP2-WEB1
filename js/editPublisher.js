window.addEventListener('load', () => {
    const form = document.querySelector('.edit-publisher');
    form.addEventListener('submit', (event) => {
        event.preventDefault();
    })

    document.querySelector('#submit-button').addEventListener('click', () => {
        const data = new FormData(form);
        data.append('id', form.id.value);
        data.append('name', form.name.value);
        data.append('email', form.email.value);
        data.append('cellphone', form.cellphone.value);
        data.append('cnpj', form.cnpj.value);

        const config = {
            method: 'POST',
            body: data
        }

        fetch('./processEditPublisher.php', config)
        .then((response) => {
            return response.json();
        })
        .then((json) => {
            if (json.status == 'ok') {
                alert('Dados da editora atualizada com sucesso!');
            } else {
                alert('Não foi possível atualizar os dados da editora!');
            }
        })
    });
});