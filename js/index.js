window.addEventListener('load', () => {
    fetch('../js/state.php')
    .then((response) => {
        return response.json()
    })
    .then((json) => {
        let state = document.querySelector('#state')
        state.innerHTML = ''
        for (let i = 0; i < json.length; i++) {
            let option = document.createElement('option')
            option.setAttribute('value', json[i].sigla)
            option.innerText = json[i].nome
            state.append(option)
        }
    })

    document.querySelector('#state').addEventListener('change', () => {
        const state = document.querySelector('#state').value
        fetch('https://servicodados.ibge.gov.br/api/v1/localidades/estados/' + state + '/municipios')
            .then((response) => {
                return response.json()
            })
            .then((json) => {
                let city = document.querySelector('#city')
                city.innerHTML = ''
            
                for (let i = 0; i < json.length; i++) {
                    let option = document.createElement('option')
                    option.innerText = json[i].nome
                    city.append(option)
                }
            })
    })
        
    const form = document.querySelector('#login-form');
    form.addEventListener('submit', (event) => {
        event.preventDefault();
    })

    document.querySelector('#submit-button').addEventListener('click', () => {
        const data = new FormData(form);
        data.append('street', form.street.value);
        data.append('district', form.district.value);
        data.append('number', form.number.value);
        data.append('state', form.state.value);
        data.append('city', form.city.value);

        const config = {
            method: 'POST',
            body: data
        }

        fetch('./registerAddress.php', config)
            .then((response) => {
                return response.json();
            })
            .then((json) => {
                if (json.status == 'ok') {
                    alert('Endereço cadastrado com sucesso!');
                    window.location.href = 'myAddresses.php';
                } else {
                    alert('Não foi possível cadastrar o endereço!');
                }
            })
    })
})
