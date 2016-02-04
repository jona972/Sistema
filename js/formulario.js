(function(){
	var formulario = document.Formulario_R, elementos = formulario.elements;
	var validarInputs = function(){
		var cedula=elementos.Cedula.value;
		array=cedula.split("");
		num=array.length;
		for(var i=0;i<elementos.length;i++){
			if (elementos[i].type == "text" || elementos[i].type == "email" || elementos[i].type == "password") {
				if(elementos[i].value== 0){
					console.log('El campo' + elementos[i].name + 'esta incompleto');
					elementos[i].className=elementos[i].className + " error"
					return false;
				}else{
					elementos[i].className=elementos[i].className.replace(" error","");
				}
			}
		}
		if(num==10){
			Spares=0;
			Simpares=0;
			Stotal=0;
			Decena=0;
			mulimpares=0;
			Digito=0;
			validarC=array[9];
			for(var i=0;i<=num-2;i++){
				if((i%2)!=0){
					Spares=(Spares+parseInt(array[i]));
				}else{
					mulimpares=parseInt(array[i]*2);
					if(mulimpares>9){
						Simpares=Simpares+(mulimpares-9);
					}else{
						Simpares=Simpares+mulimpares;
					}
				}
			}
			Stotal=Simpares+Spares;
			Decena=Stotal/10;
			Decena= ((parseInt(Decena)+1)*10)
			Digito=Decena-Stotal;
			if ((Digito==validarC)||(Digito==10 && validarC==0)) {
				elementos.Cedula.className=elementos.Cedula.className.replace("error","");
			}else{
				alert('La cedula ingresada no es valida')
				elementos.Cedula.className=elementos.Cedula.className + " error";
				return false;
			}
		}else{
			alert('La cedula ingresada debe tener 10 numeros')
			elementos.Cedula.className=elementos.Cedula.className + " error";
			return false;
		}
		return true;
	};
	var validarRadios = function(){
	var opciones = document.getElementsByName('sexo'),
		resul = false;

	for (var i = 0; i < elementos.length; i++) {
		if(elementos[i].type == "radio" && elementos[i].name == "sexo"){
			for (var o = 0; o < opciones.length; o++) {
				if (opciones[o].checked) {
					resul = true;
					break;
				}
			}
			if (resul == false) {
				elementos[i].parentNode.className = elementos[i].parentNode.className + " error";
				console.log('El campo sexo esta incompleto');
				return false;
			} else {
				elementos[i].parentNode.className = elementos[i].parentNode.className.replace(" error", "");
				return true;
			}
		}
	}
};

	var guardar = function(e){
		if (!validarInputs()) {
			console.log('Falto validar los Input');
			e.preventDefault();
		} else if (!validarRadios()) {
			console.log('Falto validar los Radio Button');
			e.preventDefault();
		} else {
			console.log('Envia');
		}
	};	
	var focusInput = function(){
		this.parentElement.children[1].className = "lbl active";
		this.parentElement.children[0].className = this.parentElement.children[0].className.replace(" error", "");
	};
	var blurInput = function(){
		if (this.value <=0) {
			this.parentElement.children[1].className = "lbl";
			this.parentElement.children[0].className=this.parentElement.children[0].className + " error";
		};
	};
	formulario.addEventListener("submit",guardar); 
	for(var i=0;i < elementos.length; i++){
		if (elementos[i].type == "text" || elementos[i].type == "email" ||  elementos[i].type == "password") {
			elementos[i].addEventListener("focus",focusInput);
			elementos[i].addEventListener("blur",blurInput);

		}
	}
}())