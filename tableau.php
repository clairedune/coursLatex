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
        <li class="active"><a href="tableau.php">Tableaux</a></li>
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
           
        <H1>Tableaux</H1>   
        
        
        <H2>Tableaux de base</H2>   
        
        <div style="clear:both;">
        <div class="code" style="float:left;height:200;" >
        <br />
        <br />
        <br />
           \begin{tabular}{l c c} <br />
gauche & centre & centre\\ <br />
4 & 3 & 23 \\ <br />
5 & 6 & 0\\ <br />
2 & 56 & 10 <br />
\end{tabular} <br />
        </div>
        <div style="float:left;width:40%;height:200;">
            <figure>
                <img src="image/15.png" width="200"/>
            </figure>
        </div>
      </div>
  
        
        <div style="clear:both;">
       <hr />
      <H2>Tableaux avec des bordures</H2>   
        
        <div style="clear:both;">
        <div class="code" style="float:left;width:40%;height:200;margin:10px;" >
        <br />
        <br />
        <br />
           \begin{tabular}{l | c | c} <br />
gauche & centre & centre\\ <br />
4 & 3 & 23 \\ <br />
5 & 6 & 0\\ <br />
2 & 56 & 10 <br />
\end{tabular} <br />
        </div>
        <div style="float:left;width:40%;height:200;margin:10px;">
            <figure>
                <img src="image/16.png" width="200"/>
            </figure>
        </div>
      </div>
             

      <div style="clear:both;">
        <div class="code" style="float:left;width:40%;height:200;margin:10px;" >
        <br />
        <br />
        <br />
       \begin{tabular}{|l | c | r|} <br />
\hline <br />
gauche & centre & droite\\ <br />
\hline <br />
4 & 3 & 23 \\ <br />
5 & 6 & 0\\ <br />
2 & 56 & 10\\ <br />
\hline <br />
\end{tabular} <br />
        </div>
        <div style="float:left;width:40%;height:200;">
            <figure>
                <img src="image/17.png" width="200"/>
            </figure>
        </div>
      </div>

   <div style ="clear:both;">  
     
<H3>Assistant TeXMaker</H3>
     
        <div class="texte" style="float:left;width=450%;">
        <p >
            TeXMaker propose un assistant à la création de tableau : 
        </p>
        <figure>
            <img src="image/18.png" width="200px"/>
        </figure>
        </div>
        
        <div class="texte" style="float:left;width:45%;">
        <p >
            On peut y sélectionner le nombre de colonnes et <br>
            le nombre de lignes ainsi que le type de séparateur pour les colonnes et les lignes :
        </p>
        <figure>
            <img src="image/19.png" width="350px"/>
        </figure>
        </p>
        </div>
             <div style="clear:both;">
        <p class="texte"> 
            On obtient alors le code et le rendu suivant, il n'y a plus qu'à remplacer les points par les valeurs de votre choix : 
        </p>
      
      
       
        <div class="code" style="float:left;width:40%;height:200;" >
        <br />
        <br />
        <br />
       \begin{tabular}{||c||c||c||c||c||c||}<br />
\hline • & • & • & • & • & • \\ <br />
\hline • & • & • & • & • & • \\ <br />
\hline • & • & • & • & • & • \\ <br />
\hline <br />
\end{tabular} <br />
        </div>
        <div style="float:left;width:40%;height:200;">
            <figure>
                <img src="image/20.png" width="200"/>
            </figure>
        </div>
      </div>
      
           
       <div style="clear:both;">
       <hr />
       <H2>Fusionner des cellules</H2>
       
       <H3>Fusionner des colonnes</H3>
       <p class="code">\multicolumn{nombre de colonnes}{c, l ou r + bordures éventuelles}{le texte de la cellule}</p>
       
       <div style="clear:both;">
        <div class="code" style="float:left;width:40%;height:200;" >
        <br />
       \begin{tabular}{| l | l | l | l |} <br />
       <br />
\hline Matières 	&   <br />
\multicolumn{2}{l|}{Notes}   & <br />
Moyenne \\  <br />
<br />
\hline Math 			& 12 	& 14 							& 13 \\  <br />
\hline Anglais 		& 16 	& 8 								& 12 \\  <br />
\hline  <br />
\end{tabular}  <br />
 <br />
        </div>
        <div style="float:left;width:40%;height:200;">
            <figure>
                <img src="image/21.png" width="300"/>
            </figure>
        </div>
      </div>
      </div>
      <div style ="clear:both;">

<H3>Fusionner des lignes</H3>
<p class="texte">Il faut utiliser le package <b>multirow</b> : </p>
<p class="code"> \multirow{nombre de lignes fusionnées}{taille en cm}{texte} </p>
ou
<p class="code">\multirow{nombre de lignes fusionnées}*{texte}</p> 

    <div style="clear:both;">
        <div class="code" style="float:left;width:40%;height:250;" >
        <br />
        \usepackage{multirow}<br />
        \begin{document}<br />
        <br />
       \begin{tabular}{| l | l  | l  | l |l  |} <br />
       <br />
        \hline Matières 	& <br />
        \multicolumn{2}{l|}{Notes}   & <br />
        Moyenne \\  <br />
        \hline Math 			& 12 	& 14 	 <br />						& 13 \\  <br />
        \hline Anglais 		& 16 	& 8  <br />								& 12 \\  <br />
        \hline  <br />
        \end{tabular} <br />
        \end{document}
 <br />
        </div>
        <div style="float:left;width:40%;height:200;">
            <figure>
                <img src="image/23.png" width="300"/>
            </figure>
        </div>
