function Login_web() {
    axios({
        url:"../LoginBasico/backend/api/login.php",
        method:"post",
        responseType:"json",
        data:{
            emailId:document.getElementById('emailId').value,
            passwordId:document.getElementById('passwordId').value
        }
    }).then(res=>{
        /*if(res.data.codigoResultado == 1) {
            window.location.href = "../LoginBasico/Frontend/home/home.php";
        }
        else {
            document.getElementById('errorId').style.display = 'block';
            document.getElementById('errorId').innerHTML = res.data.mensaje;
        }*/

        document.getElementById('mensajeId').innerHTML = res.data.codigoResultado;

        console.log(res);
    }).catch(err=>{
        console.log(err);
    });
}

