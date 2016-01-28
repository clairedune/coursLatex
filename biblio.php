<DOCTYPE !html>
<HTML>

   <HEAD>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css">
    </HEAD>        
    <BODY>
           <div class="container">  
           
           <H1>Gérer la bibliographie avec BibTex</H1>
           
           <H2>Citer des articles</H2>
           <p class="texte"> Dans les corps du texte pour citer un articles, on utilise la commande <b>cite</b> :</p>
           <p class="code">
              L'article de~\cite{Marey98} parle de cette méthode.
           </p>
           
           <H2>Insérer la bibliographie</H2>
           
           <p class="code">
            \bibliographystyle{style utilisé}<br>
\bibliography{nom du fichier .bib (sans l'extension .bib)}
           </p>
           
           <p class="texte">Le style peut être <b>plain</b>, <b>alpha</b>, <b>abbr</b>, <b>unsrt</b>.<p>
           
           
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

<H2>Les alias</H2>
           <p class="texte" > Pour ne pas retaper les noms de congrès et de journaux pour tous les fichiers, il est possible d'associer un texte à un sigle en utilisant le mot clé <b>@string</b></p>
  
           
  <p class="code">         @string{ PRL = {Physical Review Letters}}<br>
  @Article{article 1<br />
...<br />
journal = PRL,<br />
...<br />
}<br />
  </p>
  
  <H2>Compilation</H2>
           
           <p class="texte"> Pour compiler : on compile 1 fois en latex, puis 1 fois en BibTex, puis 2 fois en latex. </p>
           
     <div style="clear:both;">
       <HR />
 <H2> Allez à </H2>
        <p><a href="index.php">Introduction</a></p>
        <p><a href="bases.php">Création d'un document et modification du texte.</a></p>
        <p><a href="section.php">Structure d'un document</a></p>
        <p><a href="image.php">Insérer des images</a></p>
        <p><a href="tableau.php">Tableaux</a></p>
        <p><a href="maths.php">Formules mathématiques</a></p>
        <p><a href="biblio.php">Créer une bibliographie</a></p> 
        <p><a href="commande.php">Création de macros</a></p>
        <p><a href="style.php">Créer sa feuille de style</a></p>
        <p><a href="beamer.php">Créer une présentation</a></p>          
        <p><a href="exercices.php">Exercices</a></p> 
      
       </div>
       </div> 
          </BODY>
    
