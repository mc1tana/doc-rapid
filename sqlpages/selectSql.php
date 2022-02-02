<div id="selectSql" class="paragraphSql">
             <h2>La Commande SELECT</h2>
             <p>
                 Pour lire des données de notre base, il faut rencontrer la commande la plus utilisé de SQL qui est SELECT.
            </p>

            <h3>SELECT SIMPLE</h3>

            <p>Pour lire les données de tout les champs d'une table </p>
            <pre>
                   <span class="codeSql">SELECT</span>  * <span class="codeSql">FROM</span> nom_de_table_visé;
            </pre>
            <p>Pour notre exemple selectionnons name et population de notre table country</p>
            <pre>
                   <span class="codeSql">SELECT</span>  Name, Population <span class="codeSql">FROM</span> nom_de_table_visé;
            </pre>
            <img src="images/selectSql.png" alt="">

            <p>cela nous retourne bien les champs demandés</p>
             
 </div>