</div>
                   
       <div style="clear:both;">
        <div class="code" style="float:left;width:40%;height:250;" >
        <br />
      \begin{tabular}{| l | l  | l  | l |l  |} <br />
\hline <br />
\multicolumn{2}{|c|}{}& \multicolumn{2}{|c|}{Notes}   & Moyenne \\  <br />
\hline <br />
\multirow{2}*{Matières} & Math 			& 12 	& 14 							& 13 \\  <br />
\cline{2-5} <br />
& Anglais 		& 16 	& 8 								& 12 \\  <br />
\hline  <br />
\end{tabular}  <br />
 <br />
        </div>
        <div style="float:left;width:40%;height:200;">
            <figure>
                <img src="image/24.png" width="300"/>
            </figure>
        </div>

             
       </div>
       </div>
       
       
        <div style="clear:both;">
       <H3>Séparation diagonale</H3>      
             
             <p class="texte">Il faut utiliser le package <b>slashbox</b></p>
         
        <div class="code" style="float:left;width:40%;" >
        <br />
         \usepackage{slashbox}<br />
<br />
\begin{document}<br />
<br />
\begin{tabular}{ | c | c | c | c | c |}<br />
\hline<br />
\backslashbox{A}{ B} & 1 &  2 & 3 & 4\\ <br />
\hline<br />
1 & 0.9982 &  0.1 & 0.34 & 0.78 \\ <br />
\hline<br />
2 & 0.0002 &  0.1 & 0.34 & 0.8 \\ <br />
\hline <br />
3 & 0.002 &  1 & 0.3 & 0.7 \\ <br />
\hline <br />
4 & 0.9 &  0.1 & 4 & 8 \\ <br />
\hline  <br />
\end{tabular} <br />
<br />
\end{document}<br />
 <br />
        </div>
        <div style="float:left;width:40%;height:200;">
            <figure>
                <img src="image/25.png" width="300"/>
            </figure>
        </div>
</div>        
           
             
       </div>

<div style="clear:both;">
<H2>Creér ses propres séparateurs</H2>

<p class="texte">Le séparateur | permet de creer une ligne vertical. LaTeX permet d'insérer n'importe quel texte comme élément séparateur en utilisant la commande !{}. Voici un exemple :</p>


        <div class="code" style="float:left;width:40%;" >
        <br />
     \usepackage{array}<br />
\usepackage{eurosym}<br />
\begin{document}<br />
<br />
\begin{tabular}{ | c | c !{\euro{}} |}<br />
\hline<br />
pain au chocolat & 1.25\\<br />
\hline  <br />
croissant& 0.80\\<br />
\hline  <br />
pain aux raisins& 1.00\\<br />
\hline  <br />
\end{tabular}  <br />
\end{document}<br /><br />
        </div>
        <div style="float:left;width:40%;height:200;">
            <figure>
                <img src="image/26.png" width="300"/>
            </figure>
        </div>


       
       
       <div style="clear:both;">
       
       <H2>Contrôler la largeur des cellules</H2>
       
        <div style="clear:both;">
        <div class="code" style="float:left;width:40%;height:200;" >
        <br />
       \begin{tabular}{ | p{50px}| p{50px}   | p{50px} |p{100px}  |}<br />
\hline<br />
\multicolumn{2}{|c|}{}& \multicolumn{2}{|c|}{Notes}   & Moyenne \\ <br />
\hline<br />
\multirow{2}*{Matières} & Math & 12 & 14 & 13 \\ <br />
& Anglais & 16 	& 8 & 12 \\ <br />
\hline <br />
\end{tabular}  <br />
        </div>
        <div style="float:left;width:40%;height:200;">
            <figure>
                <img src="image/22.png" width="300"/>
            </figure>
        </div>
       
       </div>
       
       
       <div style="clear:both;">
       <H2>Environnements flottants Table</H2>
       
       <p class="texte">Il existe un environnement flottant pour les tableaux, comme les figures pour les image. Il s'agit de l'environnement <b>table</b>. </p>
       
       
       <p class="code">
       \begin{table}<br>
\centering<br>
ici on inclut le code du tableau<br>
\caption{nom du tableau}<br>
\label{l'étiquette du tableau}<br>
\end{table}<br>
</p>

<p>Par exemple : </p>
      <div style="clear:both;">
        <div class="code" style="float:left;width:40%;" >
        <br />
      \begin{table} <br />
\centering <br />
\begin{tabular}{ | c | c !{\euro{}} |} <br />
\hline <br />
pain au chocolat & 1.25\\ <br />
\hline   <br />
croissant& 0.80\\ <br />
\hline   <br />
pain aux raisins& 1.00\\ <br />
\hline   <br />
\end{tabular} <br />
\label{tab:prix} <br />
\caption{Prix des viennoiseries} <br />
\end{table}  <br />

        </div>
        <div style="float:left;width:40%;height:200;">
            <figure>
                <img src="image/27.png" width="300"/>
            </figure>
        </div>
       
       </div>

            
        </div><!--fin container-->
                </BODY>
    
