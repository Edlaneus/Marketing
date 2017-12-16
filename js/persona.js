$.post(baseurl+"departamento/getDepartamento",
    {
        sitReg: 1

    },
    function (data) {
        var c = JSON.parse(data); 
        $.each(c,function(i,item){
        $('#cboDepartamento').append('<option value="'+item.departamento_id+'">'+item.tipo_usuario+'</option>');
        });
    });