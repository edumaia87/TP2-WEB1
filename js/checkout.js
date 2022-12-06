window.addEventListener('load', () => {
    const form = document.querySelector('.form-checkout');
    form.addEventListener('submit', (event) => {
        event.preventDefault();
    })

    document.querySelector('#submit-button').addEventListener('click', () => {
        const data = new FormData(form);
        data.append('bookId', form.bookId.value);
        data.append('userId', form.userId.value);
        data.append('price', form.price.value);
        data.append('saleDate', form.saleDate.value);

        const config = {
            method: 'POST',
            body: data
        }

        fetch('./checkout.php', config)
        .then((response) => {
            return response.json();
        })
        .then((json) => {
            if(json.status == 'ok') {
                alert('Compra realizada com sucesso!');
            } else {
                alert('Não foi possível realizar a compra!');
            }
        })
    })
})