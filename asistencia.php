<!--https://www.ecodeup.com/crud-en-php-para-principiantes/-->
<?php
include("crud_alumno.php");
           
function getCountAlumno($nacimiento) {
    $crud = new CrudAlumno();
    $number = $crud->countAlumno($nacimiento);
    echo $number;
    return $number;    
}
?>
<!DOCTYPE html>
<html lang="en">

    <head>
   
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
    
        <title>Evento 29 Septiembre</title>
    
        <!-- Bootstrap core CSS -->
        <link href="./css/bootstrap.css" rel="stylesheet">
        <link href="./css/style.css" rel="stylesheet">
    
        <!-- Add custom CSS here -->
        <link href="./css/modern-business.css" rel="stylesheet">
        <link href="./font-awesome/css/font-awesome.min.css" rel="stylesheet">
    </head>

<body>

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               
            </div>  
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.html">Inicio</a>
                        <li><a href="#">Contacto</a>
                        </li>
                        
                    </ul>
                </div>  
        </div>
    </nav>


    <!-- /.section -->
    <div class="container">
       
        
        <div class="row">

            <div class="col-lg-12">
                <h1 class="page-header">Reunión de Antiguos Alumnos
                  
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.html">Inicio</a></li>
                    <li><a href="evento29septiembre.html">Reunión Antiguos Alumnos</a></li>
                    <li class="active">Asistencia</li>
                </ol>
            </div>

        </div>
        <!-- /.row -->
        
        <div class="row">

            <h3><b>Década de los 40</b></h3>
           
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
                    <div class="employees">
                        <p class="text-center employee-p"> 1940</p>
                        <p class="counter-count"><?php getCountAlumno(1940)?></p>
                       
                    </div>
                </div>
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
                    <div class="employees">
                        <p class="text-center employee-p"> 1941</p>
                        <p class="counter-count"><?php getCountAlumno(1941)?></p>
                       
                    </div>
                </div>
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
                    <div class="employees">
                        <p class="text-center employee-p"> 1942</p>
                        <p class="counter-count"><?php getCountAlumno(1942)?></p>
                       
                    </div>
                </div>
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
                <div class="employees">
                    <p class="text-center employee-p"> 1943</p>
                    <p class="counter-count"><?php getCountAlumno(1943)?></p>
                   
                </div>
            </div>

            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
                <div class="customer">
                   
                    <p class=" text-center customer-p"> 1944</p>
                    <p class="counter-count"><?php getCountAlumno(1944)?></p>
                </div>
            </div>

            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
                <div class="design">
                   
                    <p class="text-center design-p"> 1945</p>
                    <p class="counter-count"><?php getCountAlumno(1945)?></p>
                </div>
            </div>

            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
                <div class="order">
                   
                    <p class="text-center order-p"> 1946</p>
                    <p class="counter-count"><?php getCountAlumno(1946)?></p>
                </div>
            </div>
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
                <div class="order">
                   
                    <p class="text-center order-p"> 1947</p>
                    <p class="counter-count"><?php getCountAlumno(1947)?></p>
                </div>
            </div>
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
                <div class="order">
                   
                    <p class="text-center order-p"> 1948</p>
                    <p class="counter-count"><?php getCountAlumno(1948)?></p>
                </div>
            </div>
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
                <div class="order">
                   
                    <p class="text-center order-p"> 1949</p>
                    <p class="counter-count"><?php getCountAlumno(1949)?></p>
                </div>
            </div>
            

        </div>

        <div class="row">
            <h3><b>Década de los 50</b></h3>
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
                <div class="employees">
                    <p class="employee-p"> 1950</p>
                    <p class="counter-count"><?php getCountAlumno(1950)?></p>
                   
                </div>
            </div>

            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
                <div class="customer">
                        <p class="customer-p"> 1951</p>
                        <p class="counter-count"><?php getCountAlumno(1951)?></p>
                    
                </div>
            </div>

            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
                <div class="design">
                        <p class="design-p"> 1952</p>
                        <p class="counter-count"><?php getCountAlumno(1952)?></p>
                    
                </div>
            </div>

            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
                <div class="order">
                        <p class="order-p"> 1953</p>
                        <p class="counter-count"><?php getCountAlumno(1953)?></p>
                    
                </div>
            </div>
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
                <div class="order">
                        <p class="order-p"> 1954</p>
                        <p class="counter-count"><?php getCountAlumno(1954)?></p>
                   
                </div>
            </div>
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
                <div class="order">
                        <p class="order-p"> 1955</p>
                        <p class="counter-count"><?php getCountAlumno(1955)?></p>
                   
                </div>
            </div>
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
                <div class="order">
                        <p class="order-p"> 1956</p>
                        <p class="counter-count"><?php getCountAlumno(1956)?></p>
                   
                </div>
            </div>
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
                <div class="order">
                        <p class="order-p"> 1957</p>
                        <p class="counter-count"><?php getCountAlumno(1957)?></p>
                   
                </div>
            </div>
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
                <div class="order">
                        <p class="order-p"> 1958</p>
                        <p class="counter-count"><?php getCountAlumno(1958)?></p>
                    
                </div>
            </div>
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
                <div class="order">
                        <p class="order-p"> 1959</p>
                        <p class="counter-count"><?php getCountAlumno(1959)?></p>
                   
                </div>
            </div>
            

        </div>

        <div class="row">
                <h3><b>Década de los 60</b></h3>
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
                <div class="employees">
                        <p class="employee-p"> 1960</p>
                        <p class="counter-count"><?php getCountAlumno(1960)?></p>
                   
                </div>
            </div>

            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
                <div class="customer">
                        <p class="customer-p"> 1961</p>
                        <p class="counter-count"><?php getCountAlumno(1961)?></p>
                    
                </div>
            </div>

            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
                <div class="design">
                        <p class="design-p"> 1962</p>
                        <p class="counter-count"><?php getCountAlumno(1962)?></p>
                    
                </div>
            </div>

            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
                <div class="order">
                        <p class="order-p"> 1963</p>
                        <p class="counter-count"><?php getCountAlumno(1963)?></p>
                   
                </div>
            </div>
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
                <div class="order">
                        <p class="order-p"> 1964</p>
                        <p class="counter-count"><?php getCountAlumno(1964)?></p>
                    
                </div>
            </div>
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
                <div class="order">
                        <p class="order-p"> 1965</p>
                        <p class="counter-count"><?php getCountAlumno(1965)?></p>
                   
                </div>
            </div>
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
                <div class="order">
                        <p class="order-p"> 1966</p>
                        <p class="counter-count"><?php getCountAlumno(1966)?></p>
                    
                </div>
            </div>
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
                <div class="order">
                        <p class="order-p"> 1967</p>
                        <p class="counter-count"><?php getCountAlumno(1967)?></p>
                   
                </div>
            </div>
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
                <div class="order">
                        <p class="order-p"> 1968</p>
                        <p class="counter-count"><?php getCountAlumno(1968)?></p>
                   
                </div>
            </div>
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
                <div class="order">
                        <p class="order-p"> 1969</p>
                        <p class="counter-count"><?php getCountAlumno(1969)?></p>
                    
                </div>
            </div>
            

        </div>

        <div class="row">
                <h3><b>Década de los 70</b></h3>
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
                <div class="employees">
                        <p class="employee-p"> 1970</p>
                        <p class="counter-count"><?php getCountAlumno(1970)?></p>
                   
                </div>
            </div>

            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
                <div class="customer">
                        <p class="customer-p"> 1971</p>
                        <p class="counter-count"><?php getCountAlumno(1971)?></p>
                  
                </div>
            </div>

            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
                <div class="design">
                        <p class="design-p"> 1972</p>
                        <p class="counter-count"><?php getCountAlumno(1972)?></p>
                    
                </div>
            </div>

            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
                <div class="order">
                   
                    <p class="order-p"> 1973</p>
                    <p class="counter-count"><?php getCountAlumno(1973)?></p>
                </div>
            </div>
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
                <div class="order">
                   
                    <p class="order-p"> 1974</p>
                    <p class="counter-count"><?php getCountAlumno(1974)?></p>
                </div>
            </div>
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
                <div class="order">
                   
                    <p class="order-p"> 1975</p>
                    <p class="counter-count"><?php getCountAlumno(1975)?></p>
                </div>
            </div>
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
                <div class="order">
                   
                    <p class="order-p"> 1976</p>
                    <p class="counter-count"><?php getCountAlumno(1976)?></p>
                </div>
            </div>
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
                <div class="order">
                   
                    <p class="order-p"> 1977</p>
                    <p class="counter-count"><?php getCountAlumno(1977)?></p>
                </div>
            </div>
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
                <div class="order">
                    
                    <p class="order-p"> 1978</p>
                    <p class="counter-count"><?php getCountAlumno(1978)?></p>
                </div>
            </div>
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
                <div class="order">
                   
                    <p class="order-p"> 1979</p>
                    <p class="counter-count"><?php getCountAlumno(1979)?></p>
                </div>
            </div>
            

        </div>

        <div class="row">
                <h3><b>Década de los 80</b></h3>
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
                <div class="employees">
                        <p class="employee-p"> 1980</p>
                        <p class="counter-count"><?php getCountAlumno(1980)?></p>
                  
                </div>
            </div>

            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
                <div class="customer">
                        <p class="customer-p"> 1981</p>
                        <p class="counter-count"><?php getCountAlumno(1981)?></p>
                   
                </div>
            </div>

            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
                <div class="design">
                        <p class="design-p"> 1982</p>
                        <p class="counter-count"><?php getCountAlumno(1982)?></p>
                   
                </div>
            </div>

            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
                <div class="order">
                        <p class="order-p"> 1983</p>
                        <p class="counter-count"><?php getCountAlumno(1983)?></p>
                  
                </div>
            </div>
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
                <div class="order">
                        <p class="order-p"> 1984</p>
                        <p class="counter-count"><?php getCountAlumno(1984)?></p>
                   
                </div>
            </div>
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
                <div class="order">
                        <p class="order-p"> 1985</p>
                        <p class="counter-count"><?php getCountAlumno(1985)?></p>
                  
                </div>
            </div>
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
          
                <div class="order">
                        <p class="order-p"> 1986</p>
                    <p class="counter-count">
                        <?php getCountAlumno(1986)?></p>
                   
                </div>
            
            </div>
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
                <div class="order">
                        <p class="order-p"> 1987</p>
                        <p class="counter-count">
                        <?php getCountAlumno(1987)?></p>
                   
                </div>
            </div>
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
                <div class="order">
                        <p class="order-p"> 1988</p>
                        <p class="counter-count">
                        <?php getCountAlumno(1988)?></p>
                  
                </div>
            </div>
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
                <div class="order">
                        <p class="order-p"> 1989</p>
                        <p class="counter-count">
                        <?php getCountAlumno(1989)?></p>
                   
                </div>
            </div>
            

        </div>

        <div class="row">
                <h3><b>Década de los 90</b></h3>
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
                <div class="employees">
                        <p class="employee-p"> 1990</p>
                        <p class="counter-count">
                        <?php getCountAlumno(1990)?></p>
                  
                </div>
            </div>

            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
                <div class="customer">
                        <p class="customer-p"> 1991</p>
                        <p class="counter-count">
                        <?php getCountAlumno(1991)?></p>
                   
                </div>
            </div>

            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
                <div class="design">
                        <p class="design-p"> 1992</p>
                        <p class="counter-count">
                        <?php getCountAlumno(1992)?></p>
                   
                </div>
            </div>

            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
                <div class="order">
                        <p class="order-p"> 1993</p>
                        <p class="counter-count">
                        <?php getCountAlumno(1993)?></p>
                   
                </div>
            </div>
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
                <div class="order">
                        <p class="order-p"> 1994</p>
                        <p class="counter-count">
                        <?php getCountAlumno(1994)?></p>
                  
                </div>
            </div>
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
                <div class="order">
                        <p class="order-p"> 1995</p>
                        <p class="counter-count">
                        <?php getCountAlumno(1995)?></p>
                  
                </div>
            </div>
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
                <div class="order">
                        <p class="order-p"> 1996</p>
                        <p class="counter-count">
                        <?php getCountAlumno(1996)?></p>
                   
                </div>
            </div>
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
                <div class="order">
                        <p class="order-p"> 1997</p>
                        <p class="counter-count">
                        <?php getCountAlumno(1997)?></p>
                  
                </div>
            </div>
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
                <div class="order">
                        <p class="order-p"> 1998</p>
                        <p class="counter-count">
                        <?php getCountAlumno(1998)?></p>
                   
                </div>
            </div>
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
                <div class="order">
                        <p class="order-p"> 1999</p>
                           <p class="counter-count">
                        <?php getCountAlumno(1999)?></p>
                   
                </div>
            </div>
            

        </div>

        <div class="row">
                <h3><b>Década del 2000</b></h3>
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
                <div class="employees">
                        <p class="employee-p"> 2000</p>
                        <p class="counter-count">
                        <?php getCountAlumno(2000)?></p>
                    
                </div>
            </div>

            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
                <div class="customer">
                        <p class="customer-p"> 2001</p>
                        <p class="counter-count">
                        <?php getCountAlumno(2001)?></p>
                   
                </div>
            </div>

            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
                <div class="design">
                        <p class="design-p"> 2002</p>
                        <p class="counter-count">
                        <?php getCountAlumno(2002)?></p>
                   
                </div>
            </div>

            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
                <div class="order">
                        <p class="order-p"> 2003</p>
                        <p class="counter-count">
                        <?php getCountAlumno(2003)?></p>
                   
                </div>
            </div>
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12">
                <div class="order">
                        <p class="order-p"> 2004</p>
                        <p class="counter-count">
                        <?php getCountAlumno(2004)?></p>
                   
                </div>
            </div>
            
            

        </div>

    

    </div>
      
   
    <!-- /.container -->

    <div class="container">

        <hr>

        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Company 2013</p>
                </div>
            </div>        </footer>

    </div>
    <!-- /.container -->

    <!-- JavaScript -->
    <script src="./js/jquery-1.10.2.js"></script>
    <script src="./js/bootstrap.js"></script>
    <script src="./js/modern-business.js"></script>
   
    

</body>

</html>
