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
        <li class="active"><a href="biblio.php">Biblio</a></li> 
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
           
           <H1>Gérer la bibliographie avec BibTex</H1>
           
           <H2>Citer des articles</H2>
           <div class="texte"> Dans les corps du texte pour citer un articles, on utilise la commande <b>cite</b> :</div>
           <div class="code">
              L'article de~\cite{Marey98} parle de cette méthode.
           </div>
           
           
           <div style="clear:both">
           <H2> Insérer de la bibliographie avec les éléments bibitem </H2>
           
           <p><i>\bibitem</i> est la commande a utiliser pour entrer une référence bibliographique dans l'environnement <i>thebibliographe</i> de votre document. La syntaxe est la suivante <i>\bibitem[label]{key}</i></p>
           
           <p class="code">
           \begin{thebibliography}{50}<br/>
		\bibitem{Simpson} Homer J. Simpson. \textsl{Mmmmm...donuts}.<br/>
		Evergreen Terrace Printing Co., Springfield, SomewhereUSA, 1998<br/>
		\end{thebibliography}<br/>
           </p>
           
           <p style="clear:both;">
          Et pour vous référer à cet élément dans votre texte, il faut écrire :
           </p>
           
           <p class="code">
           My thesis, about the philosophy of The Simpsons\copyright<br/>
		comes from my favorite book \cite{Simpson}.<br/>
           </p>
           </div>
           
           <div style="clear:both;">
           <H2>Insérer la bibliographie avec un fichier .bib</H2>
           </div>
           <div class="code">
            \bibliographystyle{style utilisé}<br>
\bibliography{nom du fichier .bib (sans l'extension .bib)}
           </div>
           
           <div class="texte">Le style peut être <b>plain</b>, <b>alpha</b>, <b>abbr</b>, <b>unsrt</b>.</div>
           
           
           <H2>Les éléments du fichier .bib</H2>
           
           <p class="texte"> Pour un article de journal </p>
           <div class="code">
           @Article{étiquette,<br />
title = {le titre de la publi},<br />
author = {liste des auteurs : Nom, P. and Nom2, P2. and Nom3, P3.},<br />
journal = {journal},<br />
volume* = {volume},<br />
year = {année},<br />
pages* = {pages concernées}<br />
month = {mois}<br />
note* = {note}<br />
}<br />
</div>
 <p class="texte"> Pour un article de journal </p>
           <div class="code">
           @Article{étiquette,<br />
title = {le titre de la publi},<br />
author = {liste des auteurs : Nom, P. and Nom2, P2. and Nom3, P3.},<br />
journal = {journal},<br />
volume* = {volume},<br />
year = {année},<br />
pages* = {pages concernées}<br />
month = {mois}<br />
note* = {note}<br />
}<br />
</div>

 <p class="texte"> Pour un article dans un proceeding de conférence </p>
           <div class="code">
           @InProceedings{étiquette,<br />
author = {liste des auteurs},<br />
title = {titre},<br />
booktitle = {titre du proceeding de la conférence},<br />
year = {année}<br />
}<br />
</div>

 <p class="texte"> Pour une thèse </p>
           <div class="code">
           @PhDThesis{étiquette,<br />
title = {titre},<br />
author = {auteur},<br />
school = {Université},<br />
year = {année}<br />
}<br />
</div>


 <p class="texte"> Pour un livre</p>
           <div class="code">
          @book{étiquette,<br />
author = {liste des auteurs},<br />
title = {titre},<br />
year = {année},<br />
publisher= {éditeur}<br />
}<br />
</div>


<div style="clear:both;">
<H2>Les alias</H2>
           <p class="texte" > Pour ne pas retaper les noms de congrès et de journaux pour tous les fichiers, il est possible d'associer un texte à un sigle en utilisant le mot clé <b>@string</b></p>
  </div>
           
  <p class="code">         @string{ PRL = {Physical Review Letters}}<br>
  @Article{article 1<br />
...<br />
journal = PRL,<br />
...<br />
}<br />
  </p>
  
  
  <div style="clear:both;">

  <H2>Compilation</H2>
           
           <p class="texte"> Pour compiler : on compile 1 fois en latex, puis 1 fois en BibTex, puis 2 fois en latex. </p>
           
           </div>
           </div> 
          </BODY>
    
