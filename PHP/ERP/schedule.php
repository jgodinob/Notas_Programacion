<?php

$titlePage = "Horario";	// Define el título de la página en la que nos encontramos
$page="Horario";			// Señalará en NaV nuestra ubicación modificando la clase

include('inc/head.php');
include 'inc/nav.php';
?>
<?php
$schedule = array (
	"01/01/2017"=>array(
		"Dani"=>array ( 8.30, 18.0, 40 ),
		"Antonio"=>array ( 8.30, 18.0, 40 ),
		"Héctor"=>array ( 8.30, 18.0, 40 )
		),
	"02/01/2017"=>array(
		"Dani"=>array ( 8.30, 18.0, 40 ),
		"Antonio"=>array ( 8.30, 18.0, 40 ),
		"Héctor"=>array ( 8.30, 18.0, 40 )
		),
	"02/01/2017"=>array(
		"Dani"=>array ( 8.30, 18.0, 40 ),
		"Antonio"=>array ( 8.30, 18.0, 40 ),
		"Héctor"=>array ( 8.30, 18.0, 40 )
		),
	);
var_dump($schedule);

?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Users <small>Some examples to get you started</small></h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Default Example <small>Users</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                      Horas dadas mes de Mayo.
                    </p>
                    <div class="table-responsive">
	                    <table id="datatable" class="table table-striped table-bordered">
	                      <thead>
	                        <tr>
	                          <th rowspan="2">Fecha</th>
	                          <th colspan="3">Trabajador 1</th>
	                          <th >80.79 %</th>
	                          <th colspan="3">Trabajador 2</th>
	                          <th >80.79 %</th>
	                          <th colspan="3">Trabajador 3</th>
	                          <th >80.79 %</th>
	                          <th colspan="3">Trabajador 4</th>
	                          <th >80.79 %</th>
	                          <th colspan="3">Trabajador 5</th>
	                          <th >80.79 %</th>
	                          <th colspan="3">Trabajador 6</th>
	                          <th >80.79 %</th>
	                        </tr>
							<tr>
	                          <th>H_entrada</th>
	                          <th>H_salida</th>
	                          <th>T_Comida</th>
	                          <th>Horas Dadas</th>
	                          <th>H_entrada</th>
	                          <th>H_salida</th>
	                          <th>T_Comida</th>
	                          <th>Horas Dadas</th>
	                          <th>H_entrada</th>
	                          <th>H_salida</th>
	                          <th>T_Comida</th>
	                          <th>Horas Dadas</th>
	                          <th>H_entrada</th>
	                          <th>H_salida</th>
	                          <th>T_Comida</th>
	                          <th>Horas Dadas</th>
	                          <th>H_entrada</th>
	                          <th>H_salida</th>
	                          <th>T_Comida</th>
	                          <th>Horas Dadas</th>
	                          <th>H_entrada</th>
	                          <th>H_salida</th>
	                          <th>T_Comida</th>
	                          <th>Horas Dadas</th>
	                        </tr>
	                      </thead>
	                      <tbody>
	                        <tr>
	                          <td>04/01/2011</td>
	                          <td>8.30</td>
	                          <td>18.30</td>
	                          <td>30</td>
	                          <td>7.45</td>
	                          <td>8.30</td>
	                          <td>18.30</td>
	                          <td>30</td>
	                          <td>7.45</td>
	                          <td>8.30</td>
	                          <td>18.30</td>
	                          <td>30</td>
	                          <td>7.45</td>
	                          <td>8.30</td>
	                          <td>18.30</td>
	                          <td>30</td>
	                          <td>7.45</td>
	                          <td>8.30</td>
	                          <td>18.30</td>
	                          <td>30</td>
	                          <td>7.45</td>
	                          <td>8.30</td>
	                          <td>18.30</td>
	                          <td>30</td>
	                          <td>7.45</td>
	                        </tr>
	                        <tr>
	                          <td>04/01/2011</td>
	                          <td>8.30</td>
	                          <td>18.30</td>
	                          <td>30</td>
	                          <td>7.45</td>
	                          <td>8.30</td>
	                          <td>18.30</td>
	                          <td>30</td>
	                          <td>7.45</td>
	                          <td>8.30</td>
	                          <td>18.30</td>
	                          <td>30</td>
	                          <td>7.45</td>
	                          <td>8.30</td>
	                          <td>18.30</td>
	                          <td>30</td>
	                          <td>7.45</td>
	                          <td>8.30</td>
	                          <td>18.30</td>
	                          <td>30</td>
	                          <td>7.45</td>
	                          <td>8.30</td>
	                          <td>18.30</td>
	                          <td>30</td>
	                          <td>7.45</td>
	                        </tr>

	                      </tbody>
	                    </table>
                	</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
<?php
include 'inc/footer.php';
?>