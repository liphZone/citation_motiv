<div class="p-3 mb-2 bg-dark text-white">
    <p>
      <h3 class="text-center"> THEMES DES CITATIONS POPULAIRES </h3>
    </p>
    <div class="container">
      <div class="row">
        @foreach ($categorie as $categories)
        <div class="col-md-3"> {{ $categories->libelle_categorie }} </div>
        <div class="col-md-3"> SS </div>
        <div class="col-md-3"> ererer </div>
        <div class="col-md-3"> d343 </div>
        @endforeach
      </div>
    </div>
    {{-- <p>
      <h6 class="text-center"> Derniers thèmes ajoutés </h6>
    </p> --}}
</div>

<div class="container mt-5 mb-5">
  <div class="row">
    <div class="col-md-8">
      Auteurs commençant par la lettre : <br>
      @foreach ($auteur as $auteurs)
        <a class="text-decoration-none" href="{{ route('letter',$auteurs) }}"> {{ $auteurs }}  </a> &nbsp;&nbsp;&nbsp;
      @endforeach
    <div class="row mt-2">
      <div class="col-md-6">
        <ul class="list-group">
          <li class="list-group-item disabled" aria-disabled="true">Citations des sages</li>
          <li class="list-group-item">Dapibus ac facilisis in</li>
          <li class="list-group-item">Morbi leo risus</li>
          <li class="list-group-item">Porta ac consectetur ac</li>
          <li class="list-group-item">Vestibulum at eros</li>
        </ul>
      </div>
      <div class="col-md-6">
        <ul class="list-group">
          <li class="list-group-item disabled" aria-disabled="true">Citations des grands philosophes</li>
          <li class="list-group-item">Dapibus ac facilisis in</li>
          <li class="list-group-item">Morbi leo risus</li>
          <li class="list-group-item">Porta ac consectetur ac</li>
          <li class="list-group-item">Vestibulum at eros</li>
        </ul>
      </div>
    </div>

   
   
    
    </div>
    <div class="card card-outline-secondary col-md-4">
      <div class="card-header">
        EN SAVOIR +
      </div>
      <div class="card-body">
        <p class="font-weight-bold text-center">Qu'est ce qu'une citation ? </p>
        <p>
          Action de citer, de rapporter les mots ou les phrases de quelqu'un ; paroles, passage empruntés à un auteur ou à quelqu'un qui fait autorité.
          Phrase chorégraphique, musicale, plan cinématographique, etc., inséré dans une création d'un artiste sans qu'il en soit l'auteur.
          Action d'assigner quelqu'un en justice.
          Récompense accordée à un militaire pour des actions d'éclat, des faits de guerre et, hors guerre, pour des actes de courage et de dévouement.
        </p>
        <p> 
          Une citation est la reproduction d'un court extrait d'un propos ou d'un écrit antérieur dans la rédaction d'un texte ou 
          dans une forme d'expression orale. Elle peut s'inscrire dans une référence.
          Le propre d'une citation étant d'être un extrait. Elle se distingue donc des maximes ou proverbes, des devises et autres formules,
           dictons, mots d'ordre, etc. qui se présentent d'emblée sous leur forme brève, et sont de plus généralement anonymes. 
          Mais, ce mot peut servir de terme générique pour toute forme d'expression brève, en particulier dans des recueils de citations.
        </p>

        <p>
          <b> La maxime : </b> en littérature, la maxime est un genre littéraire illustré par les œuvres de Bossuet, La Rochefoucauld
          ou Vauvenargues. La maxime se caractérise par sa visée moraliste, par laquelle l'auteur jette un regard critique sur 
          le monde, sans prétendre pouvoir le changer. Cette forme littéraire privilégie la concision et exploite une esthétique 
          du fragment et de la discontinuité. On parle d’apophtegme lorsqu'il s'agit d'une parole mémorable ayant valeur de maxime.
        </p>
        <p>
          <b> Le proverbe : </b> un proverbe est une formule langagière de portée générale contenant une morale, une expression de
          sagesse populaire ou une vérité d’expérience que l’on juge utile de rappeler. Il n’est pas attribué à un auteur, 
          (contrairement à la citation ou l’apophtegme) : les proverbes sont souvent très anciens, d'origine populaire et par
          conséquent de transmission orale. Ils servent d’argument d’autorité. Leur utilisation dans le cadre d’une argumentation 
          peut donc atteindre au sophisme.
        </p>

        <p>
          <b> La devise : </b> une devise est une phrase courte ou une expression symbolique décrivant les motivations ou 
          les intentions d'un individu, d'un groupe social, d'une organisation ou d'une institution, qui la choisit pour 
          suggérer un idéal, comme règle de conduite ou pour rappeler un passé glorieux.
        </p>

        <p>
          <b> Le dicton : </b> un dicton est une expression proverbiale figée, une formule métaphorique ou figurée qui 
          exprime une vérité d'expérience ou un conseil de sagesse pratique et populaire. Le dicton comporte généralement
          une note humoristique et est souvent régional.
        </p>
        <p>
          <b> L'aphorisme : </b> un énoncé autosuffisant. Il peut être lu, compris, interprété sans faire appel à un autre texte.
          Un aphorisme est une pensée qui autorise et provoque d'autres pensées, qui fraye un sentier vers de nouvelles 
          perceptions et conceptions. Même si sa formulation semble prendre une apparence définitive, il ne prétend pas 
          tout dire ni dire le tout d'une chose.
        </p>
      </div>
    </div>

  </div>

 
</div>
