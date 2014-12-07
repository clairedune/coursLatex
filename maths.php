<DOCTYPE !html>
<HTML>

   <HEAD>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css">
    </HEAD>        
    <BODY>
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
            \label{eq:ex1}<br/>
            \end{equation*}<br/>
        </div>
        <div style="float:left;width:40%;">
            <figure>
                <img src="image/7.png" width="500"/>
            </figure>
        </div>
      </div>
      
      <div style="clear:both;">
      <br/>
      <HR />
      <H2>Le package AMS</H2>
      
      <p class="texte">
      Vous trouverez un guide en anglais pour utiliser le package amsmath à l'url suivante : 
      <a href="http://mirrors.linsrv.net/tex-archive/macros/latex/required/amslatex/math/amsldoc.pdf">http://mirrors.linsrv.net/tex-archive/macros/latex/required/amslatex/math/amsldoc.pdf</a>.
      </p>
      
      <HR />
      
      <H2>Formules chimiques</H2>
      
      <p class= "texte">
      Pour écrire des formules chimiques, on peut utiliser directement l'environnement mathématique ou utiliser les package présenté sur ce site : 
      <a href="http://fr.wikibooks.org/wiki/LaTeX/%C3%89crire_des_formules_chimiques">http://fr.wikibooks.org/wiki/LaTeX/%C3%89crire_des_formules_chimiques</a>.
      </p>
      
      </div>
      
            
      
      
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
    
</HTML>