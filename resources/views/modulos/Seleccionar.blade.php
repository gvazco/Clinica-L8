@extends('plantilla')

@section('contenido')


<section class="content">

    <center>
        <h1>Seleccione cómo desea ingresar al sistema</h1>
    </center>

    <div class="row">
        <div class="col-lg-3 col-sm-6 col-xs-12">
            <div class="small-box" style="background-color: #F781D8; color:white;">

                <div class="inner">

                    <h3>Secretaría</h3>

                    <p>Inicie Sesión</p>

                </div>

                <dv class="icon">
                    <i class="fa fa-female"></i>
                </dv>

                <a href="Ingresar" class="small-box-footer">
                    Ingresar<i class="fa fa-arrow-circle-right"></i>
                </a>

            </div>
        </div>

        <div class="col-lg-3 col-sm-6 col-xs-12">
            <div class="small-box" style="background-color: #BDBDBD; color:white;">

                <div class="inner">

                    <h3>Doctor</h3>

                    <p>Inicie Sesión</p>

                </div>

                <dv class="icon">
                    <i class="fa fa-user-md"></i>
                </dv>

                <a href="Ingresar" class="small-box-footer">
                    Ingresar<i class="fa fa-arrow-circle-right"></i>
                </a>

            </div>
        </div>

        <div class="col-lg-3 col-sm-6 col-xs-12">
            <div class="small-box bg-yellow">

                <div class="inner">

                    <h3>Paciente</h3>

                    <p>Inicie Sesión</p>

                </div>

                <dv class="icon">
                    <i class="fa fa-users"></i>
                </dv>

                <a href="Ingresar" class="small-box-footer">
                    Ingresar<i class="fa fa-arrow-circle-right"></i>
                </a>

            </div>
        </div>

        <div class="col-lg-3 col-sm-6 col-xs-12">
            <div class="small-box bg-blue">

                <div class="inner">

                    <h3>Administrador</h3>

                    <p>Inicie Sesión</p>

                </div>

                <dv class="icon">
                    <i class="fa fa-male"></i>
                </dv>

                <a href="Ingresar" class="small-box-footer">
                    Ingresar<i class="fa fa-arrow-circle-right"></i>
                </a>

            </div>
        </div>
    </div>

</section>

@endsection