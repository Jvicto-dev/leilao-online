function verifyValues(array_values) {
    var verify = []

    array_values.forEach(element => {
        if (element == "" || element == null || element == '---') {
            verify.push('F')
        } else {
            verify.push('V')
        }
    });

    if (verify.indexOf('F') > -1) {
        return false
    } else {
        return true
    }
}

let photo = document.getElementById('imgPhoto');
let file = document.getElementById('flImage');

photo.addEventListener('click', () => {
    file.click();
});

file.addEventListener('change', () => {

    if (file.files.length <= 0) {
        return;
    }

    let reader = new FileReader();

    reader.onload = () => {
        photo.src = reader.result;
    }

    reader.readAsDataURL(file.files[0]);
});


function sendImage() {
    const formData = new FormData();
    const file = document.getElementById('flImage');
    const img = file.files[0];
    formData.append('image', img);

    axios.post('../../Actions/ActionFooterLogo.php', formData).then((res) => {

        if (res.status == 201) {
            Swal.fire({
                // position: 'center',
                icon: 'success',
                title: 'Imagem rodapé trocada com sucesso !',
                showConfirmButton: true,
            }).then((result) => {
                if (result.dismiss === Swal.DismissReason.timer) {
                    location.reload()
                } else if (result.isConfirmed) {
                    location.reload()
                } else {
                    location.reload()
                }
            })
        }
    }).catch(function (error) {
        if (error.response) {
            Swal.fire(
                'Ops',
                'Ocorreu um erro com a aplicação !',
                'error'
            );
            // The request was made and the server responded with a status code
            // that falls out of the range of 2xx
            console.log(error.response.data);
            console.log(error.response.status);
            console.log(error.response.headers);
        } else if (error.request) {
            // The request was made but no response was received
            // `error.request` is an instance of XMLHttpRequest in the browser and an instance of
            // http.ClientRequest in node.js
            console.log(error.request);
        } else {
            // Something happened in setting up the request that triggered an Error
            console.log('Error', error.message);
        }
        console.log(error.config);
    });

}

function allInfors() {
    var email_contato = $("#email_contato").val()
    var telefone = $("#telefone").val()
    var whatsapp = $("#whatsapp").val()
    var localizacao = $("#localizacao").val()
    var localizacao_link = $("#localizacao_link").val()

    array_values = [email_contato, telefone, whatsapp, localizacao, localizacao_link]

    if (verifyValues(array_values)) {
        axios.post('../../api/controller.php', {
            action: "infors-footer",
            values: [
                array_values
            ]
        }).then((res) => {
            if (res.status == 201) {
                Swal.fire({
                    icon: 'success',
                    title: 'Informações alteradas com sucesso !',
                    showConfirmButton: true,
                }).then((result) => {
                    if (result.dismiss === Swal.DismissReason.timer) {
                        location.reload()
                    } else if (result.isConfirmed) {
                        location.reload()
                    } else {
                        location.reload()
                    }
                })
            }
        }).catch(function (error) {
            if (error.response) {
                Swal.fire(
                    'Ops',
                    'Ocorreu um erro com a aplicação !',
                    'error'
                );
                // The request was made and the server responded with a status code
                // that falls out of the range of 2xx
                console.log(error.response.data);
                console.log(error.response.status);
                console.log(error.response.headers);
            } else if (error.request) {
                // The request was made but no response was received
                // `error.request` is an instance of XMLHttpRequest in the browser and an instance of
                // http.ClientRequest in node.js
                console.log(error.request);
            } else {
                // Something happened in setting up the request that triggered an Error
                console.log('Error', error.message);
            }
            console.log(error.config);
        });
    } else {
        alert('algo errado')
    }



}