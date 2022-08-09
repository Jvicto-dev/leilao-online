//HEADER /////////////////////////////////////////////////////////

let photo = document.getElementById('imgPhotoHeader');
let file = document.getElementById('flImageHeader');

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

function updateLogoHeader() {
    const formData = new FormData();
    const file = document.getElementById('flImageHeader');
    const img = file.files[0];

    formData.append('image', img);
    formData.append('action', 'update-logo-header');

    console.log(file.files.length)

    if (file.files.length <= 0) {
        Swal.fire(
            'Ops !',
            'Selecione o arquivo antes',
            'warning'
        )
    } else {
        axios.post('../../Actions/ActionsLogotipo.php', formData).then((res) => {
            if (res.status == 201) {
                Swal.fire({
                    // position: 'center',
                    icon: 'success',
                    title: 'Logo topo trocada com sucesso !',
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
        })
    }

}


//FOOTER /////////////////////////////////////////////////////////

let photo_footer = document.getElementById('imgPhotoFooter');
let file_footer = document.getElementById('flImageFooter');

photo_footer.addEventListener('click', () => {
    file_footer.click();
});

file_footer.addEventListener('change', () => {

    if (file_footer.files.length <= 0) {
        return;
    }

    let reader = new FileReader();

    reader.onload = () => {
        photo_footer.src = reader.result;
    }

    reader.readAsDataURL(file_footer.files[0]);
});

function updateLogoFooter() {
    const formData = new FormData();
    const file = document.getElementById('flImageFooter');
    const img = file.files[0];

    formData.append('image', img);
    formData.append('action', 'update-logo-footer');

    console.log(file.files.length)

    if (file.files.length <= 0) {
        Swal.fire(
            'Ops !',
            'Selecione o arquivo antes',
            'warning'
        )
    } else {
        axios.post('../../Actions/ActionsLogotipo.php', formData).then((res) => {
            if (res.status == 201) {
                Swal.fire({
                    // position: 'center',
                    icon: 'success',
                    title: 'Logo rodapé trocada com sucesso !',
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
        })
    }

}