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
            <li ><a href="bases.php">Bases</a></li>
            <li><a href="section.php">Structure</a></li>
            <li><a href="image.php">Images</a></li>
            <li><a href="tableau.php">Tableaux</a></li>
            <li class="active"><a href="maths.php">Maths</a></li>
            <li><a href="biblio.php">Biblio</a></li> 
            <li><a href="commande.php">Macros</a></li>
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
        <H1>Formules mathématiques</H1>   
        
        
        <H2>Exemples d'insertion de formules de mathématique</H2>
        
        <p>Créez le document suivant pour insérer des équations :</p>
        
      <div style="clear:both;">
        <div class="code" style="float:left;width:40%;" >
            Exemples de formules mathématique dans le texte $x=3y+5z^2$.\\<br/>
            <br/>
            Exemples de formules mathématique sur une ligne centrée $$x=3y+5z^2$$.\\<br/>
            <br/>
            Exemple d'une formule mathématique dans un environnement équation~: <br/>
                \begin{equation}<br/>
                    x=3y+5z^2<br/>
                \label{eq:ex1}<br/>
                \end{equation}<br/>
                <br/>
            Même chose mais cette fois sans numéroter l'équation~:  <br/>
            \begin{equation*}<br/>
                x=3y+5z^2<br/>
            \end{equation*}<br/>
        </div>
        <div style="float:left;width:40%;">
            <figure>
                <img src="image/7.png" width="500"/>
            </figure>
        </div>
       </div>
      <div style ="clear:both">  
        <p>
        
        Il existe une autre manière d'écrire des formules hors ligne : en utilisant \[ et \] au lieu de $$ et $$.
        
        </p>
       

        
      </div>
      
      <div style ="clear:both">
      <hr/>
      <H2>L'environnement équation </H2>
      
      <p>
        Pour que les équations soient numérotées et qu'on puisse y faire référence avec des labels, il faut utiliser l'environnement equation.
      </p> 
      
       <div class="code" style="float:left;width:40%;" >
           
            Exemple d'une formule mathématique dans un environnement équation~\ref{eq:ex1}: <br/>
                \begin{equation}<br/>
                    x=3y+5z^2<br/>
                \label{eq:ex1}<br/>
                \end{equation}<br/>
                <br/>
            Même chose mais cette fois sans numéroter l'équation~:  <br/>
            \begin{equation*}<br/>
                x=3y+5z^2<br/>
            \end{equation*}<br/>
        </div>
      
      </div>
      
      
      <div style ="clear:both">
      <hr/>
      <H2>Quelques exemples </H2>
      
      <div style ="clear:both">
     <H3>Ecrire des limites</H3>
      
       <div class="code" style="float:left;width:40%;" >
      Cet exemple montre deux manières d'écrire des limites~:<br/>

\begin{equation}<br/>
\lim\limits_{x \rightarrow +\infty} f(x)<br/>
\label{eq:ex2}<br/>
 \end{equation}<br/>
\begin{equation}<br/>
\lim\limits_{\substack{x \rightarrow -2 \\ x>-2}} f(x)<br/>
\end{equation}<br/>
      </div>
      </div>
      
      <div style ="clear:both">
      <H3> Ecrire un système d'équation </H3>
      
      <div class="code" style="float:left;width:40%;" >
      \begin{equation}<br/>
\left\{<br/>
	\begin{array}{ccc}<br/>
		x&=&3y\\<br/>
		y&=&2z\\<br/>
		x&=&32y+12z<br/>
\end{array}<br/>
\right .<br/>
\end{equation}<br/>
      </div>
      
      </div>
      
      <div style ="clear:both">
      <H3> Ecrire une démonstration mathématique sans numérotation </H3>
      
      <div class="code" style="float:left;width:40%;" >
      \begin{align}<br/>
  R(-1) &= \sum_{i=1}^m A(i)R(i-1) \\<br/>
  R(-2) &= \sum_{i=1}^m A(i)R(i-2) \\<br/>
        &\vdots                    \\<br/>
  R(-k) &= \sum_{i=1}^m A(i)R(i-k)<br/>
\end{align}<br/>
       </div>
      
      </div>
      </div>
      
      <div style ="clear:both">
      <hr/>
      <H2>Les mathématiques avec TexMaker</H2>
      
      <p><a href="http://www.xm1math.net/doculatex/intromath.html">Sur le site de TexMaker</a>, vous trouverez un tutoriel avec la liste des menus qui vous aident à écrire des formules mathématiques. </p>
      
      </div>
      
      <div style="clear:both;">
      <br/>
      <HR />
      <H2>Le package AMS</H2>
      
      <p class="texte">
      <a href="docs/amsldoc.pdf">Vous trouverez ici un guide en anglais</a> pour utiliser le package amsmath.
      </p>
      
      
      
      
      <HR />
      
      <H2>Formules chimiques</H2>
      
      <p class= "texte">
      Pour écrire des formules chimiques, on peut utiliser directement l'environnement mathématique ou utiliser les package présenté sur ce site : 
      <a href="http://fr.wikibooks.org/wiki/LaTeX/%C3%89crire_des_formules_chimiques">http://fr.wikibooks.org/wiki/LaTeX/%C3%89crire_des_formules_chimiques</a>.
      </p>
      
      </div>
      
            
      
      
      
       </div> 
          </BODY>
    
</HTML>