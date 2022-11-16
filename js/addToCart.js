window.addEventListener('load', () => {
    const form = document.querySelector('#formAddCart');
    form.addEventListener('submit', (event) => {
        event.preventDefault();
    })

    document.querySelector('#buttonBuy').addEventListener('click', () => {
        const data = new FormData(form);
        data.append('image', form.image.value);
        data.append('title', form.title.value);
        data.append('price', form.price.value);

        const config = {
            method: 'POST',
            body: data
        }

        fetch('./addToCart.php', config)
        .then((response) => {
            return response.json();
        })
        .then((json) => {
            if(json.status == 'ok') {
                alert('Inseriu no carrinho.');
            } else {
                alert('Deu ruim.');
            }
        })
    })
})