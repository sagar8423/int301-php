function checkform()
{
    var password = document.getElementById('pwd').value;
    var confirm_password = document.getElementById('cpwd').value;

    if(password!==confirm_password)
    {
        alert('Password and Confirm Password does not matched!');
        console.log(password);
        console.log(confirm_password);
        return false;
    }
}