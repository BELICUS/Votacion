const users = [
  {
    user_id: "1",
    user_name: "juan",
    user_pass: "1234",
  },
]
const USERS = JSON.parse(localStorage.getItem("users")) || users
function loguear() {
  // let user = document.getElementById("usuario").value;
  // let pass = document.getElementById("clave").value;

  // if(user == "juan" && pass == "1234")
  // {
  //     window.location="bienvenida.html"
  // } else alert("datos incorrectos");
  let user = document.getElementById("usuario").value
  let pass = document.getElementById("clave").value
  let found = false
  USERS.map((element) => {
    if (element.user_name == user && element.user_pass == pass) {
      found = true
      window.location = "bienvenida.html"
    }
  })
  if (!found) {
    alert("datos incorrectos")
  }
}

function registrar() {
  let user = document.getElementById("usuario").value
  let pass = document.getElementById("clave").value

  let found = false
  USERS.map((element) => {
    if (element.user_name == user) {
      found = true
    }
  })
  if (!found) {
    let newUser = {
      user_name: user,
      user_pass: pass,
    }
    users.push(newUser)
    localStorage.setItem("users", JSON.stringify(users))
    alert("Usuario registrado")
  } else {
    alert("Usuario ya registrado")
  }
}
