function confirmacion (e) {
    if (confirm('¿Estas seguro de eliminar este registro?')) {
        return true;
    } else {
        e.preventDefault();
    }

}

let linkDelete = document.querySelectorAll("#btnElim");

for(var i = 0; i< linkDelete.length; i++) {
    linkDelete[i].addEventListener('click', confirm)
}