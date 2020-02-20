const form = document.getElementById('form')
const button = document.getElementById('submitButton')

const gender = document.getElementById('gender')


const formIsValid = {
    gender: false
}

form.addEventListener('submit', (e) => {
    e.preventDefault()
    validateForm()
})


gender.addEventListener('change', (e) => {
    if(e.target.value.trim().length > -1) formIsValid.gender = true
})



const validateForm = () => {
    const formValues = Object.values(formIsValid)
    const valid = formValues.findIndex(value => value == false)
    if(valid == -1) form.submit()
    else toastr.error('Los sentimos, uno de los  campos no esta lleno. Por favor revisa que todos los campos estén llenos ', '!Hola')
}


