document.getElementById("btnGuardar").onclick=(event)=>{
    event.preventDefault()//evita recargar la pagina 
document.getElementById("form").classList.add('was-validated')


    document.querySelector("#divAlerta").classList.remove("d-none")
    Swal.fire({
        icon: "error",
        title: "Oops...",
        text: "Favor de llenar los campos",
        footer: '<a href="#">Why do I have this issue?</a>'
      });
 }