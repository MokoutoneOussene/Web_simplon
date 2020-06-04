
@extends('include/head')

<header class="d-flex p-2">
    <div class="flex-grow-1 mr-5 mm">
        <img src="{{asset('picture/logo.png')}}" width="160px" alt="logo">
    </div>

    <nav class="navbar navbar-expand-md navbar-dark ">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">

                <li class="nav-item btn btn-dark mr-2 la-cage-des-liens"> <a class="text-light" href="{{url('/')}}">Accueil</a> </li>
                <li class="nav-item btn btn-dark mr-2 la-cage-des-liens"> <a class="text-light" href="{{url('Nos actualites')}}">Actualité</a> </li>
                <li class="nav-item btn btn-dark mr-2 la-cage-des-liens"> <a class="text-light" href="{{url('Nos evenements')}}"> Evènenement</a> </li>
                <li class="nav-item btn btn-dark mr-2 la-cage-des-liens"> <a class="text-light" href="{{url('Nos Apprenants')}}"> Nos Apprenants</a> </li>
                <li class="nav-item btn btn-dark mr-2 la-cage-des-liens"> <a class="text-light" href="{{url('Nos alumnis')}}"> Nos Alumnis</a> </li>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
            </ul>
        </nav>
    </div>
</header> 


        <div class="d-flex info">
            <div class="flash text-light ml-5">
                <p>Flash Info:</p>
            </div>
            <marquee class="d-flex text-light info-defil">
                @foreach($liste_actualites as $actu)
                    <span class="mr-2 mt-titre">{{$actu->titre}} : </span>
                    <span class="mr-5">{{$actu->description}} ‖ </span>
                @endforeach
            </marquee>
        </div>

        <div class="card la-carte">
            <img src="{{asset('picture/cards.png')}}"  class="zr_image-carde" alt="la bannière de simplon">
        </div>

          <div class="container mw-100 mb-5" id="mt-contenaire">    
              @yield('content')
          </div>
    
<footer class="text-light">
    <section class="niv2-foot">
      <div class="droite">
          <div class="qui-sommes-nous">
                <h3>A propos</h3>
                <p>Simplon est une Fabrique qui fait la promotion du numérique.Pour plus d'infos consulter www.Simplon.co</p>
          </div>
      <div class="droite">
          <div class="qui-sommes-nous">
                <h3>Nos implantations</h3>
                <p>Simplon Burkina </p>
                <p>Simplon Dakar</p>
                <p>Simplon Cote d'Ivoire</p>
                <p>Simplon Tunis</p>
          </div>
          <div class="nous-contacter">
                <h3>NOUS CONTACTER</h3>
                <ul>
                    <li>Adress: 160 ouagadougou Bp/li>
                    <li>Email: simplonburkina@gmail.com</li>
                    <li>Tel: +00226 67126984</li>
                    <li>Tel: 67186063</li>
                    <li>Tel: 70603065</li>
                </ul>
          </div>
      </div>
    </section>
    <section class="niv2-foot">  
       <div class="icona">
           <p class="noussuivre">Nous suivre sur :</p>
           <a href="https://web.facebook.com/armelle.nanema.7"><i class="fa fa-facebook"></i></a>
            <a href="https://www.linkedin.com/in/armelle-nanema-81a872160/"><i class="fa fa-linkedin fa-1em"></i></a>
            <a href="https://www.youtube.com/?hl=FR"><i class="fa fa-youtube fa-1em"></i></a>
            <a href="https://www.instagram.com/?hl=fr"><i class="fa fa-instagram fa-1em"></i></a>
            <a href="https://app.slack.com/client/TTRN6UA4F/CTDMVJRDF"><i class="fa fa-slack fa-1em"></i></a>
        </div> 
    </section>
    <section class="niv3-foot">  
      <div  class="copyright">
       <img class="imagear" src="{{asset('picture/logo.png')}}" width="160px" alt="logo">
      <H2 class="footerarmelle" style="font-weight:300;"> Copyright © simplon Burkina 2020</H2>
      </div>
    </section>
 </footer>