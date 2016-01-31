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
            <li class="active"><a href="section.php">Structure</a></li>
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
            </br>
    </br>
           
           <div class="container">  
           
           
        <H1>Stucturer votre document</H1>   
        
        <H2>Sections, sous sections, paragraphe</H2>
        <p class="texte"> LaTeX permet de sectionner votre document de manière automatique en utilisant les balises suivantes : </p>
        
        <div class="code">
        \part{}<br/>
        \chapter{}<br/>
        \section{}<br/>
        \subsection{}<br/>
        \subsubsection{}<br/>
        \paragraph{}<br/>
        \subparagraph{}<br/>
        </div>
        
        
        <div class="texte" style="clear:both;">
            <p>En quelques clics, l'assistant LaTeX pour vous aider à insérer ces balises de structure : </p>
            <figure>
                <img src="image/4.png" width="600"> </tr>
            </figure> 
            <p class="texte">Selon la classe de document utilisée, 
            l'accés à certaines de ces catégories est interdite. 
            Par exemple, dans les documents de classe article, 
            il n'est pas possible d'insérer une partie ou un chapitre. </p>
        </div> 
         
         
         <p class="texte"><i>Remarque</i> : Les sections sont numérotées automatiquement. Pour ne pas numéroter une section, il suffit d'ajouter * à la suite de la commande : </p>
         <div class="code">
        \part*{}<br/>
        \chapter*{}<br/>
        \section*{}<br/>
        \subsection*{}<br/>
        \subsubsection*{}<br/>
         </div>
        
        
                
        <div class="exercice">
            <H3>Exercice</H3>
            <p>       Utilisez TexMaker pour obtenir le <a href="example/section.pdf">document suivant</a>. </p>
         <br>
        </div>
        
        <p class="texte">Pour insérer des annexes, la commande est </p>
        <p class="code">
        \appendix
        </p>
        
        
        <p class="texte">Les section qui suivent cette commande dans le document auront une autre numérotation que les sections de bases.</p>
        
        <Hr />
        <div class="texte">
        <p ><b>Dans la classe book</b>, Il existe deux autres commandes similaires à \appendix qui permettent de subdiviser la notation des sections : </p>
        
        <ul>
        <li>\frontmatter, qui se positionne juste après \begin{document}, permet de numéroter le préambule en chiffres romains.</li>
        <li>Ensuite, \mainmatter se place entre le préambule et le premier chapitre. Cette commande permet de lancer la numérotation arabe habituelle des pages (1, 2, 3, etc.).</li>
        <li>\backmatter se place avant le chapitre épilogue, les index et bibliographies (que nous apprendrons à créer par la suite). Il a pour effet de stopper la numérotation des chapitres, mais pas la numérotation des pages.</li>
        </ul>
        </div>
        <div style="clear:both;">
        <figure>
        <center><img src="image/10.png" width="400"><br \></center>
        <figurecaption>Commandes \frontmatter, \mainmatter, et \backmatter pour découper les numérotations des sections.</figurecaption>
        </figure>
        </div>
        <p class="texte">Voici un exemple d'utilisation de ces commandes pour changer la numérotation selon la zone du document</p>
        
        <div class="code" >
          \documentclass[10pt,a4paper]{book}<br/>
\usepackage[utf8x]{inputenc}<br/>
\usepackage[french]{babel}<br/>
\usepackage{color}<br/>
<br/>
\begin{document}<br/>
\frontmatter<br/>
\tableofcontents<br/>
\setcounter{chapter}{1}<br/>
\chapter{Chapitre Introduction 1}<br/>
\section{section 1}<br/>
\section{section 2}<br/>
\section{section 3}<br/>
\chapter{Chapitre Introduction 2}<br/>
\section{section 1}<br/>
\section{section 2}<br/>
\section{section 3}<br/>
<br/>
\mainmatter<br/>
\chapter{Chapitre  1}<br/>
\section{section 1}<br/>
\section{section 2}<br/>
\section{section 3}<br/>
\chapter{Chapitre  2}<br/>
\section{section 1}<br/>
\section{section 2}<br/>
\section{section 3}<br/>
\chapter{Chapitre 3}<br/>
\section{section 1}<br/>
\section{section 2}<br/>
\section{section 3}<br/>
<br/>
\appendix<br/>
\chapter{Annexe  1}<br/>
\chapter{Annexe  2}<br/>
<br/>
\backmatter<br/>
\chapter{Chapitre  Epilogue}<br/>
\chapter{Index}<br/>
<br/>
<br/>
<br/>
\end{document}<br/>
<br/>
        </div>
        
