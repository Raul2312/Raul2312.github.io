
document.getElementById("btnGuardar").onclick=(event)=>{
   // event.preventDefault()//evita recargar la pagina 
document.getElementById("form").classList.add('was-validated')


    document.querySelector("#divAlerta").classList.remove("d-none")
    Swal.fire({
        icon: "error",
        title: "Oops...",
        text: "Favor de llenar los campos",
        footer: '<a href="#">Why do I have this issue?</a>'
      });
 }





 
 var botonesEditar=document.getElementsByClassName("btnEditar")
for(var i=0;i<botonesEditar.length;i++){
  botonesEditar[i].onclick=(evt)=>{
    var btn=evt.target.closest(".btnEditar");

    var id=btn.getAttribute("data-id")
    document.getElementById("txtIdEdit").value=id


<<<<<<< HEAD
=======
    var idreservacion=btn.getAttribute("data-reservacion")
    document.getElementById("txtId").value=idreservacion
    
>>>>>>> f6af56bddc9636e1fe24a44c6d06e93d62d4be54
    var nombre=btn.getAttribute("data-nombre")
    document.getElementById("txtNombreEdit").value=nombre

    var monto=btn.getAttribute("data-monto")
    document.getElementById("txtMontoEdit").value=monto

    var fecha=btn.getAttribute("data-fecha")
    document.getElementById("txtFechaEdit").value=fecha

    var metodo=btn.getAttribute("data-metodo")
    document.getElementById("txtMetodoEdit").value=metodo

    var estado=btn.getAttribute("data-estado")
    document.getElementById("txtEstadoEdit").value=estado

   

    

    



  }
}




var botonesEditarEmpleado=document.getElementsByClassName("btnEditarEmpleado")
for(var i=0;i<botonesEditarEmpleado.length;i++){
  botonesEditarEmpleado[i].onclick=(evt)=>{
    var btn=evt.target.closest(".btnEditarEmpleado");

    var id=btn.getAttribute("data-id")
    document.getElementById("txtIdEdit").value=id


    var name=btn.getAttribute("data-name")
    document.getElementById("txtNombreEdit").value=name

    var cargo=btn.getAttribute("data-cargo")
    document.getElementById("txtCargoEdit").value=cargo
    
    var salario=btn.getAttribute("data-salario")
    document.getElementById("txtSalarioEdit").value=salario

    var fecha=btn.getAttribute("data-fecha")
    document.getElementById("txtFechaEdit").value=fecha

    var telefono=btn.getAttribute("data-telefono")
    document.getElementById("txtTelefonoEdit").value=telefono

    var correo=btn.getAttribute("data-correo")
    document.getElementById("txtCorreoEdit").value=correo

    var direccion=btn.getAttribute("data-direccion")
    document.getElementById("txtDireccionEdit").value=direccion

   

    

    



  }
}



//eliminar pago 

 var botones=document.getElementsByClassName("btnEliminar")
 var id=0
 for(var i=0;i<botones.length;i++){
  botones[i].onclick=(evt)=>{
    var btn = evt.target
    id= btn.getAttribute('data-id')
//alert("ID:"+id)
document.getElementById("botoneliminar").onclick=(event)=>{

  location.href="../php/remove-pago.php?id="+id

  }
 }



 }













var buttons_us = document.getElementsByClassName("btnEliminarUser");

for (var i = 0; i < buttons_us.length; i++) {
  buttons_us[i].onclick = function(evt) {
    var btnn = evt.target;
    var ida = btnn.getAttribute('data-id');  // Obtener el ID del botón
    
    Swal.fire({
        title: '¿Estás seguro de eliminar el usuario?',
        text: "¡Esta acción no se puede deshacer!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Sí, eliminar',
        cancelButtonText: 'Cancelar',
        customClass: {
            confirmButton: 'btn btn-primary me-3', // Clase personalizada
            cancelButton: 'btn btn-secondary ms-4'
        },
        buttonsStyling: false // Desactiva los estilos predeterminados de SweetAlert
    }).then((result) => {
        if (result.isConfirmed) {
          location.href = "../php/remove-users.php?id="+ida  // Redirige con el ID del usuario
        }
    });
  };
}


//ELIMINAR EMPLEADOS
var buttons_em = document.getElementsByClassName("btnEliminarEmpleado");

