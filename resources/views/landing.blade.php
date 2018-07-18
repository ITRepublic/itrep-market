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
        </style>
    </head>
    <body>
        
        <div class="container-fluid">
            <div class="row">
                <img class="img-fluid" src="{{ asset('public/image/slider1.png') }}" alt="">
            </div>

            <h3>Daftar sekarang</h3>
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

                <button type="submit" class="btn btn-danger">Subscribe</button>
            </form>


            <div class="row" style="text-align: center;">
                <div class="col-md-12">
                    <img src="{{ asset('public/image/land1.jpg') }}" width="250px" height="180px" alt="">
                    <h2 style="text-align:center; padding-top: 15px;">FIND</h2>
                    <p>Post a job to tell us about your project. 
                    We'll quickly match you with the right freelancers.</p>
                </div>
                <div class="col-md-12">
                    <img src="{{ asset('public/image/land2.png') }}" width="250px" height="180px" alt="">
                    <h2 style="text-align:center; padding-top: 15px;">HIRE</h2>
                    <p>Browse profiles, reviews, and proposals then interview top candidates. 
                    Hire a favorite and begin your project</p>
                </div>
                <div class="col-md-12">
                    <img src="{{ asset('public/image/land3.jpg') }}" width="250px" height="180px" alt="">
                    <h2 style="text-align:center; padding-top: 15px;">WORK</h2>
                    <p>Use the IT Republic platform to chat, share files, and 
                    collaborate from your desktop or on the go.</p>
                </div>
                <div class="col-md-12">
                    <img src="{{ asset('public/image/land4.jpeg') }}" width="250px" height="180px" alt="">
                    <h2 style="text-align:center; padding-top: 15px;">PAY</h2>
                    <p>Invoicing and payments happen through IT Republic. 
                    With IT Republic Protection, only pay for work you authorize.</p>
                </div>
            </div>
        </div>

        <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
        <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
    </body>
</html>