<p class="texte">Le résultat est alors le <a href="example/itsmatter.pdf">document suivant</a></p>        
        
        <div style="clear:both;">
         <HR />
         
         <H2>Les Marges</H2>
         
         <p>Dans un document LaTeX, il y a des marges par défaut dans lesquelles vous pouvez écrire. Ces marges se situent à droite du texte dans les documents formatés en recto seulement et des deux côtés lorsque le document est formaté en recto-verso. </p>
         <p>Si le côté de la marge défini par défaut ne nous convient pas, on peut l'inverser en utilisant la commande </p>
         <p class="code">\reversemarginpar </p> 
         
         
         <div style = "clear:both;">
         
         La commande qui permet d'imprimer une note de marge est 
         
         </div>
         
         <p class="code">\marginpar[Gauche]{Droite} </p>
         
          <div style = "clear:both;">
         
         <p>ou <i>Droite</i> est le texte de la note de marge et <i>Gauche </i> est un paramatre optionel destiné au cas où l'on ne voudrait pas mettre de texte selon le côté ou se trouve la marge. Dans ce dernier cas, si la marge est à gauche alors c'est le texte contenu dans les crochets  <i>Gauche </i> qui sera affiché et si la marge est à droite, alors c'est le texte <i>Droite</i> qui sera affiché.</p>
         
         <p>
         Voici un exemple de code qui permet d'afficher une note de marge
         </p>
       
         </div>
         
         <div class="code">
         Une note \marginpar{\scriptsize ceci est une note}
         de marge.
         
         </div>


<div class="exercice">
         <H3>Exercice</H3>
           Utiliser l'exemple de code ci dessus pour créer une note de marge.
         
         </div>

         <p>
         Attention la numérotation des notes de marge n'est pas automatique.
         </p>
         
         </div>
         
         
                    <div style="clear:both;">

         <HR/>
         <H2>Notes de pied de page</H2>
         
         <p>
         On peut très facilement générer des notes de pied de page en utilisant la commande \footnote{ma note}. La numérotation des notes de pied de page est automatique. Ne pas insérer d'espace entre le mot et la note de pied de page. On utilise plutôt un espace fine (réalisé par la commande \,). 
         </p>
         
         <div class="code">
         Mot \footnote{Ceci est la note.} \\
         <br\>
         Word\,\footnote{Ceci est la seconde note.}
         
         </div>
         </div>
           <div style="clear:both;">
         <HR/>
        <H2>Titre</H2>
          </div>
        <p class="texte">Il est possible d'intégrer un titre automatiquement au document en utilisant la commande suivante juste après la commande \begin{document}</p>
        <p class="code">\maketitle</p>
        
        <div class="exercice">
            <H3>Exercice</H3>
            <p>       Ajouter un titre au document précédent pour obtenir le <a href="example/title.pdf">document suivant</a>. </p>
         <br>
        </div>
        
        
        
        
        
        <HR />
        <H2>Table des matières</H2>
        
        <p class="texte">Pour ajouter une table des matière, il suffit d'ajouter à la suite la commande</p>
        <p class="code"> \tableofcontents  </p>  
        <p class="texte">Les sections numérotées n'apparaitront pas.</p>  

        <div class="exercice">
            <H3>Exercice</H3>
            <p>       Ajouter une table des matière au document précédent pour obtenir le <a href="example/tableofcontents.pdf">document suivant</a>. </p>
         <br>
         </div>
         
         <HR />
                 
        <HR />
         
         <H2>Labels et references</H2>
            
            <p class="texte">LaTeX permet de faire facilement référence à une partie du document en utilisant les commandes \label {etiquette} puis \ref{etiquette}</p>
                
            <div class="code">
            
                \section{Introduction}<br\>
                \label{sec:introduction}
            
            </div>
            
            <div class="texte" style="clear:both;">Puis, plus loin dans le code</div>
             
             <div class="code">
            
               Je veux faire référence à la section \ref{sec:introduction}.
            
            </div>


<div class="texte" style="clear:both;">On peut aussi vouloir donner le numéro de la page ou se trouve la référence : </div>

<div class="code">
            
               Je veux faire référence à la page \pageref{sec:introduction}.
            
            </div>

<div class="texte" style="clear:both;">Attention pour que les références soient correctes, il faut compiler deux fois de suite le document LaTeX sans changer la mise en page. </div>

<div class="exercice">
            <H3>Exercice</H3>
            <p >      Modififer votre document pour ajouter des références aux sections et sous sections. Enregistrez, compilez et visualisez.</p>
            <p>      Changer ensuite l'ordre des sections en les copiant collant. Enregistrez, compilez et visualisez. Les références sont automatiquement mises a jour.</p>
            
         <br>
        </div>

       </div> 
          </BODY>
    
