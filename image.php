<DOCTYPE !>
<HTML>

    <HEAD>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css">
    </HEAD>        
    <BODY>
           <div class="container">  
        <H1>Insérer des images dans vos documents</H1>   
        
        
        <H2>Préambule : les formats d'image</H2>     
        
        <div class="texte">
        <p>LaTeX permet d'insérer des images dans vos documents.</p>
        <p><b>Attention</b> : tous les formats d'image ne sont pas compatibles entre eux. Il faudra choisir le format d'image en fonction du mode de compilation choisi.</p> 
        
        <p>Jusqu'à maintenant, nous avons utilisé le compilateur latex qui utilise en fait la ligne de commande <i>latex monfichier.tex</i>. Comme vous l'avez constaté, ce mode de compilation génère un fichier .div. Pour obtenir un pdf, il faut compiler à nouveau en utilisant la commande Dvi->Pdf. Dans ce mode de compilation, on peut intégrer des images au format <b>.ps</b> ou <b>.eps</b>. Pour compiler du code avec des images <b>.jpg</b>, <b>.png</b> ou encore <b>.gif</b>, il faut utiliser directement la formule PDFLatex pour compiler vos sources.</p>
        
        <p>Cela veut donc dire que dès le début de la création de votre document, il faut choisir un format de fichier pour toutes vos images et vous y tenir.Je vous conseille de choisir des formats d'image vectoriels <b>.ps</b> ou <b>.eps</b>. Vous pouvez convertir très facilement vos images en utilisant des logiciels de traitement d'image comme Gimp ou Photoshop. Quelque soit votre choix de format, toutes les commandes d'insertion des images sont les mêmes, seul le choix du compilateur change.</p>
        </div>
        <H2>Insérer une image</H2>
        
        <p>Pour pouvoir insérer des images le paquet à utilisé est graphicx : </p>
        <p class="code">\usepackage{graphicx}</p>
        
        <p>Pour insérer une image, via la commande </p>
        <p class="code">\includegraphics{<i>chemin de l'image</i>}
</p>

<p> voici un exemple de code : </p>
       
        <div class="code" style="float:left;width:40%;height:300;" >
        <br/>
        \documentclass[10pt,a4paper]{article}<br/>
        \usepackage[utf8x]{inputenc}<br/>
        \usepackage{graphicx}<br/>
        <br/>
        <br/>
        \begin{document}<br/>
<br/>
        \includegraphics{images/roussivau.ps}<br/>
<br/>
        \end{document}
        </div>
        <div style="float:left;height:400px;">
            <figure>
                 <a href="example/image.pdf"><img src="image/11.png" height="300" border="2"/></a>
            </figure>
        </div>
     
      <div style="clear:both">
      <p ><a href="example/images/roussivau.ps">Télécharger l'image roussivau.ps</a></p>
       </div>
      <div style="clear:both;">
      <HR />
      <H3>Taille d'une image</H3>
        
        <div class="texte">
        <p>Vous avez plusieurs possibilités pour indiquer à LaTeX la taille de l'image que vous souhaitez insérer. Vous pouvez indifféremment lui demander de :</p>
       <ul>
        <li>faire en sorte qu'une image ait une largeur donnée, il adaptera la hauteur afin de conserver ses proportions ;</i>
        <li>faire en sorte qu'une image ait une hauteur donnée, il adaptera la largeur de la même façon ;</i>
        <li>fixer à la fois la hauteur et la largeur, quitte à déformer l'image ;</i>
        <li>choisir un coefficient de proportionnalité permettant de réduire de façon cohérente et simultanée la hauteur et la largeur de l'image.</i>
        </ul>
<p>La largeur et la hauteur sont fixées respectivement par les variables <b>width</b> et <b>height</b>. L'échelle, quant à elle, se fixe grâce à la variable <b>scale</b> et un coefficient. Ce dernier vaut 1 pour la taille par défaut de l'image.</p>
</div>


<div style="clear:both;">
        <div class="code" style="float:left;">
   
        <br/>
        \documentclass[10pt,a4paper]{article}<br/>
\usepackage[utf8x]{inputenc}<br/>
\usepackage{graphicx}<br/>
\begin{document}<br/>
<br/>
En jouant sur la largeur\\<br/>
\includegraphics[width=60px]{images/roussivau.ps}\\<br/>
<br/>
<br/>
En jouant sur la hauteur\\<br/>
\includegraphics[height=100px]{images/roussivau.ps}\\<br/>
<br/>
<br/>
En jouant sur l'échelle\\<br/>
\includegraphics[scale=0.3]{images/roussivau.ps}\\<br/>
<br/>
En utilisant un pourcentage de la largeur de la colonne\\<br/>
\includegraphics[width=0.2\columnwidth]{images/roussivau.ps}<br/>
<br/>
\end{document}
        </div>
        
         <div style="float:left;width:40%;height:400px;">
            <figure>
                <a href="example/image2.pdf"><img src="image/12.png" height="300" border="2"/></a>
            </figure>
        </div>
      </div>


<div style="clear:both;">
 <br/>
  <br/>
<HR />
<H3>Rotation d'image</H3>

<div style="clear:both;">
        <div class="code" style="float:left;height:300px;">

      
        <br/>
        \documentclass[10pt,a4paper]{article} <br/>
        \usepackage[utf8x]{inputenc} <br/>
        \usepackage{graphicx} <br/>
        <br/>
        \begin{document} <br/>
        <br/>
        \includegraphics[angle=45]{images/labrigue.ps}\\ <br/>
        <br/>
        \end{document} <br/>
        </div>
        
        <p>Vous pouvez télécharger l'image ici : <a href="example/images/labrigue.ps">labrigue.ps</a></p>
        
        </div>
        <div style="float:left;width:40%;height:400px;">
            <figure>
                 <a href="example/rotation.pdf"><img src="image/13.png" height="300" border="2"/></a>
            </figure>
        </div>
    

</div>

<div style="clear:both;">
<p>On peut combiner plusieurs options en les séparant par une virgule</p>
<p class="code"><br/>\includegraphics[angle=45, width=0.4\columnwidth]{images/labrigue.ps}<br/></p>


 <br/>
  <br/>
<HR />
<H2>Environnements Flottants</H2>


<p class="texte">Il est très rare d'utiliser la commande includegraphics seule, comme nous l'avons fait dans le paragraphe précédent. Généralement on l'utilise dans l'environnement figure. Cet environnement permet à LaTeX de gérer automatiquement l'emplacement des images.</p>
          
          
<div style="clear:both;">
                <div class="code" style="float:left;">

        <br/>
        <br/>
        <br/>
        \documentclass[10pt,a4paper]{article} <br/>
\usepackage[utf8x]{inputenc} <br/>
\usepackage{graphicx} <br/>
 <br/>
\begin{document} <br/>
 <br/>
On peut insérer une photo dans un environnement flottant, par contre, elle se place automatiquement. <br/>
 <br/>
\begin{figure} <br/>
	\center <br/>
	\includegraphics[width=0.2\columnwidth]{images/arthur.ps} <br/>
	\caption{Légende de mon image} <br/>
	\label{fig:arthur} <br/>
\end{figure} <br/>
 <br/>
\end{document}
        </div>
        
        <p>Vous pouvez télécharger l'image ici : <a href="example/images/arthur.ps">arthur.ps</a></p>
        
        </div>
        <div style="float:left;width:40%;height:400px;">
            <figure>
                 <a href="example/figure.pdf"><img src="image/14.png" height="300" border="2"/></a>
            </figure>
        </div>
      </div>

</div>        
          
          
      <div style="clear:both;" class="texte">
      
     <p> Il est possible de spécifier à l'environnement figure (et par extension à LaTeX) votre préférence en termes de placement. Vous pouvez souhaiter que votre flottant soit plutôt : </p>
<ul>
<li>placé en haut de page (option t) ;</li>
<li>placé en bas de page (option b) ;</li>
<li>sur une page ne comportant que des flottants (option p).</li>
</ul>

<p>Il existe encore deux options. Vous pouvez indiquer à LaTeX que vous souhaitez faire figurer l'image dans la zone où vous avez tapé la commande de manière informative (option h) ou bien de manière insistante (option H).</p>

</div>    

 <div class="code" style="clear:both;">  
\begin{figure}[les options non séparées par des virgules]
</div>
 <br/>
<div class="texte"> Le « ! » est utilisé ici pour faire comprendre à LaTeX que nous insistons « énormément » sur une option.</div>
 <br/>
<div class="code" style="clear:both;"> 
\begin{figure}[b] %nous voulons le flottant en bas. <br/>
\begin{figure}[!b] %nous voulons le flottant en bas (avec insistance). <br/>
\begin{figure}[bt] %nous voulons le flottant en bas, ou en haut s'il ne peut pasêtre en bas. <br/>
\begin{figure}[h] %nous voulons le flottant ici. <br/>
\begin{figure}[H] %nous voulons le flottant ICI ! <br/>
\begin{figure}[hb] %nous voulons le flottant ici, ou en bas si cela n'est paspossible.  <br/>         
</div>          
      
      
            <div style="clear:both;">
  <br/>
<HR />
<H2>      Sauts de page</H2>

<p class="texte">Il est possible de forcer un saut de page en utilisant la commande</p>
 <div class="code" style="clear:both;">  
\newpage
</div>

<p class="texte">Avec les flottants, il y a deux autre manière de sauter des pages. Si vous écrivez un rapport en deux grandes parties, il est primordial qu'aucune image de la première partie ne se retrouve dans la seconde à cause d'un choix inopportun de LaTeX. Ces deux commandes s'utilisent exactement de la même manière que \newpage.</p>

<div class="code" style="clear:both;">  
\clearpage % saut de page tout en imposant à LaTeX de mettre tous les flottants en page (il les traitera tous, et produira des pages remplies par les flottants non traités) ;
<br />
\cleardoublepage % qui a le même effet, si ce n'est qu'il reprend la nouvelle page sur une page impaire.
</div>

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
    
