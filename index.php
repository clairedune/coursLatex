<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Initiation à LaTeX par la pratique</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>
  
  <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php">Introduction à Latex</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="bases.php">Bases</a></li>
            <li><a href="section.php">Structure</a></li>
           <li><a href="image.php">Images</a></li>
        <li><a href="tableau.php">Tableaux</a></li>
        <li><a href="maths.php">Maths</a></li>
        <li><a href="biblio.php">Biblio</a></li> 
        <li><a href="commande.php">Macros</a></li>
        <li><a href="style.php">Style</a></li>
        <li><a href="beamer.php">Beamer</a></li>          
        <li><a href="exercices.php">Exercices</a></li> 
            
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>


<div class="jumbotron">
    <div class="container">

      <div class="starter-template">
        <h1>LaTeX par la pratique</h1>
        <p class="lead">Ce cours est destiné aux étudiants de l'école doctorale de l'université de Toulon. Il s'agit d'une première introduction à LaTeX pour les étudiants n'ayant aucune base dans la création de documents scientifiques en utilisant ce langage.</p>
      </div>
  </div>
   </div> 
    
 <div class="container">


<H2> Introduction </H2>
        <p>
           A l'origine le langage TeX a été crée pour faciliter 
           la réalisation de documents scientifiques, 
           en particulier l'écriture des formules mathématiques. 
           L'idée était de séparer entièrement la partie
           rédactionnelle de la mise en forme.   
        </p>
        <p>
           LaTeX est une surcouche de TeX. 
        </p>
        

        <figure>
          <img src= "image/ex1.png"/>
          <img src= "image/ex2.png"/>
          <img src= "image/ex3.png"/>
          <center>
             <figcaption>Quelques exemples de documents réalisés avec LaTeX </figcaption>
          </center>
        </figure>
        
        <p>LaTeX est un <b>langage</b> <b>compilé</b>: </p>
        <ul>
        <li>Comme c'est un <b>langage</b>, cela signifie qu'il faut 
        apprendre sa logique et sa syntaxe</li> 
        <li>Et comme il est <b>compilé</b>, vous devez avoir un 
        compilateur de LaTeX pour pouvoir visualiser votre mise en page.</li> 
        </ul>
        <p>On l'oppose aux logiciels de mise en page classique que l'on appelle 
        WYSIWYG (What you see is what you get). Pour faire des documents en LaTex, 
        il faut donc s'habituer à une petite gymnastique qui fait perdre un peu 
        de temps au début mais qui peut vous faire gagner un temps fous pour la 
        rédaction de vos articles et de vos thèses.</p>

        <H3>Un exemple de fichier LaTex</H3>

         <div style="clear:both;">
            <div class="code" style="float:left;width:40%;" >
              \documentclass[10pt,a4paper]{article}<br />
              \usepackage[utf8x]{inputenc}<br />
              \usepackage{makeidx}<br/>
<br/>
              \author{Claire Dune}<br/>
              \title{Un exemple de document \LaTeX}<br/>
              \begin{document}<br/>
              <br/>
              \maketitle<br/>
              <br/>
              \section{Introduction}<br/>
              <br/>
              Quelques lignes d'un document \LaTeX.<br/>
              <br/>
              \section{Ecrire du texte en \LaTeX}<br/>
              <br/>
              \begin{flushleft}<br/>
              On peut écrire du texte et l'aligner à droite. \\<br/>
              \end{flushleft}<br/>
              <br/>
              \begin{center}<br/>
              On peut aussi le centrer.<br/>
              \end{center}<br/>
              <br/>
              \section{Et les maths, alors ?}<br/>
              <br/>
              \subsection{Une formule toute simple}<br/>
              <br/>
              $x=3$<br/>
              <br/>
              \subsection{Une formule un peu moins simple}<br/>
              On peut aussi écrire des formules : $$ y = \frac{\ddot{y}}{3}  \sqrt[2]{\beta^2+\dot{y}} $$<br/>
              <br/>
              \end{document}<br/>  
           </div>
          <div style="float:left;width:50%;">
          <img src="image/intro.png" width="95%"> 
          </div>
           </div>
          <div style="clear:both;">
        <p> Nous verrons dans ce cours, qu'il est possible de réaliser automatiquement toute votre mise en page à partir d'une maquette fournie par le site d'un journal et contenant la définition des marges, des polices de caractères, des styles. Un autre avantage de LaTeX est la facilité d'indexation des parties de votre document qui vous permet de faire référence à un chapitre ou à une figure en ne citant que son étiquette et sans vous soucier de son emplacement réel dans le document. </p>   
        </div>
        
        <HR />

         
        <H2>Chaine de production</H2>   
           
           Pour réaliser un document LaTeX, il faut 
           <ol>
                <li>Rédiger le document en tapant du texte "au kilomètre" dans un fichier source d'extension .tex. Attention ! Il est interdit de mettre des espaces ou des accents dans le nom de vos fichiers. Le compilateur compile du texte brut et non pas enrichi comme peut en fournir Word (un texte enrichi est un texte auquel une mise en page a été ajoutée). Si jamais l'envie vous prend de copier-coller un texte depuis Word, faites d'abord un copier-coller dans le Bloc-notes ou un logiciel du même genre. Vous éviterez ainsi beaucoup de problèmes.</li>
                <li>Compiler le fichier source. Des fichiers .aux et .log seront crées au passage. Ils permettent de gérer les références. </li>
                <li>Visualiser le résultat.</li>
           </ol>
           
           Il faut donc utiliser trois logiciels : 
           <ol>
                <li>Un éditeur de texte, par exemple <a href="http://www.xm1math.net/texmaker/index_fr.html">TeXmaker</a> est un éditeur de TeX multiplateforme gratuit</li>
                <li>Un compilateur de (La)TeX, par exemple <a href="http://miktex.org">MiKTeX</a> est un compilateur multiplateforme gratuit)</li>
                <li>Un logiciel de visualisation (acrobat reader, MiKTeX en propose un également, ou encore ghostview)</li>
           </ol>
           
           <p>Pour les besoin de ce cours, nous avons fait installer MiKTeX et TeXmaker sur les postes. Nous nous appuyerons donc directement sur des copies d'écran de la version 2.1 de Texmaker. Ce logiciel permet de compiler simplement vos source en cliquant sur des menus.</p>
    
        
       

         



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>