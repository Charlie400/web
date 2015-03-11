function AjaxManager()
{
	var req = new XMLHttpRequest(),
		serverURL = 'http://localhost/laravel/public',
	    defaultHeaders = {'Content-Type': 'application/x-www-form-urlencoded'},
		errors = {
					timeout: "Se ha superado el tiempo máximo de envio.(timeout)",
					url: "No se pudo conectar con la url proporcionada"
				 };			

	//Recibe los headers en forma de objecto y los asigna al objeto XMLHttpRequest
	this.headers = function(headers){		
		headers = headers || {};

		headers = this.defaultHeaders(headers);

		for (var i in headers)
		{
			req.setRequestHeader(i, headers[i]);
		}
	}

	//Comprueba si los headers imprescindibles están declarados y si no se les atribuye un valor por defecto
	this.defaultHeaders = function(headers){

		for (i in defaultHeaders)
		{
			if ( headers[i] === undefined ) headers[i] = defaultHeaders[i];
		}

		return headers;
	}

	//Obtiene los valores de un campo por medio de su id
	this.getValues = function(id){
		return document.getElementById(id);
	}

	//De un conjunto de ids y names obtiene los valores de los campos y los convierte en un objeto preparado para
	//enviarse con el método request
	this.constructData = function(id, names){

		if (id instanceof Array)
		{
			var data, tmp, object = {}, 
			names = names || id;		

			for (i in id)
			{
				object[names[i]] = this.getValues(id[i]);
			}

			return object;
		}

		return null;
	}

	//Desglosa la data en un string preparado para enviarse vía Ajax
	this.processData = function(data){

		if (typeof data === typeof {})
		{
			var tmp = data;
			data = '';

			for (i in tmp)
			{
				data += i + '=' + tmp[i] + '&'; 
			}			
		}

		return data;
	}

	//Atribuye un tiempo máximo a la ejecución del script, si se cumple lanzará un error y abortará el envío
	this.timeout = function(miliseconds, err){
		miliseconds = miliseconds || 1000;

		var self = this;

		setTimeout(function(){

			self.errors(err);
			req.abort();

		}, miliseconds);
	}

	//Envía los errores a la función errors declara en el objeto para poder manejar el error
	this.errors = function(err)
	{		
		if(req.readyState !== 4) err(errors.timeout);
		else if(req.status !== 200) err(errors.url);	
	}

	/*
		Unifica muchos de los métodos recogidos en esta clase para enviar los datos mediante un objeto con las
		siguientes características:
			
		{
			data: {ejemplo: "Esto es un ejemplo", ejemplo2: "Esto es un segundo ejemplo"},
			method: method,
			url: url,
			headers: {header: value},
			success: function(response){
				console.log(response);
			},
			errors: function(err)
			{
				console.log("Aquí tienes el error: " + err);
			}
		}
	*/
	this.request = function(object){
		object.method = object.method || 'POST';		

		object.data = this.processData(object.data);

		req.open(object.method, serverURL + object.url);

		this.headers(object.headers);

		this.timeout(object.timeout, object.errors);

		req.send(object.data);

		req.onreadystatechange = function ()
        {
            if (req.readyState === 4 && req.status === 200)
            { 
                object.success(req.responseText);
            }
        }; 
	}
}

var ajax = new AjaxManager();

ajax.request({
				data: {hola: "SupersaludoTron 12"},
				method: 'POST',
				url: '/save/info',
				headers: {'Content-Type': 'application/x-www-form-urlencoded'},
				success: function(response){
					console.log(response);
				},
				errors: function(err)
				{
					console.log("Aquí tienes el error: " + err);
				}
			});