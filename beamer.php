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
        <li><a href="maths.php">Maths</a></li>
        <li><a href="biblio.php">Biblio</a></li> 
        <li><a href="commande.php">Macros</a></li>
        <li><a href="style.php">Style</a></li>
        <li class="active"><a href="beamer.php">Beamer</a></li>          
        <li><a href="exercices.php">Exercices</a></li> 
            
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>        
    
     </br>
    </br>
    <div class="container">   
           
        <H1>Créer sa présentation en Beamer</H1>
            <p class="texte"> LaTeX permet de créer des présentation de grande qualité très simplement. Sous Texmaker, vous pouvez utiliser l'assistant de création de document et créer un document de classe "beamer" : </p>
            <p class="code">\documentclass[10pt]{beamer}</p>
            
            
        <H2>Création d'une diapo</H2>
        
        
        
        <div style="clear:both;">
        <div class="code" style="float:left;">
       \documentclass[10pt]{beamer} <br/>
\usepackage[utf8x]{inputenc} <br/>
\usepackage{ucs} <br/>
\usepackage{amsmath} <br/>
\usepackage{amsfonts} <br/>
\usepackage{amssymb} <br/>
\usepackage{makeidx} <br/>
\author{Claire Dune} <br/>
\title{Un exemple de présentation sous Beamer} <br/>
 <br/>
\usetheme{Warsaw} <br/>
 <br/>
\begin{document} <br/>
 <br/>
	\begin{frame} <br/>
	Voici votre première page de présentation en LaTeX ! <br/>
	\end{frame} <br/>
 <br/>
\end{document}    
             <br/>
        </div>
        
        
        </div>
        <div style="float:left;width:40%;height:400px;">
            <figure>
                 <img src="image/29.png" height="300" border="2"/>
            </figure>
        </div>
    



                    <div style="clear:both;">

        <H2>Les frames</H2>
        
        
           <div style="clear:both;">
        <div class="code" style="float:left;">
       \begin{frame}<br/>
2\frametitle{Un exemple de titre}<br/>
3\framesubtitle{avec un exemple de sous-titre}<br/>
4Enfin, le texte ! :)<br/>
5\end{frame} <br/>
        </div>
        
          <div style="float:left;width:40%;height:400px;">
            <figure>
                 <img src="image/30.png" height="300" border="2"/>
            </figure>
        </div>

 </div>
        
        
           <div style="clear:both;">
        <div class="code" style="float:left;">
       
\begin{frame}[plain]<br/>

Page sans en-tête ni pied de page.<br/>

\end{frame} <br/>
        </div>
        
          <div style="float:left;width:40%;height:400px;">
            <figure>
                 <img src="image/31.png" height="300" border="2"/>
            </figure>
        </div>

 </div>
                             <div style="clear:both;">

               <H2>Insertion des sections et sous sections</H2>
               
        <div class="code" style="float:left;">
       <br/>
\begin{document}<br/>
<br/>
\section{Section 1}<br/>
\subsection{Sous section 1 de la Section 1}<br/>
<br/>
\begin{frame}<br/>
Ma première page !<br/>
\end{frame}<br/>
<br/>
\subsection{Sous section 2 de la Section 1}<br/>
\begin{frame}<br/>
Et maintenant ma deuxième page !<br/>
\end{frame}<br/>

\section{Section 2}<br/>
\subsection{Sous section 1 de la Section 2}<br/>
<br/>
\begin{frame}<br/>
Voici ma troisième page, elle appartient à ma deuxième section ! :) <br/>
\end{frame}<br/>
<br/>
\subsection{Sous section 2 de la Section 2}<br/>
\begin{frame}<br/>
Et celle là c'est la deuxième page, mais de ma deuxième section. <br/>
\end{frame}<br/>
<br/>
\end{document}<br/>
<br/>
        </div>
        
          <div style="float:left;width:40%;height:400px;">
            <figure>
                 <img src="image/32.png" height="500" border="2"/>
            </figure>
        </div>

 </div>
  
               <div style="clear:both;">
               <H2>Creation  d'une page de titre</H2>
                            
                <div style="clear:both;">
        <div class="code" style="float:left;">
         \documentclass{beamer}<br/>
<br/>
\usepackage[frenchb]{babel}<br/>
\usepackage[T1]{fontenc}<br/>
\usepackage[latin1]{inputenc}<br/>
<br/>
\usetheme{Warsaw}<br/>
<br/>
\title{Faire une présentation en LaTeX avec Beamer}<br/>
\author{Spader}<br/>
\institute{www.siteduzero.com}<br/>
\date{09 avril 2012}<br/>
<br/>
\begin{document}<br/>
<br/>
\begin{frame}<br/>
\titlepage<br/>
\end{frame}<br/>
<br/>
\end{document}<br/>
<br/>
        </div>
        
          <div style="float:left;width:40%;height:400px;">
            <figure>
                 <img src="image/33.png" height="300" border="2"/>
            </figure>
        </div>

 </div>

               
               
               </div>
     
      <div style="clear:both;">
      
      <H2>Les blocs</H2>
      
               <div style="clear:both;">
        <div class="code" style="float:left;">
       
