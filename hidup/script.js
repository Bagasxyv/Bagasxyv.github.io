document.querySelector('form').onsubmit = function(event){
    var username = document.querySelector('input[name="usn"]').value
    var password = document.querySelector('input[name="psw"]').value

    if(username === '' || password === ''){
        alert('Username dan Password harus diisi')
        event.preventDefault()
    }
}