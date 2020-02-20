const form = document.getElementById('form')
const button = document.getElementById('submitButton')

const pesoPonderado = document.getElementById('pesoPonderado')
const pesoRelativo = document.getElementById('pesoRelativo')
const calificacion = document.getElementById('calificacion')

const formIsValid = {
    pesoPonderado: false,
    pesoRelativo: false,
    calificacion: false
}

form.addEventListener('submit', (e) => {
    e.preventDefault()
    validateForm()
})


pesoPonderado.addEventListener('change', (e) => {
    if(e.target.value.trim().length != "") formIsValid.pesoPonderado = true
	else  toastr.error('El campo peso ponderado, nos puede ser nulo  ', '!Hola')

})

pesoRelativo.addEventListener('change', (e) => {
    if(e.target.value.trim().length != "" ) formIsValid.pesoRelativo = true
	else  toastr.error('El campo peso relativo, nos puede ser nulo  ', '!Hola')

})

calificacion.addEventListener('change', (e) => {
    if(e.target.value.trim().length != "") formIsValid.calificacion = true
	else  toastr.error('El campo calificacion, nos puede ser nulo  ', '!Hola')

})



const validateForm = () => {
    const formValues = Object.values(formIsValid)
    const valid = formValues.findIndex(value => value == false)
    if(valid == -1) form.submit()
    else toastr.error('Los sentimos, uno de los campos, se encuentra en blanco. Por favor revisa que todos los campos estén llenos ', '!Hola')
}


