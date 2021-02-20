
// console.log('Funcionando...');

var formulario = document.getElementById('formulario');
var respuesta = document.getElementById('respuesta');

formulario.addEventListener('submit', e => {
	e.preventDefault();

	var datos = new FormData(formulario);
	console.log(datos.get('usuario')+' '+datos.get('pass'));

	fetch('coneccion.php', {
		method: 'POST',
		body: datos
	})
		.then( res => res.json() )
		.then( data => {
			// console.log(data);
			if (data==='Error-vacio'){
				respuesta.innerHTML = `
					<div class="alert alert-danger" role="alert">
						Llena los campos
					</div>
				`;	
			}else{
				respuesta.innerHTML =`
				<div class="alert alert-primary" role="alert">
					${data}<br>
				</div>
				`;	
			}
		})
		.catch( err => console.log('Error de FETCH => '+err) );
});
