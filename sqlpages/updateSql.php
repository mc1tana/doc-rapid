<div id="selectSql" class="paragraphSql">
             <h2>La Commande UPDATE</h2>
             <p>
                 La commande UPDATE permets de modifier des ligne existante, l'emploie de WHERE est specifier pour ne pas modifier toutes les lignes
            </p>

            <h3>UPDATE</h3>

            <p>Mettre à jour nos données </p>
            <pre>
                   <span class="codeSql">UPDATE</span>  table <span class="codeSql">SET</span> nom_colonne='nouvelle_val' <span class="codeSql">WHERE</span> name='valeur-name';
            </pre>
            <p>Pour notre exemple nous allons update la table users quand  name Paul</p>
            <pre>
                   <span class="codeSql">UPDATE FROM</span>  users <span class="codeSql">SET</span> email='Paul.ryu@gmail.com' <span class="codeSql">WHERE</span> name='Paul';
            </pre>
            <img src="images/selectSql.png" alt="">

            <p>cela nous retourne bien les champs demandés</p>
             
 </div>