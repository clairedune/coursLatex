<DOCTYPE !>
<HTML>

    <HEAD>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css">
    </HEAD>        
    <BODY>
    <div class="container">  
        <H1> Introduction à LaTeX par la pratique </H1>
        
        <H2> Introduction </H2>
        <p>A l'origine le langage TeX a été crée pour faciliter la réalisation de documents scientifiques, en particulier l'écriture des formules mathématiques.
        LaTeX est une surcouche de TeX permettant de créer facilement des documents en suivant une trame standard. L'idée étant de séparer entièrement la partie
        rédactionnelle de la mise en forme.</p>
        

        <figure>
        <img src= "image/ex1.png"/>
          <img src= "image/ex2.png"/>
        <img src= "image/ex3.png"/>
        <center><figcaption>Quelques exemples de fichier LaTeX </figcaption></center>

        </figure>
        
        <p>LaTeX est un langage compilé. Comme c'est un langage, cela signifie qu'il faut apprendre sa logique et sa syntaxe et comme il est compilé, vous devez avoir un compilateur de LaTeX pour pouvoir visualiser votre mise en page. On l'oppose aux logiciels de mise en page classique que l'on appelle WYSIWYG (What you see is what you get). Pour faire des documents en LaTex, il faut donc s'habituer à une petite gymnastique qui fait perdre un peu de temps au début mais qui peut vous faire gagner un temps fous pour la rédactions de vos articles et de vos thèses.</p>
        
        <p>Un exemple de fichier LaTex</p>
        
        
         <div style="clear:both;">
            <div class="code" style="float:left;width:40%;" >
              \documentclass[10pt,a4paper]{article}<br />
              \usepackage[utf8x]{inputenc}<br />
              \usepackage{makeidx}<br/>
<br/>
              \author{Claire Dune}<br/>
              \title{Un exemple de document \LaTeX}<br/>
              \begin{document}<br/>
              <br/>
              \maketitle<br/>
              <br/>
              \section{Introduction}<br/>
              <br/>
              Quelques lignes d'un document \LaTeX.<br/>
              <br/>
              \section{Ecrire du texte en \LaTeX}<br/>
              <br/>
              \begin{flushleft}<br/>
              On peut écrire du texte et l'aligner à droite. \\<br/>
              \end{flushleft}<br/>
              <br/>
              \begin{center}<br/>
              On peut aussi le centrer.<br/>
              \end{center}<br/>
              <br/>
              \section{Et les maths, alors ?}<br/>
              <br/>
              \subsection{Une formule toute simple}<br/>
              <br/>
              $x=3$<br/>
              <br/>
              \subsection{Une formule un peu moins simple}<br/>
              On peut aussi écrire des formules : $$ y = \frac{\ddot{y}}{3}  \sqrt[2]{\beta^2+\dot{y}} $$<br/>
              <br/>
              \end{document}<br/>  
           </div>
          <div style="float:left;width:50%;">
          <img src="image/intro.png" width="95%"> 
          </div>
           </div>
          <div style="clear:both;">
        <p> Nous verrons dans ce cours, qu'il est possible de réaliser automatiquement toute votre mise en page à partir d'une maquette fournie par le site d'un journal et contenant la définition des marges, des polices de caractères, des styles. Un autre avantage de LaTeX est la facilité d'indexation des parties de votre document qui vous permet de faire référence à un chapitre ou à une figure en ne citant que son étiquette et sans vous soucier de son emplacement réel dans le document. </p>   
        </div>
        
        <HR />

         
        <H2>Chaine de production</H2>   
           
           Pour réaliser un document LaTeX, il faut 
           <ol>
                <li>Rédiger le document en tapant du texte "au kilomètre" dans un fichier source d'extension .tex. Attention ! Il est interdit de mettre des espaces ou des accents dans le nom de vos fichiers. Le compilateur compile du texte brut et non pas enrichi comme peut en fournir Word (un texte enrichi est un texte auquel une mise en page a été ajoutée). Si jamais l'envie vous prend de copier-coller un texte depuis Word, faites d'abord un copier-coller dans le Bloc-notes ou un logiciel du même genre. Vous éviterez ainsi beaucoup de problèmes.</li>
                <li>Compiler le fichier source. Des fichiers .aux et .log seront crées au passage. Ils permettent de gérer les références. </li>
                <li>Visualiser le résultat.</li>
           </ol>
           
           Il faut donc utiliser trois logiciels : 
           <ol>
                <li>Un éditeur de texte, par exemple <a href="http://www.xm1math.net/texmaker/index_fr.html">TeXmaker</a> est un éditeur de TeX multiplateforme gratuit</li>
                <li>Un compilateur de (La)TeX, par exemple <a href="http://miktex.org">MiKTeX</a> est un compilateur multiplateforme gratuit)</li>
                <li>Un logiciel de visualisation (acrobat reader, MiKTeX en propose un également, ou encore ghostview)</li>
           </ol>
           
           <p>Pour les besoin de ce cours, nous avons fait installer MiKTeX et TeXmaker sur les postes. Nous nous appuyerons donc directement sur des copies d'écran de la version 2.1 de Texmaker. Ce logiciel permet de compiler simplement vos source en cliquant sur des menus.</p>
    
        
       
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
    
