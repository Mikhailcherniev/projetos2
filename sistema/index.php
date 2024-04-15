<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title><?php echo $nome_sistema ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<style type="text/css">
  a, a:hover {
  color: <?php echo $cor_sistema ?>
}


/* Back to top button */
.back-to-top {
  background: <?php echo $cor_sistema ?>
  color: #fff;
}


.back-to-top:focus {
  background: <?php echo $cor_sistema ?>
  color: #fff;
}

.back-to-top:hover {
  background: #019090;
  color: #fff;
}

.navbar-default {
  background: <?php echo $cor_sistema ?>
}

.form-control:focus {
  border-color: <?php echo $cor_sistema ?>
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 2px <?php echo $cor_sistema ?>;
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 2px <?php echo $cor_sistema ?>;
}

.service .carousel-indicators .active {
  background: <?php echo $cor_sistema ?>
}

.btn-theme {
  background: <?php echo $cor_sistema ?>
}

.contact-widget i {
  color: <?php echo $cor_sistema ?>
}


#intro .btn-get-started {
  font-family: "Raleway", sans-serif;
  font-weight: 500;
  font-size: 14px;
  letter-spacing: 1px;
  display: inline-block;
  padding: 12px 32px;
  border-radius: 3px;
  transition: 0.5s;
  line-height: 1;
  margin: 10px;
  color: #fff;
  -webkit-animation-delay: 0.8s;
  animation-delay: 0.8s;
  border: 2px solid <?php echo $cor_sistema ?>;
}

#intro .btn-get-started:hover {
  background: <?php echo $cor_sistema ?>;
  color: #fff;
  text-decoration: none;
}

</style>

<section class="vh-100" style="background-color: #f0f0f0;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">
          	
          	<img src="img/logo.png" width="200px" style="margin-bottom: 20px">

          	<form method="post" action="autenticar.php">
            <div class="form-outline mb-4">
            	
              <input name="email" type="email" id="typeEmailX-2" class="form-control" placeholder="Email" required/>
              
            </div>

            <div class="form-outline mb-4">
            	  
              <input name="senha" type="password" id="typePasswordX-2" class="form-control " placeholder="Senha" required/>
            
            </div>       

            <div class="d-grid gap-2">
            <button class="btn btn-primary" type="submit">Login</button>
        	</div>

        </form>

            <hr class="my-4">

          <div align="center"><small><a href="#" data-bs-toggle="modal" data-bs-target="#modalRecuperar">Recuperar Senha</a></small></div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>