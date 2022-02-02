<div id="selectSql" class="paragraphSql">
             <h2>La Commande DELETE</h2>
             <p>
                 La commande DELETE permets de suprimer des ligne existante, l'emploie de WHERE est specifier pour ne pas suprimer toutes les lignes
            </p>

            <h3>DELETE</h3>

            <p>Suprimer nos données </p>
            <pre>
                   <span class="codeSql">DELETE FROM</span>  table <span class="codeSql">WHERE</span> name='valeur-name';
            </pre>
            <p>Pour notre exemple nous allons suprimer dans la table users quand  name est Paul</p>
            <pre>
                   <span class="codeSql">DELETE FROM</span>  users <span class="codeSql">WHERE</span> name='Paul';
            </pre>
            <img src="images/selectSql.png" alt="">

            <p>cela nous retourne bien les champs demandés</p>
             
 </div>