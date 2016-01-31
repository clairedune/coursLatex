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
            <li class="active"><a href="bases.php">Bases</a></li>
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
    
    
    </br>
    </br>
    <div class="container">  
                   <H1> Eléments de base</H1>
        
        <H2>Un langage de balise</H2>
        <H3>Commandes</H3> 
        
        <p>Les commandes de LaTeX commencent par un <i>backslash</i> <b>\</b>, ce qui permet au programme de les identifier. Par exemple, pour afficher le mot LaTeX, on tape : </p>
       
        <p class="code"> \LaTeX</p> 
        
        <p style="clear:both">Beaucoup ne s'appliquent qu'à une seule partie du texte, délimitée par des <i>accolades</i>. Pour afficher en gras le mot « important », on tape :</p>
        <p class="code">\textbf{important}</p>
        
        <H3 style="clear:both">Environnement</H3> 
        <p>Vous aurez aussi à faire appel à des <i>environnements</i>. Ce sont des zones de votre document qui correspondent à une mise en page particulière : 
        <ul>
        <li>listes</li>
        <li>figures</li>
        <li>tableaux</li> 
        <li>equations</li>
        <li>etc.</li>
        </ul>
        
        <p>Les environnements sont encadrés par les balises : </p>
        <p class="code"> \begin{La commande} … \end{La commande}</p> 
        
        
        <div style="clear:both">
        <H3>Caractères spéciaux</H3>
        <ul>
        <li> %  commentaire</li>
        <li> ~  remplace un espace et interdit la césure entre les deux mots </li>
        <li>{}  pour délimiter une zone d'action d'une commande</li> 
        <li>\ indique le début d'une commande </li>
        <li>$ zone d'équation</li>
        <li>_ indice dans les équations</li>
        <li>^ exposant dans les équations</li>
        <li> \\ permet de sauter une ligne </li>
        </ul>
        
        <p>Pour pouvoir afficher ces caractères dans le document final, il faut utiliser des caractères d'échappement : <p>
        <div>
            <ul>
                <li> \%  pour %</li>
                <li> \~  pour ~</li>
                <li>\{ et \}  pour { et }</li> 
                <li> \textbackslash{} pour \</li>
                <li>\$ pour $</li>
                <li>\_ pour _</li>
                <li>\^ pour ^</li>
                </ul>
                </div>
        </div>
        
        
        
        <HR />
        <H2>Squelette de base </H2>
        
        <p>Un document LaTeX contiendra toujours les lignes suivantes: </p>
        
        <div class="code">
            <br/>
            \documentclass{article} 	
            <br/>
            \usepackage[utf8x]{inputenc} % pour pouvoir écrire des lettres avec accents<br/>
            <br/>
            \begin{document}<br/>
            <br/>
            Mon texte
            <br/>
            <br/>
            \end{document}
            <br/>
            <br/>
         </div>
         
         <div style="clear:both;">              
            <p>Ce qui figure entre \documentclass{***} et \begin{document} s'appelle le <i>préambule</i>.</p>
            <p>\end{document} Indique le moment où finit le texte. Attention, rien de ce qui suit cette commande ne sera        pris en compte par LaTeX.
</p>
        
        <div class="exercice" style="clear:both;">
            <H3>Exercice</H3>
            <p> Télécharger le <a href="example/squelette.tex">squelette</a> de base et compilez le.</p>
           <p> Vous devez obtenir le <a href="example/squelette.pdf">résultat suivant</a>.</p>  
        </div>
        <br>
        
        
