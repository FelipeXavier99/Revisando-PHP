<html>
<head>
	<meta charset="utf-8">
</head>
<body>
	 <div>
   <label for="carro">DADOS CARRO:</label> <p>
   </div>
  </div>

	<form action = "../controller/controller.php" method="post">
   <div> Motor  : &nbsp <input type="text" name="motor">   </div> 
	<div> Modelo : <input type="text" name="modelo ">   </div> 
	<div>	Cor : &nbsp &nbsp &nbsp <input type="text" name="cor"> </div> 
	<div>	Marca : &nbsp <input type="text" name="marca"> </div> 
	<div>	Ano : &nbsp &nbsp &nbsp <input type="text" name="ano"> </div> 
	<div>	Cambio : <input type="text" name="cambio">  </div> 

        <p><p><p>


      <div>
   <label for="carro">DADOS MOTOR:</label> <p>
   </div>
  </div>
  
  <div>
        <label for="cilindro">Cilindro:</label> &nbsp &nbsp &nbsp 
        <input type="text" name="cilindro" />
   </div>
  <div>
        <label for="potencia">Potencia:</label>  &nbsp  &nbsp  &nbsp 
        <input type="text" name="" ="potencia" />
   </div>
   <div>
        <label for="giroatual">GirotAual:</label> &nbsp &nbsp 
        <input type="text" name="" ="giroatual" />
   </div>
   <div>
        <label for="combustivel">combustivel:</label >&nbsp 
        <input type="text" name="combustivel" />
   </div>


<p> <p>
			

		<input type="submit" value="GRAVAR">
	</form>







</body>
</html>