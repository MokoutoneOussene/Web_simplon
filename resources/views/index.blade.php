@extends('include/header')

@section('content')

<body>
<h3 class="mt-5">Nos Implantations</h3>
<p class="text-center titre-second">Présent sur le continent Africain dépuis un demi-decenie,
     Simplon dispose d'une multitudes Fabrique répartis sur tout le continent</p>
<div class="card-deck mt-5 div-general-des-cards">
  <div class="card w-100">
    <img src="{{asset('picture/sb.jpg')}}" class="card-img-top pic-top" alt="Le logo de simplon Burkina">
    <div class="card-body">
      <h5 class="card-title text-center ">Simplon Burkina</h5>
      <p class="card-text">Simplon Burkina lance Simplon.AUF @OUAGA, une formation intensive en développement Web en partenariat avec l’Agence Universitaire de la Francophonie. C’est une formation gratuite d’une durée de 9 mois à plein temps qui débutera le 20 janvier au CNEUF de l’université Joseph Ki-Zerbo de Ouagadougou. Le but de cette formation est de permettre aux jeunes d’acquérir les compétences de Développeur⋅se web et web mobile, de bénéficier 
          d’un accompagnement professionnel particulier et de s’orienter vers un métier d’avenir.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted"><a href="https://web.facebook.com/Simplon.BF/?_rdc=1&_rdr">Simplon Burkina</a></small>
    </div>
  </div>
  <div class="card h-20">
    <img src="{{asset('picture/ci.png')}}" class="card-img-top pic-top" alt="Le logo de simplon ivoire">
    <div class="card-body">
      <h5 class="card-title text-center">Simplon Cote-d'ivoire</h5>
      <p class="card-text">Après seulement deux jours de formation nos apprenantes qui ne savaient même pas ce qu'est le code informatique sont déjà capables de se présenter sur une page web en utilisant les langages HTML & CSS. La magie de #SimplonCIV opère déjà,
           bientôt elles deviendront des pros de la programmation...</p>
    </div>
    <div class="card-footer">
      <small class="text-muted"><a href="https://da-dk.facebook.com/SimplonCI/
      videos/simplon-c%C3%B4te-divoire-hackeuses/2404434679815691/">Simplon Cote-d'Ivoire</a></small>
    </div>
  </div>
  <div class="card h-20">
    <img src="{{asset('picture/dakarE.jpg')}}" class="card-img-top pic-top" alt="Le logo de simplon Dakar">
    <div class="card-body">
      <h5 class="card-title text-center">Simplon Sénégal</h5>
      <p class="card-text">Simplon s’implante au Sénégal en 2017, en partenariat avec Orange, par la création d’une école de code franchisée : la « Sonatel Academy ». Avec le soutien de la Fondation Société Générale et de l’Agence Universitaire de la Francophonie, une seconde fabrique ouvre ses porte dès 2018. En 2 ans, ce sont plus de 400 apprenants.es qui ont été formés aux métiers du numérique, avec un taux de sortie positive de plus de 75% à la suite des formations.
        Pour diffuser son impact sur l’ensemble du territoire, auprès des publics éloignés de l’emploi et impactés par la révolution numérique, Simplon multiplie ses activités et partenariats au Sénégal. A titre d’exemple, les programmes Women in Tech et Simplonkids ont permis d'acculturer au numérique 50 femmes et 400 enfants en 2019. Nos objectifs : anticiper les nouveaux métiers, faciliter et maintenir l’employabilité, outiller la conduite du changement des entreprises. </p>
    </div>
    <div class="card-footer">
      <small class="text-muted"><a href="https://en.simplon.co/simplon-senegal.html">Simplon Sénégal</a></small>
    </div>
  </div>
</div>  

<h3 class="h3_bircof mt-5"> Nos Partenaires</h3>
<p class="text-center titre-second">Simplon travail en partenariat avec plusieurs organismes publics ou privés dont les suivants</p>
<div class="card-deck mt-5">
  <div class="card h-20">
    <img src="{{asset('picture/auf.png')}}" class="card-img-top pic-top" alt="Le logo de AUF">
    <div class="card-body">
      <h5 class="card-title text-center">Auf Burkina</h5>
      <p class="card-text">Dans le cadre de son plan d'actions « spécial COVID-19 »,
           l’Agence universitaire de la Francophonie (AUF) a lancé, du 10 avril au 5 mai 2020, un appel à projets international pour soutenir, au sein de ses établissements membres, des initiatives d’étudiant·e·s, d'élèves-ingénieur·e·s et de jeunes chercheur·e·s liées à la pandémie. Au total,
           l’AUF financera 92 projets dont 9 sont issus d’universités d’Afrique de l’Ouest.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted"><a href="https://www.auf.org/nouvelles/actualites/appel-projets-auf-special
      -covid-19-neuf-projets-selectionnes-en-afrique-de-louest/">AUF Burkina</a></small>
    </div>
  </div>
  <div class="card">
    <img src="{{asset('picture/sg.jpg')}}" class="card-img-top pic-top" alt="Le logo de la Societe Générale du Burkina">
    <div class="card-body">
      <h5 class="card-title text-center">Société Générale</h5>
      <p class="card-text">Cher(e)s client(e)s, dans le soucis de répondre efficacement à vos besoins en opérations bancaires en ces périodes de forte affluence, nous vous informons de l’ouverture exceptionnelle de notre agence principale située au siège de SGBF à côté de la mairie centrale et de celle située au grand marché de Bobo-Dioulasso, ce dimanche 22 décembre 2019 de 8H à 11H30.

Nos distributeurs automatiques de billets restent également disponibles pour vos opérations. Par ailleurs, conscients des difficultés qui peuvent survenir lors de vos opérations, nous avons mis une équipe en permanence pour vous permettre de reprendre vos opérations échouées quelques temps après.

Tout en vous présentant nos excuses pour les désagréments, nous vous remercions pour votre compréhension et votre fidélité..</p>
    </div>
    <div class="card-footer">
      <small class="text-muted"> <a href=" https://societegenerale.bf/fr/news/">Société Générale</a></small>
    </div>
  </div>
  <div class="card">
    <img src="{{asset('picture/mpn.jpg')}}" class="card-img-top pic-top" alt="Le logo du ministere des poste Numerique">
    <div class="card-body">
      <h5 class="card-title text-center">Ministère des Postes Numériques</h5>
      <p class="card-text">Le Ministre du Développement de l’Economie numérique et des Postes assure la mise en œuvre et le suivi de la politique du gouvernement en matière de développement de l’économie numérique et des postes. A ce titre et en relation avec les départements ministériels compétents, il est chargé entre autres du développement des infrastructures des communications électroniques, de l’accompagnement, de la promotion des usages des TIC, du développement des services en ligne et des contenus locaux, du développement 
          d’une industrie locale basée sur les TIC, ainsi que du développement du secteur postal.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted"><a href="https://www.mdenp.gov.bf/ministere/ministre?tx_news_pi1%5Baction%5D=detail&tx_news_pi1%5Bcontroller%5D
      =News&tx_news_pi1%5Bnews%5D=45&cHash=5287330e624a88374cb1949b6b72d441">Ministère des poste numeriques</a></small>
    </div>
  </div>
</div>  
</body>
@endsection

