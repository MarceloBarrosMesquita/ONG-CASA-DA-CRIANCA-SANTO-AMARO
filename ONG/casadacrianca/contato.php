
<!DOCTYPE html>
<html lang="en">
<head>
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <meta content="width=device-width,initial-scale=1" name="viewport">
  <meta content="description" name="description">
  <meta name="google" content="notranslate" />
  <meta content="Mashup templates have been developped by Orson.io team" name="author">

  <!-- Disable tap highlight on IE -->
  <meta name="msapplication-tap-highlight" content="no">
  
  <link href="./assets/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="./assets/favicon.ico" rel="icon">
  <script>
function validarCPF( cpf ){
	var filtro = /^\d{3}.\d{3}.\d{3}-\d{2}$/i;
	
	if(!filtro.test(cpf))
	{
		window.alert("CPF invÃ¡lido. Tente novamente.");
		return false;
	}
   
	cpf = remove(cpf, ".");
	cpf = remove(cpf, "-");
	
	if(cpf.length != 11 || cpf == "00000000000" || cpf == "11111111111" ||
		cpf == "22222222222" || cpf == "33333333333" || cpf == "44444444444" ||
		cpf == "55555555555" || cpf == "66666666666" || cpf == "77777777777" ||
		cpf == "88888888888" || cpf == "99999999999")
	{
		window.alert("CPF Inválido. Tente novamente.");
		return false;
   }

	soma = 0;
	for(i = 0; i < 9; i++)
	{
		soma += parseInt(cpf.charAt(i)) * (10 - i);
	}
	
	resto = 11 - (soma % 11);
	if(resto == 10 || resto == 11)
	{
		resto = 0;
	}
	if(resto != parseInt(cpf.charAt(9))){
		window.alert("CPF Inválido. Tente novamente.");
		return false;
	}
	
	soma = 0;
	for(i = 0; i < 10; i ++)
	{
		soma += parseInt(cpf.charAt(i)) * (11 - i);
	}
	resto = 11 - (soma % 11);
	if(resto == 10 || resto == 11)
	{
		resto = 0;
	}
	
	if(resto != parseInt(cpf.charAt(10))){
		window.alert("CPF Inválido. Tente novamente.");
		return false;
	}
	
	return true;
 }
 
function remove(str, sub) {
	i = str.indexOf(sub);
	r = "";
	if (i == -1) return str;
	{
		r += str.substring(0,i) + remove(str.substring(i + sub.length), sub);
	}
	
	return r;
}

/**
   * MASCARA ( mascara(o,f) e execmascara() ) CRIADAS POR ELCIO LUIZ
   * elcio.com.br
   */
function mascara(o,f){
	v_obj=o
	v_fun=f
	setTimeout("execmascara()",1)
}

function execmascara(){
	v_obj.value=v_fun(v_obj.value)
}

function cpf_mask(v){
	v=v.replace(/\D/g,"")                 //Remove tudo o que nÃ£o Ã© dÃ­gito
	v=v.replace(/(\d{3})(\d)/,"$1.$2")    //Coloca ponto entre o terceiro e o quarto dÃ­gitos
	v=v.replace(/(\d{3})(\d)/,"$1.$2")    //Coloca ponto entre o setimo e o oitava dÃ­gitos
	v=v.replace(/(\d{3})(\d)/,"$1-$2")   //Coloca ponto entre o decimoprimeiro e o decimosegundo dÃ­gitos
	return v
}
  </script>
 

  <title>Casa da Criança Santo Amaro</title>  

<link href="./main.a3f694c0.css" rel="stylesheet"></head>

<body>

 <!-- Add your content of header -->
<header>
  <nav class="navbar  navbar-fixed-top navbar-default">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle uarr collapsed" data-toggle="collapse" data-target="#navbar-collapse-uarr">
            <span class="sr-only">Casa da Criança Santo Amaro</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="./index.html" title="">
          <img src="./assets/images/logo_casa.svg" width="55" class="navbar-logo-img" alt="">
        </a>
      </div>

      <div class="collapse navbar-collapse" id="navbar-collapse-uarr">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="./index.html" title="" class="active">Inicio</a></li>
          <li><a href="./about.html" title="">Quem Somos</a></li>
          <li><a href="./pricing.html" title="">Projeto </a></li>
          <li><a href="./doacao.html" title="">Doação</a></li>
          <li><a href="./contato.php" title="">Contato</a></li>
          <li><a href="./evento.html" title="">Evento</a></li>
          <li><a href="./fotos.html" title="">Fotos</a></li>
          <li><a href="./components.html" title="">Parceiros</a></li>
        </ul>
      </div>
    </div>
  </nav>