for (var i = 0; i < buttons_em.length; i++) {
  buttons_em[i].onclick = function(evt) {
    var btne = evt.target.closest(".btnEliminarEmpleado ");
    var ide = btne.getAttribute('data-id');  // Obtener el ID del botón
    
    Swal.fire({
        title: '¿Estás seguro de eliminar el empleado?',
        text: "¡Esta acción no se puede deshacer!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Sí, eliminar',
        cancelButtonText: 'Cancelar',
        customClass: {
            confirmButton: 'btn btn-primary me-3', // Clase personalizada
            cancelButton: 'btn btn-secondary ms-4'
        },
        buttonsStyling: false // Desactiva los estilos predeterminados de SweetAlert
    }).then((result) => {
        if (result.isConfirmed) {
          location.href = "../php/remove-empleados.php?id="+ide;  // Redirige con el ID del usuario
        }
    });
  };
}


<<<<<<< HEAD
var buttons_re = document.getElementsByClassName("btnEliminarReservas");

for (var i = 0; i < buttons_re.length; i++) {
  buttons_re[i].onclick = function(evt) {
    var btnre = evt.target.closest(".btnEliminarReservas");
    var idre = btnre.getAttribute('data-id');  // Obtener el ID del botón
    
    Swal.fire({
        title: '¿Estás seguro de eliminar la reserva?',
        text: "¡Esta acción no se puede deshacer!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Sí, eliminar',
        cancelButtonText: 'Cancelar',
        customClass: {
            confirmButton: 'btn btn-primary me-3', // Clase personalizada
            cancelButton: 'btn btn-secondary ms-4'
        },
        buttonsStyling: false // Desactiva los estilos predeterminados de SweetAlert
    }).then((result) => {
        if (result.isConfirmed) {
          location.href = "../php/remove-reservas.php?id="+idre  // Redirige con el ID del usuario
        }
    });
  };
}



var buttons_tr = document.getElementsByClassName("btnEliminarTransporte");

for (var i = 0; i < buttons_tr.length; i++) {
  buttons_tr[i].onclick = function(evt) {
    var btntr = evt.target.closest(".btnEliminarTransporte");
    var idtr = btntr.getAttribute('data-id');  // Obtener el ID del botón
    
    Swal.fire({
        title: '¿Estás seguro de eliminar el Coche?',
        text: "¡Esta acción no se puede deshacer!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Sí, eliminar',
        cancelButtonText: 'Cancelar',
        customClass: {
            confirmButton: 'btn btn-primary me-3', // Clase personalizada
            cancelButton: 'btn btn-secondary ms-4'
        },
        buttonsStyling: false // Desactiva los estilos predeterminados de SweetAlert
    }).then((result) => {
        if (result.isConfirmed) {
          location.href = "../php/remove-transporte.php?id="+idtr  // Redirige con el ID del usuario
        }
    });
  };
}




var buttons_pa = document.getElementsByClassName("btnEliminarPaquetes");

for (var i = 0; i < buttons_pa.length; i++) {
  buttons_pa[i].onclick = function(evt) {
    var btnpa = evt.target.closest(".btnEliminarPaquetes");
    var idpa = btnpa.getAttribute('data-id');  // Obtener el ID del botón
    
    Swal.fire({
        title: '¿Estás seguro de eliminar el paquete?',
        text: "¡Esta acción no se puede deshacer!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Sí, eliminar',
        cancelButtonText: 'Cancelar',
        customClass: {
            confirmButton: 'btn btn-primary me-3', // Clase personalizada
            cancelButton: 'btn btn-secondary ms-4'
        },
        buttonsStyling: false // Desactiva los estilos predeterminados de SweetAlert
    }).then((result) => {
        if (result.isConfirmed) {
          location.href = "../php/remove-paquetes.php?id="+idpa  // Redirige con el ID del usuario
        }
    });
  };
}


var buttons_ho = document.getElementsByClassName("btnEliminarHospedaje");

for (var i = 0; i < buttons_ho.length; i++) {
  buttons_ho[i].onclick = function(evt) {
    var btnho = evt.target.closest(".btnEliminarHospedaje");
    var idho = btnho.getAttribute('data-id');  // Obtener el ID del botón
    
    Swal.fire({
        title: '¿Estás seguro de eliminar el hotel?',
        text: "¡Esta acción no se puede deshacer!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Sí, eliminar',
        cancelButtonText: 'Cancelar',
        customClass: {
            confirmButton: 'btn btn-primary me-3', // Clase personalizada
            cancelButton: 'btn btn-secondary ms-4'
        },
        buttonsStyling: false // Desactiva los estilos predeterminados de SweetAlert
    }).then((result) => {
        if (result.isConfirmed) {
          location.href = "../php/remove-hospedaje.php?id="+idho  // Redirige con el ID del usuario
        }
    });
  };
}



=======
>>>>>>> f6af56bddc9636e1fe24a44c6d06e93d62d4be54








