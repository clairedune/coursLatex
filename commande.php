<DOCTYPE !>
<HTML>

    <HEAD>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css">
    </HEAD>
        
    <BODY>
           
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
</div><!--fin container-->
          </BODY>
    
