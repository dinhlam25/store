<!-- <?php
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Xin chào</h1>
    <button><a href="./signOut.php">Sign out</a></button>
</body>
</html> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>TEST bootstrap</title>
</head>
<body class="container">
    <!-- breadcumb -->
    <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">HTML</a></li>
        <li class="breadcrumb-item"><a href="#">CSS</a></li>
        <li class="breadcrumb-item"><a href="#">javascript</a></li>
        <li class="breadcrumb-item"><a href="#">PHP</a></li>
        <li class="breadcrumb-item"><a href="#">jquery</a></li>
        <li class="breadcrumb-item"><a href="#">bootstrap</a></li>
        <li class="breadcrumb-item"><a href="#">ajax</a></li>
        <li class="breadcrumb-item"><a href="#">API</a></li>
        <li class="breadcrumb-item"><a href="#">DOCKER</a></li>
    </ul>
    <!-- nav , nav tabs-->
    <ul class="nav flex-column nav-tabs mb-5">
        <li class="nav-item"><a class="nav-link" href="#">HTML</a></li>
        <li class="nav-item"><a class="nav-link" href="#">CSS</a></li>
        <li class="nav-item"><a class="nav-link" href="#">PHP</a></li>
        <li class="nav-item"><a class="nav-link" href="#">JS</a></li>
        <li class="nav-item"><a class="nav-link" href="#">API</a></li>
    </ul> 
    <!-- navbar -->
    <div class="navbar navbar-expand bg-dark mb-5">
    <ul class="navbar-nav ">
        <li class="nav-item"><a class="nav-link" href="#">HTML</a></li>
        <li class="nav-item"><a class="nav-link" href="#">CSS</a></li>
        <li class="nav-item"><a class="nav-link" href="#">PHP</a></li>
        <li class="nav-item"><a class="nav-link" href="#">JS</a></li>
        <li class="nav-item"><a class="nav-link" href="#">API</a></li>
    </ul>
    </div>


    </nav>
    <!-- table -->
    <div class='container'>
        <div class="" style="width: 500px">
            
                <div class="alert alert-success alert-dismissible">
                    <button class="close" data-dismiss="alert">&times;</button>
                    <p ><strong>DETAILS INFOMATION</strong> aaaaaaaa <p class="badge badge-primary">new</p></p>
                </div>
                <div class="">
                <table class="table-dark table-striped">
                <tr>
                        <td>Firstname</td>
                        <td>Lastname</td>
                        <td>Email</td>
                </tr>
                <tr>
                    <td>John1</td>
                    <td>Doe</td>
                    <td>john@example.com</td>
                </tr>
                <tr>
                    <td>John2</td>
                    <td>Doe</td>
                    <td>john@example.com</td>
                </tr>
                <tr>
                    <td>John3</td>
                    <td>Doe</td>
                    <td>john@example.com</td>
                </tr>
                </table>
                </div>
                <div class="">END</div>
          
        </div>
    </div>
    <!-- progress bar -->
    <div class="container-fluid">
        <div class="progress pl-5">

            <div class="progress-bar progress-bar-animated bg-danger progress-bar-striped" style="width: 50%">danger</div>
            <div class="progress-bar progress-bar-striped bg-success" style="width:30%">success</div>
            <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:10%">success</div>
        </div>
    </div>
    <!-- pagination -->
    <div >
        <ul class="pagination justify-content-center mt-5">
            <li class="page-item"><a class="page-link" href="https://vlxx.sex/">Previous</a></li>
            <li class="page-item active"><a class="page-link" href="https://sextop1.lol/">1</a></li>
            <li class="page-item disabled"><a class="page-link" href="https://zing.vn/">2</a></li>
            <li class="page-item"><a class="page-link" href="https://hentaicb.top/">Next</a></li>
        </ul>
    </div>
    <!-- dropdown b split-->
    <div class="btn-group dropdown">
        <button class="btn btn-primary">Text</button>
        <button id="my-dropdown" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="sr-only">Toggle dropdown</span>
        </button>
        <div class="dropdown-menu" aria-labelledby="my-dropdown">
            <a class="dropdown-item active" href="#">Text</a>
        </div>
    </div>
    <br><br>
    <!-- dropdown b4 split -->
    <div class="btn-group">
      <button type="button" class="btn btn-secondary">Split dropdown</button>
      <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span class="sr-only">Toggle Dropdown</span>
      </button>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Action</a>
        <a class="dropdown-item disabled" href="#">Disabled action</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">Separated link</a>
      </div>
    </div>
    

    <!-- card -->
    <div class="card" style="width: 400px">

        <img class="card-img-top" src="./source/1.JPG" alt="picture of handsome boy">
        <div class="card-body">
            <h4 class="card-title">Tran Dinh Lam</h4>
            <p class="card-text"> Some example text some example text. John Doe is an architect and engineer</p>
            <a href="#" class="btn btn-primary">See Profile</a>
        </div>
    </div>
    <!--  btn group, dropdown -->
    <div class="btn-group-vertical">
        <button class="btn btn-primary">HTML</button>
        <button class="btn btn-primary">javascript</button>
        <div class="btn-group dropright">
        <button type="button" class="btn btn-primary" data-toggle="dropdown">Button dropdown</button> 
        <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"></button> 
            <div class="dropdown-menu">
                <div class="dropdown-header">this is header of dropdown</div>
                <a class="dropdown-item" href="#">Text1</a>
                <a class="dropdown-item" href="#">Text2</a>
                <a class="dropdown-item" href="#">Text3</a>
            </div>
        </div>
    </div>
    
    <div class="btn-group">
        <button type="button" class="btn btn-primary">Primary</button>
        <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Link 1</a>
                <a class="dropdown-item" href="#">Link 2</a>
            </div>
        </div>
        <!-- collapse -->
        <button class="btn btn-primary" data-target="#my-collapse" data-toggle="collapse" aria-expanded="false" aria-controls="my-collapse">click me!</button>
        <div class="collapse" id="my-collapse">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </div>                                                                      

        <!-- colapse advance -->
        <div class="container">
        <h2>Accordion Example</h2>

        <div id="accordion">
            <div class="card">
            <div class="card-header">
                <a class="card-link" data-toggle="collapse" href="#collapseOne">
                Collapsible Group Item #1
                </a>
            </div>
            <div id="collapseOne" class="collapse show" data-parent="#accordion">
                <div class="card-body">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </div>
            </div>
            </div>
            <div class="card">
            <div class="card-header">
                <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                Collapsible Group Item #2
            </a>
            </div>
            <div id="collapseTwo" class="collapse" data-parent="#accordion">
                <div class="card-body">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </div>
            </div>
            </div>
            <div class="card">
            <div class="card-header">
                <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
                Collapsible Group Item #3
                </a>
            </div>
            <div id="collapseThree" class="collapse" data-parent="#accordion">
                <div class="card-body">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </div>
            </div>
            </div>
        </div>
        </div>
    </body>
    <?php
        include_once "connect.php";
        $query = "SELECT * FROM news";
        $result = mysqli_query($conn,$query);
        while($row = mysqli_fetch_array($result,1)){
                echo '
                <div class="row">
                        <div class="col-md-4">
                            <img src="'.$row['thumbnail'].'" alt="" style="width: 100%"> 
                        </div>
                        <div class="col-md-8">
                            <h1>'.$row['title'].'</h1>
                            <p>'.$row['description'].'</p>
                            <p>'.$row['create_at'].'</p>
                        </div>
                 </div>
                <hr>
                ';
        }
    ?>

<footer>
    <div class="mt-5 mb-5">a</div>
</footer>
