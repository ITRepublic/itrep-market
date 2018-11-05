<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="_token" content="{!! csrf_token() !!}" /> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Landing Page :: IT Republic</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" crossorigin="anonymous"></script>    
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
        
        <style>
            * {
                font-family: "Montserrat";
            }

            body {
                background-image: url('public/image/background.png');
                background-position: center center;
                background-repeat: no-repeat;
            }

            h1 {
                text-align: center;
                color: #fff;
                padding-top: 80px;
                letter-spacing: 3px;
                font-weight: bold;
            }

            .logo {
                margin: 30px;
                text-align: center;
            }

            p {
                text-align: center;
                color: #fff;
                font-size: 12px;
                letter-spacing: 3px;
            }
        </style>
    </head>
    <body>
        
        <div class="container-fluid">

            <h1>WELCOME TO IT REPUBLIC</h1>

            <div class="logo">
                <img class="img-responsive" src="{{ asset('public/image/itrepublic_logo.png') }}" alt="">
            </div>

            <p>Reserve your spot now at www.itrepublic.id</p>

            <div class="row" align-items-center>
            <div class="col col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-body">
                        {{-- <h3>Daftar sekarang</h3> --}}
                        @if($errors->any())
                            <div class="alert alert-danger">{{$errors->first()}}</div>
                        @endif
                        <form action="{{ route('landingSave') }}" method="POST" enctype="multipart/form-data">
                            {{csrf_field()}}
                            
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="">Nama Depan *</label>
                                    <input type="text" name="nama_depan" class="form-control" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="">Nama Belakang *</label>
                                    <input type="text" name="nama_belakang" class="form-control" required>
                                </div>
                            </div>
            
                            <div class="form-group">
                                <label for="">Email *</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>
            
                            <button type="submit" class="btn btn-danger col-sm-12 col-md-3">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
            </div>

        </div>

        <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
        <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
    </body>
</html>
