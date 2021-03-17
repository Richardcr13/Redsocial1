$(document).on('submit','#guardar', function(e)
	{
		var id = this.id;
		e.preventDefault();
		$.ajax({
			method: this.method,
			url:    this.action,
			data:   $(this).serialize(),
			dataType: 'json',
			success: function(data)
			{
				if (data['error']) 
				{
					Materialize.toast(data['mensaje'], 4000);
				}else{
					Materialize.toast(data['mensaje'], 4000);
					document.getElementById(id).reset();
				}
			} 
		});
	});

$(document).on('submit','#sesion', function(e)
	{
		var id = this.id;
		e.preventDefault();
		$.ajax({
			method: this.method,
			url:    this.action,
			data:   $(this).serialize(),
			dataType: 'json',
			success: function(data)
			{
				if (data['error']) 
				{
					Materialize.toast(data['mensaje'], 4000);
				}else{
					Materialize.toast(data['mensaje'], 4000);
					document.getElementById(id).reset();
				}
			} 
		});
	});