\begin{frame}[plain]<br/>
\begin{block}{Un bloc normal} % Bloc normal<br/>
A utiliser normalement, selon vos envies.<br/>
\end{block}<br/>
<br/>
\begin{alertblock}{Bloc alerte} % Bloc alerte rouge<br/>
A utiliser pour alerter.<br/>
\end{alertblock}<br/>
<br/>
\begin{exampleblock}{Un bloc exemple} % Bloc exemple vert<br/>
A utiliser pour donner un exemple.<br/>
\end{exampleblock}\end{frame} <br/>
        </div>
        
          <div style="float:left;width:40%;height:300px;">
            <figure>
                 <img src="image/34.png" height="250" border="2"/>
            </figure>
        </div>

 </div>
   </div>
        <div style="clear:both;">
        
        
          <div style="clear:both;">
        <div class="code" style="float:left;">
       <br/>
 \begin{frame}<br/>
\begin{columns}[b]<br/>
<br/>
\begin{column}{2cm}<br/>
\begin{block}{Bloc 1}<br/>
Texte du bloc 1.<br/>
\end{block}<br/>
\end{column}<br/>
<br/>
\begin{column}{2cm}<br/>
\begin{block}{Bloc 2}<br/>
Texte du bloc 2, un peu plus long celui-ci pour voir les alignements.<br/>
\end{block}<br/>
\end{column}<br/>
<br/>
\begin{column}{2cm}<br/>
\begin{block}{Bloc 3}<br/>
Texte du bloc 3.<br/>
\end{block}<br/>
\end{column}<br/>
<br/>
\end{columns}<br/>
\end{frame}<br/>
<br/>
        </div>
        
          <div style="float:left;width:40%;height:400px;">
            <figure>
                 <img src="image/35.png" height="300" border="2"/>
            </figure>
        </div>

 </div>
         
        </div>
     
      <div style="clear:both;">
                     <H2>Table des matières</H2>

     <p class="code">
     \begin{frame}<br/>
  \tableofcontents[option, option, ...]<br/>
\end{frame}<br/>
</p>

<p class="texte">Pour insérer un sommaire automatiquement à chaque début de section : </p>

<p class="code">
\AtBeginSection[]<br/>
{<br/>
  \begin{frame}<br/>
  \frametitle{Sommaire}<br/>
  \tableofcontents[currentsection, hideothersubsections, pausesubsections]<br/>
  \end{frame} <br/>
}<br/>
</p>


</div>

<div style="clear:both">
                     <H2>Afficher au fur et a mesure avec des clic souris</H2>

<p class="code">
\begin{frame}<br/>
Ce texte sera directement affiché lors de l'apparition de la page.\\<br/>
\pause<br/>
Ce texte s'affichera après un clic de la souris ou alors après avoir appuyé sur la flèche de droite de votre clavier.\\<br/>
\pause<br/>
Et encore un autre clic et on aura ce texte là. Magnifique non ?<br/>
\end{frame}<br/>
</div>

       
       <H2>Les specifications</H2>
<p class="code">
\begin{frame}<br/>
\only<1>{Salut c'est only, je suis présent qu'au premier slide.\\}<br/>
\visible<2->{Salut c'est visible, je suis visible à partir du slide 2.\\}<br/>
\uncover<3->{Salut c'est uncover, je suis découvert à partir du slide 3.\\}<br/>
\invisible<2-4>{Salut c'est invisible, je serais invisible du slide 2 au slide 4.\\}<br/>
\alt<2>{Salut, je suis le alt qui sera au slide 2.\\}{Salut je suis le alt qui sera aux autres slides que la 2.\\}<br/>
\temporal<2-3>{Salut je suis le temporal visible du slide 1}{Et moi le temporal visible du slide 2 au slide 3}{Et moi le temporal visible après le slide 3}<br/>
\end{frame}<br/>
</p>       
                    <div style="clear:both;">

            
       <H2>Référence</H2>     
            <ul>
            <li>
            <a href="http://fr.openclassrooms.com/informatique/cours/creez-vos-diaporamas-en-latex-avec-beamer"> lien vers openclassRooms </a>
            </li>
            <li><a href="http://www.tug.org/teTeX/tetex-texmfdist/doc/latex/beamer/beameruserguide.pdf">lien vers le guide</li>
            </ul>
      </div>
                    </div><!--fin container-->
 
          </BODY>
    
