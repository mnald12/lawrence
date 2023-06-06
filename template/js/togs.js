const signin = document.getElementById('signin')
const signup = document.getElementById('signup')
const create = document.getElementById('create')
const already = document.getElementById('already')

create.addEventListener('click', () => {
    signin.style.display = 'none'
    signup.style.display = 'block'
})

already.addEventListener('click', () => {
    signin.style.display = 'block'
    signup.style.display = 'none'
})