</p>
        <p>Vous pouvez générer des squelettes de base en utilisant TeXMaker : </p>
        <ol>
            <li>Fichier > Nouveau</li>
            <li>Assistants > Assistant nouveau document </li>
        </ol>
        
         <figure>
            <img src="image/1.png" width="600"> </tr>
         </figure>
         <p>A vous ensuite de sélectionner les options. Par exemple : </p>
         <ul>
         <li>Classe de document : article</li>
         <li>Taille de police : 10px</li>
         <li>Taille du papier : a4Paper</li>
         <li>Paquet AMS pour de jolies équations</li>
         <li>Paquet makeidx pour générer les index et tables</li>
         <li>Nom D'auteur</li>
         <li>Titre</li>
         <li>Autres options : pas d'autres option pour l'instant</li>
         </ul>
         <figure>
            <img src="image/2.png" width="400"> </tr>
         </figure> 
         <p>Vous obtenez le document prérempli suivant</p>
         <figure>
            <img src="image/3.png" width="600"> </tr>
         </figure>  
         
         
         <div class="exercice">
            <H3>Exercice</H3>
            <p>        En utilisant l'assistant de TeXMaker, créez un document de la classe article contenant le texte suivant :<br/> "Un exemple de document \LaTeX.". <br/>Compilez et affichez le résultat. Vous devez obtenir le <a href="example/articleAuto.pdf">résultat suivant</a>. </p>  
        </div>

<HR />
        <H2>Modifier le style du texte</H2>
         
         
         <H3>Style de texte</H3>
        <p>Il est possible de modifier le style d'un groupe de lettre en utilisant les commandes suivantes : </p>
         
         <div>
        
         <ul>
         <li>\emph{emphatique}	EMPHasized	emphatique. C'est celui qu'on utilise pour mettre en valeur certains mots, les titres d'ouvrages en particulier.</li>
         <li>\textbf{gras}	Bold Fonts	gras.</li>
         <li>\texttt{machine à écrire}	Typewriter	machine à écrire.</li>
         <li>\textsl{incliné}	SLanted	 incliné. </li>
         <li>\textit{italique} texte en italique.</li>
         <li>\underline{souligné} texte souligné.</li>
         <li>\textsc{Petites majuscules}	Small Caps	Petites majuscules, pour les noms d'auteurs ou les sigles un peu longs. </li>
          </ul>
         </div>
         
         <p>Par exemple :</p> 
         <div class="code">
             Un texte \textbf{en gras}, avec quelques mots en \textit{italique} et \underline{un soulignement}.
         </div>
         
         <div style="clear:both;">
         <p>Donne le <a href="example/style.pdf">résultat suivant</a>.</p>
         
    
         <p>Ces styles sont capatibles entre eux. On peut les imbriquer : </p>
         
         </div>
         <div class="code">
         
\emph{Dans cet exemple, il y a des mots \textbf{en gras} et des
titres de livres comme \emph{Alice au pays des merveilles} qui sont
mis en évidence}.
         </div>
         
         <div style="clear:both">
         <p>On obtient alors le  <a href="example/style2.pdf">document suivant</a>.</p>
          
         
         <p><i>Remarque : </i> utilisez plutôt la commande \emph que la commande \textit.  \emph est une commande logique qui permet de mettre en évidence une portion de texte en fonction du contexte alors que la commande \textit met simplement du texte en italique.</p>
         
         
         <p>TexMaker peut vous aider à changer le style d'un bloc de texte en cas de trou de mémoire. </p>
         </div>
         
         <figure>
            <img src="image/6.png" width="400"> </tr>
         </figure>  
         
          <H3>Taille de texte</H3>
          
          <p>On peut changer la taille d'un texte à la volée en utilisant les commandes de tailles suivantes :</p>
          
           <ul>
            <li>\tiny : tout petit</li>
            <li>\scriptsize : très petit </li>
            <li>\footnotesize : assez petit </li>
            <li>\small : petit </li>
            <li>\normalsize : normal</li>
            <li>\large : plus gros</li>
            <li>\Large : encore plus gros</li>
            <li>\LARGE : toujours plus gros</li>
           </ul>
         
         <p>ATTENTION : les commandes de tailles des fontes s'écrivent à l'intérieur des accolades !</p>
         
        <div class="code">
            André \textsc{Malraux}, \emph{La condition humaine}
            {\tiny Parlez moins fort}
        </div>
        
        <div style="clear:both;">
        <p>On obtient alors le  <a href="example/style3.pdf">document suivant</a>.</p>
        </div>

