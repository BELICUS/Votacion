function loguear(){
    let user = document.getElementById("usuario").value;
    let pass = document.getElementById("clave").value;

    if(user == "juan" && pass == "1234")
    {
        window.location="bienvenida.html"
    } else alert("datos incorrectos");

}