</header>

<div class="section-container no-padding">
    <div class="container1">
        <div class="row">
            <div class="map-responsive">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3654.5382509610195!2d-46.69835148440516!3d-23.656701971006463!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5044e9cd157d%3A0xbf3e2ecf9acf3808!2sR.+Padre+Chico%2C+320+-+Santo+Amaro%2C+S%C3%A3o+Paulo+-+SP%2C+04662-000!5e0!3m2!1spt-BR!2sbr!4v1539975122737" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="col-xs-12">

                <div class="row">
                    <div class="text-center">
                        <h1>Contato</h1>
                    </div>
                    <div class="text-center">
                        <form method='get' action='email.php' class="reveal-content contact-form">
                            <div class="form-group">
                                <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome">
                            </div>
                            <div class="form-group">
                                <input type="text" name="email" class="form-control" id="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="text" name="assunto" class="form-control" id="assunto" placeholder="Assunto">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="cpf" id="cpf" onblur="javascript: validarCPF(this.value);" onkeypress="javascript: mascara(this, cpf_mask);"  maxlength="14" placeholder="CPF">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="mensagem" rows="3" placeholder="Mensagem"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<footer>
    <div class="section-container1 footer-container" style="background-color: black">
        <div class="container">
            <div class="row" >
                <font color="white">
                    <div class="col-md-4">
                        <h4><font color="white">Casa da Criança e Adolescente Santo Amaro</font> </h4>
                        <p>
                            Grossarl Rua Padre Chico, 320 <br>
                            Santo Amaro - São Paulo - SP / Cep: 04747-090
                        </p>
                        <p>
                           Email: casadacriancacca@hotmail.com
                        </p>
                        <p>
                           Tel: (11) 5686-3288 / 3624-2660
                        </p>
                        <p>
                           Fax: (11) 5686-3288
                        </p>
                    </div>
                    <div class="col-md-4">
                        <h4><font color="white">Registros Institucionais:</font></h4>
                        <p>
                            Utilidade Pública Federal Portaria nº1026 de 09/01/01 Publ. DOE 12/11/01
                        </p>
                        <p>
                            Utilidade Pública Federal Portaria n44.732 de 29/02/00 Publ. DOE 01/03/00
                        </p>
                        
                    </div>
                        
                        <div class="col-md-4">
                            <h4><font color="white">Siga-nos</font></h4>
                        <p>
                            <a href="http://www.facebook.com/home.php#!/profile.php?id=100001404329102" target="_blank" class="social-round-icon white-round-icon fa-icon" title="">
                                <font color="white"><i class="fa fa-facebook"  aria-hidden="true"></i></font>
                          </a>
                          <a href="http://twitter.com/casadacriancasa"  target="_blank" class="social-round-icon white-round-icon fa-icon" title="">
                            <font color="white"><i class="fa fa-twitter" aria-hidden="true"></i></font>
                          </a>
                          <a href="http://www.linkedin.com" target="_blank" class="social-round-icon white-round-icon fa-icon" title="">
                            <font color="white"><i class="fa fa-linkedin" aria-hidden="true"></i></font>
                          </a>
                          <a href="http://www.flickr.com/photos/casadacrianca/"target="_blank" class="social-round-icon white-round-icon fa-icon" title="">
                            <font color="white"><i class="fa fa-flickr" aria-hidden="true"></i></font>
                          </a>
                        </p>
                    </div>
                </font>
                
                   
            </div>
        </div>
    </div>
</footer>

<script>
  document.addEventListener("DOMContentLoaded", function (event) {
    navActivePage();
  });
</script>

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID 

<script>
  (function (i, s, o, g, r, a, m) {
    i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
      (i[r].q = i[r].q || []).push(arguments)
    }, i[r].l = 1 * new Date(); a = s.createElement(o),
      m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
  })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
  ga('create', 'UA-XXXXX-X', 'auto');
  ga('send', 'pageview');
</script>

-->
<!-- Google maps  -->
<!-- end Google Maps -->



<script type="text/javascript" src="./main.41beeca9.js"></script></body>

</html>