<div id="insertInto" class="paragraphSql">
             <h2>La Commande INSERT INTO</h2>
             <p>
                 L’insertion de données dans une table s’effectue à l’aide de la commande INSERT INTO. Cette commande permet au choix d’inclure une seule ligne à la base existante ou plusieurs lignes d’un coup.
            </p>

            <h3>Insérer une ligne à la fois </h3>

            <p> 
                La syntaxe pour remplir une ligne est la suivante: <br>
                <span class="attention">Respectez l'ordre des colonnes de la table!!!</span>
            </p>
            <pre>
                   <span class="codeSql">INSERT INTO</span>  table <span class="codeSql">VALUES</span> ('val1','val2', ...);
            </pre>
            <p>Pour notre exemple inserrons les valeur de notre table country</p>
            <pre>
                   <span class="codeSql">INSERT INTO</span>  nom_de_table_visé <sapn class="codeSql">VALUES</sapn> ('val1','val2',...);
            </pre>
            <p>Pour des soucis pratique nous navons pas mis toute les valeurs correspondantes ici mais si vous voulez voir le resulta je vous conseil de le faire</p>
            <img src="images/selectSql.png" alt="">

            <p>verifiez aue de nouvelles valeurs ce sont inseré</p>

            <h3>Insérer une ligne de valeurs correspondantes a des colonnes precises</h3>
            <p>
                La syntaxe pour remplir des colonnes precises est la suivante: 
            </p>      
            <pre>
                <span class="codeSql">INSERT INTO</span> table (colonne1, colonne12) <span class="codeSql">VALUES</span> ('val1','val2');
            </pre>  
            <p>Pour notre Exemple inserrons les valeur des champs name et population de la table country</p>
            <pre>
                <span class="codeSql">INSERT INTO</span> country (Name, Population) <span class="codeSql">VALUES</span> ('wakanda','500000');
            </pre> 
            <img src="images/selectSql.png" alt="">     
            <h3>Insérer plusieurs ligne de  valeurs correspondantes a des colonnes precises</h3>
            <p>
                La syntaxe est la suivante: 
            </p>      
            <pre>
                <span class="codeSql">INSERT INTO</span> table (colonne1, colonne12)
                 <span class="codeSql">VALUES</span> 
                    ('val1','val2'),
                    ('val16','val24'),
                    ('val16','val247');

            </pre>  
            <p>Pour notre Exemple inserrons les valeur des champs name et population de la table country:</p>
            <pre>
                <span class="codeSql">INSERT INTO</span> country (Name, Population)
                 <span class="codeSql">VALUES</span> 
                  ('wakanda','500000'),
                  ('utopia' , '10'),
                  ('nephy' , '3000');
            </pre> 
            <img src="images/selectSql.png" alt="">     
 </div>