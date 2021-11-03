$(document).ready(function()
	{
	$("#boton01").click(function () {
        cedula = $("#email").val();
        $.post("http://3.93.222.241:3001/api/v1/prospects", {email: cedula}, function(data){
            console.log(data)
        })
        alert(cedula);
	});
});