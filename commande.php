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
            <li class="active"><a href="commande.php">Macros</a></li>
            <li><a href="style.php">Style</a></li>
            <li><a href="beamer.php">Beamer</a></li>          
            <li><a href="exercices.php">Exercices</a></li> 
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>  
    
     </br>
    </br>
          <div class="container">   
           
       
           
            <H1>Créer ses macros</H1>
            
            <H2>Introduction</H2>
            <p class="texte"> On peut faciliter l'écriture des document en créant des macros. Par exemple, plutot qu'ecrire le nom complet d'un institut ou d'une méthode, on peut écrire un sigle et au moment de la compilation, LaTeX remplacera cette commande par le texte équivalent. Par exemple : </p>
            
            <p class= "code" >\newcommand\cad{c'est-à-dire}</p>
            
            <p class="texte">Cette ligne crée une nouvelle commande, \cad, qui sera automatiquement remplacée lors de la compilation par le texte « c'est-à-dire ». Remarquez que LaTeX proteste si la commande que vous définissez existe déjà.</p>
            
           <H2>Gestion des espaces après la commande</H2>

            <p class="texte">Après toute commande dont le nom est composé de lettres (comme \LaTeX, par exemple et à l'inverse de \$), les espaces sont ignorées. Par conséquent, si vous voulez que votre macro soit suivie d'une espace dans le résultat final, utilisez l'une des méthodes suivantes :</p>
            <p class="code">
Le Maître du Monde, \cad{} moi, …<br/>
Le Maître du Monde, \cad\ moi, ...<br/>
Le Maître du Monde, {\cad} moi, ...<br/>
</p>
<p class="texte">
Ce serait une très mauvaise idée de mettre une espace dans la définition de la macro, car vous auriez toujours une espace, y compris avant une ponctuation.</p>
<p class="texte">
Vous pouvez utiliser le package xspace pour remédier à cette nécessité. Dans le préambule, ajoutez : <b>\usepackage{xspace}</b> Ensuite, écrivez vos macros de la façon suivante :</p>

<p class="code">
\newcommand\cad{c'est-à-dire\xspace}
</p>

<p class="texte">
La commande \xspace teste ce qui suit la commande : si c'est une ponctuation ou { ou }, elle ne fera rien; dans les autres cas, elle ajoute une espace. Une conséquence de ce fonctionnement est qu'une \footnote suivant \cad va produire une espace inopportune. Elle peut être évitée en tapant </p>
<p class=code>
(...) \cad{}\footnote{Ma note de pied de page} (...)
</p>
            <H2>Liens</H2>
        Allez voir ces sites pour plus de détails
            <ul>
            <li><a href="http://en.wikibooks.org/wiki/LaTeX/Macros"> Wikibook latex sur les macros</a></li>
            <li><a href="http://www.tuteurs.ens.fr/logiciels/latex/macros.html"> Un autre site qui explique très bien les macros</a></li>
            </ul>
      
       
      
</div><!--fin container-->
          </BODY>
    
