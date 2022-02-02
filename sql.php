<?php require_once('header.php') ?>
 <div id="pageSql">

    <h1>Language SQL</h1>
        <div class="vertical-menu">
            <a href="#" class="active">Menu</a>
            <a href="sql.php?link=createdatabase&ext=.php#creationBase">DataBase</a>
            <a href="sql.php?link=table&ext=.php#tableSql">Les Tables</a>
            <a href="sql.php?link=selectSql&ext=.php#selectSql">Select</a>
            <a href="sql.php?link=insertIntoSql&ext=.php#insertInto">Insert Into</a>
            <a href="sql.php?link=TypeSql&ext=.php#typeSql">Types</a>
            <a href="sql.php?link=contrainte&ext=.php#contrainteSql" >Contraintes</a>


        </div>

    <section class="containSql">
        
        <div id='histoireSql'>
            <h3>l'histoire du SQL</h3>
            <p>
                    L’histoire de SQL commence en 1969, lorsque le chercheur d’IBM Edgar F.Codd définit le modèle de base de données relationnelle. Ce modèle repose sur l’association de ” clés ” avec diverses données. Par exemple, un nom d’utilisateur peut être associé à un vrai nom et à un numéro de téléphone. <br><br>

                    Quelques années plus tard, IBM crée un langage pour les systèmes de gestion de bases de données relationnelles en se basant sur les travaux de Codd. Ce langage s’appellera d’abord SEQUEL, pour ” Structured English Query Language “. Après plusieurs implémentations et révisions, il s’appellera finalement SQL. <br><br>

                    Les tests débutent en 1978, puis IBM commence à développer des produits commerciaux comme SQL/DS en 1981 et DB2 en 1983. D’autres vendeurs suivront, comme Sybase, Ingres, ou Oracle qui lance son premier produit en 1979. <br><br>
                        
                    Le language fut standardisé en 1986, puis subit une révision majeure en 1992 et a été normalisé (ISO 9075). <br><br>
                    
                    En 2011, SQL subit sa 7e révision majeure – technologie de l’information incluant principalement la notion de base de données temporelle. <br><br>

                    Malgré une norme bien établie, son implémentation varie de façon plus ou moins importante d’un SGBD à un autre. <br> <br>

                    Ainsi, les SGBD existants tels que Oracle, MySQL, MS Access, SQL Server et 
                    tous les autres respectent généralement la normes mais présentent plusieurs particularités qui sont souvent ennuyeuses. <br><br>
            </p>
        </div>
    
            <?php         
                
                if(empty($_GET)){

                }else{
                    $linksql = $_GET['link'];
                  $extsql = $_GET['ext'];
                 require_once('sqlpages/'.$linksql.$extsql);
                }  
                
                ?>
      
        
    </section>
 </div>
 
   
<?php require_once('footer.php')?>