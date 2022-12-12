window.addEventListener('load', () => {
    const form = document.querySelector('.edit-address');
    form.addEventListener('submit', (event) => {
        event.preventDefault();
    })

    document.querySelector('#submit-button').addEventListener('click', () => {
        const data = new FormData(form);
        data.append('id', form.id.value);
        data.append('street', form.street.value);
        data.append('district', form.district.value);
        data.append('number', form.number.value);
        data.append('state', form.state.value);
        data.append('city', form.city.value);

        const config = {
            method: 'POST',
            body: data
        }

        fetch('./processEditAddress.php', config)
        .then((response) => {
            return response.json();
        })
        .then((json) => {
            if (json.status == 'ok') {
                alert('Dados atualizados com sucesso!');
                window.location.href = 'myAddresses.php';
            } else if (json.status == 'sla') { 
                alert('Erro');
            } else {
                alert('Não foi possível realizar a atualização!');
            }
        })
    })
})