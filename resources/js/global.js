const input = document.querySelector('.twan')
const template = document.querySelector('#template')

input.addEventListener('keyup', function () {
    const content = document.querySelector('#results')
    content.innerHTML = '';

    var query = input.value
    const axios = require('axios');
    axios.get('/brands/results/'+ query)
        .then(function (response) {
            // handle success
            console.log(response)
            response.data.forEach(function (item){
                var itemContent = template.innerHTML
                    .replace('{{ name }}', item.name)
                    .replace('{{ image }}', item.image)
                content.innerHTML += itemContent
            })

        })
        .catch(function (error) {
            // handle error
            console.log(error);
        })
        .then(function () {
            // always executed
        });
})



