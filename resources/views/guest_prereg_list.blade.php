<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Event Manager</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{ asset('css/style.sea.css') }}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <!-- Font Awesome 4 LOCAL-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.css') }}">
    <script type="text/javascript" src="{{ asset('js/fontawesome.js') }}"></script>
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    @include('inc.messages')
    <div class="page login-page">
      <div class="container d-flex align-items-center">
        <div class="form-holder has-shadow">
          <div class="row">
            <!-- Logo & Information Panel-->
            <div class="col-lg-1">
              <div class="info d-flex align-items-center">
                <div class="content">
                  <div class="logo">
                  <a href="/registrator" class="main-link">
                      <i class="fa fa-chevron-left" style="color: white;"></i>
                  </a>
                  </div>
                </div>
              </div>
            </div>
            <!-- Form Panel    -->
            <div class="col-lg-11 bg-white">
              <div class="form d-flex align-items-center">
                <div class="content">
                  <h1>Pre Registered Guest</h1>
                  <div class="table-responsive" style="padding-right: 2%;">
                    <table id="mytable" class="table" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th style="width: 30%">Name</th>
                          <th style="width: 30%">Designation</th>
                          <th style="width: 30%">Company</th>
                          <th style="width: 10%">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($guest as $guest)
                          <tr>
                          <td>{{ucwords($guest->firstname) . ' ' .ucwords($guest->middlename) . ' ' . ucwords($guest->lastname)}}</td>
                          <td>{{ucwords($guest->designation)}}</td>
                          <td>{{ucwords($guest->companyname)}}</td>
                          <td>
                            <form method="get" action="/registrator/prereg/update/{{$guest->id}}">
                              <button type="submit" class="btn btn-primary"><i class="fa fa-chevron-right" style="color: white;"></i></button>
                            </form>
                          </td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </div>
    <!-- Javascript files-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="{{ asset('js/tether.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.cookie.js') }}"> </script>
    <script src="{{ asset('js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('js/front.js') }}"></script>

  </body>
</html>