<?php 
// Inicio sesiones
session_start();
if(isset($_SESSION["logged"])){
  header("Location: index.php");
}

include 'head.php';
?>
<head>
  <style>
  footer {
    position: absolute;
    right: 0px;
    top: 0;}
  </style>
</head>
  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form action="login_access.php" method="POST">
              <h1>Identifícate</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <a class="btn btn-default submit" href="index.html">Log in</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <div class="clearfix"></div>
                <br />
                <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
              </div>
            </form>
          </section>
        </div>
      </div>

    </div>



<?php 
include 'footer.php';
?>
<!--                  
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
-->