<div style="clear:both;">
         <H3>Texte en couleur</H3>
         <p>Pour mettre une zone de texte en couleur, on peut utiliser le <i>package color</i></p>
         <div style="clear:both;">
            <div class="code" style="float:left;width:40%;" >
                \documentclass[10pt,a4paper]{article}<br />
                \usepackage[utf8x]{inputenc}<br />
                \usepackage{color}<br />
<br />
                \begin{document}<br />
<br />
                Du texte  \textcolor{green}{écrit en vert} \\<br />
                pour voir la vie en \textcolor{magenta}{rose}.<br />
<br />
                \end{document}
            </div>
          <div style="float:left;width:40%;">
            <figure>
                <img src="image/8.png" width="80%"/>
            </figure>
        </div>
      </div>
</div>
         
     <div style="clear:both;">
         <H3>Justification des paragraphes</H3>
         
         <p>La justification de paragraphes est gérée avec des environements. Les environnements s'ouvrent avec \begin{***} et se referment avec \end{***}, en faisant figurer le nom de l'environnement entre les accolades. </p>
         
         <ul>
         <li>flushleft : aligner le texte sur la marge de gauche ;</li>
                <li> flushright : aligner le texte sur la marge de droite ;</li>
         <li>center : centrer le texte ;</li>
         <li>quote : faire une citation ;</li>
         <li>quotation : faire une longue citation ;</li>
         <li>verse : faire de la poésie, chaque vers étant terminé par \\ ;</li>
         </ul>
         
         <p><i>Remarque</i> Une ligne blanche dans le texte crée un saut de paragraphe avec indentation. Tant qu'il n'y a pas de ligne blanche, et même s'il n'y a qu'un mot par ligne, c'est le même paragraphe, qui sera formaté correctement dans le DVI. Et qu'il ait 1 ou 46 lignes blanches dans le fichier source, c'est la même chose : il n'y aura qu'un changement de paragraphe. Pour supprimer l'indentation, vous pouvez utiliser \noindent.
Pour faire une ligne blanche entre deux paragraphes, il faut laisser une ligne blanche et taper la commande \bigskip ou \\.
         </p>
         
         
          <div class="exercice">
            <H3>Exercice</H3>
            <p>        En utilisant l'assistant de TeXMaker, créez le <a href="example/style4.pdf">document suivant</a>. </p>  
        </div>




<hr/>
<H2>Liste</H2>
         
         <p class="texte">Il existe deux types de listes en LaTeX, les listes à puces {itemize} et les listes numérotées {enumerate}. </p>
         
         <p class="texte">Un exemple de liste à puces simple : </p>
         
         <div class="code">
         Je veux acheter :<br>
\begin{itemize}<br>
\item des poires ;<br>
\item des carottes ;<br>
\item des choux.<br>
\end{itemize}<br>
</div>

<div class="texte" style="clear:both;">Un exemple de liste à puces numérotée : </div>

 <div class="code">
Les vainqueurs sont :<br>
\begin{enumerate}<br>
\item Paul Lefort ;<br>
\item Romain Legrand ;<br>
\item Joël Lebel.<br>
\end{enumerate}<br>
</div>

<div class="exercice">
            <H3>Exercice</H3>
            <p>       Insérez ces deux listes à puce dans votre document. </p>
         <br>
        </div>
        
        <div class="exercice">
            <H3>Exercice</H3>
            <p>       Créez un nouveau document et créez les listes à puces pour obtenir le <a href="example/liste.pdf">résultat suivant</a>. </p>
         <br>
        </div>
        








</div>
          </BODY>
    
</HTML>