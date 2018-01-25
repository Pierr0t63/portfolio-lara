@extends('layouts.app')

@section('content')
    <header>
        <div class="titre-header video-bg full-height text-center">
                    <h1 class="text-center">
                        KOZLUK Pierre<br>
                        Développeur Web<br>
                        Clermont-Ferrand (63)
                    </h1>
        </div>
    </header>
    <div class="container-fluid">
        <section class="row blanc" id="presGenerale">
            <div class="col-md-6 fond">
                <h2>
                    À propos de moi
                </h2>
                <p>
                    Etant issu d'une filiaire scientifique, j'ai pu développer une véritable passion pour les sciences et l'informatique.
                    Ainsi, après avoir obtenu mon Baccalauréat Scientifique option Informatique et Sciences du Numérique (ISN), j'ai donc
                    décidé de poursuivre mes études dans ce domaine en constante évolution. 
                </p>
            </div>
            <div class="col-md-6 text-center">
                <img src="img/avatar.png" class="rounded-circle" alt="Avatar de Pierre KOZLUK, Développeur Web sur Clermont-Ferrand (63)">
                <h2>{{ $annee }} ans</h2>
            </div>
        </section>

        <section class="row" id="compexp">
            <div class="col-md-6" id="experience">
                <h2 class="text-center">Expérience</h2>
                @foreach($trainings as $training)
                    <div class="projet">
                        <div class="titre-projet text-center">
                           <h3> {{ $training->name }} </h3> 
                           <p class="dur-projet">( {{ $training->duration }} )</p>
                        </div>
                        <div class="desc-projet">
                            <p>
                            {{ $training->description }}
                            <p>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="col-md-6" id="competences">
                <h2 class="text-center">Compétences</h2>

                <div class="comp clearfix " data-pourcent="80%">
                    <div class="comp-titre" style="background: #E44D26;"><span>HTML5</span></div>
                    <div class="barre-comp" style="background: #F16529;"></div>
                    <div class="comp-pourcent">80%</div>
                </div>

                <div class="comp clearfix " data-pourcent="75%">
                    <div class="comp-titre" style="background: #1B73BA;"><span>CSS3</span></div>
                    <div class="barre-comp" style="background: #29A9DF;"></div>
                    <div class="comp-pourcent">75%</div>
                </div>

                <div class="comp clearfix " data-pourcent="60%">
                    <div class="comp-titre" style="background: #E5A228;"><span>JavaScript</span></div>
                    <div class="barre-comp" style="background: #FEDA3E;"></div>
                    <div class="comp-pourcent">60%</div>
                </div>

                <div class="comp clearfix " data-pourcent="60%">
                    <div class="comp-titre" style="background: #0868AB;"><span>jQuery</span></div>
                    <div class="barre-comp" style="background: #4790C3;"></div>
                    <div class="comp-pourcent">60%</div>
                </div>

                <div class="comp clearfix " data-pourcent="70%">
                    <div class="comp-titre" style="background: #5F81BF;"><span>PHP</span></div>
                    <div class="barre-comp" style="background: #9EA1C0;"></div>
                    <div class="comp-pourcent">70%</div>
                </div>

                <div class="comp clearfix " data-pourcent="70%">
                    <div class="comp-titre" style="background: #577FA2;"><span>MySQL</span></div>
                    <div class="barre-comp" style="background: #FFA230;"></div>
                    <div class="comp-pourcent">70%</div>
                </div>

                <div class="comp clearfix " data-pourcent="80%">
                    <div class="comp-titre" style="background: #21759B;"><span>Wordpress</span></div>
                    <div class="barre-comp" style="background: #63A5C2;"></div>
                    <div class="comp-pourcent">80%</div>
                </div>

                <div class="comp clearfix " data-pourcent="70%">
                    <div class="comp-titre" style="background: #27ae60;"><span>SEO</span></div>
                    <div class="barre-comp" style="background: #2ecc71;"></div>
                    <div class="comp-pourcent">70%</div>
                </div>
            </div> <!-- col-md-6 -->
        </section>
    </div>
@endsection