<div id="typeSql" class="paragraphSql">
             <h2>Les Types</h2>
             <p>
                 Chaque colonnes doivent posséder un type, les type de valeurs possible ce declare au moment de la creation de la table comme vue precedement.
                 il exist un nombreux types de données, nous allons les decouvrir.
            </p>

            <h3>Type De Données</h3>

            <p>Rappel pour la creation d'une table :</p>
            <pre>
                   <span class="codeSql">CREATE TABLE</span>  nom_de_table(
                        nom_champ1  type (taille) contrainte,
                        nom_champ2  type (taille) contrainte,
                        ...
                   )

            </pre>
            <table>

                       <tr class='titretb'>
                           <td> Type numerique entier à valeur exact</td> 
                       </tr>
                       
                       <tr>
                           <td>TINYINT(n)</td style="width:50%"><td>8 bits</td>
                        </tr>
                        <tr>
                             <td>SMALLINT(n)</td style="width:50%"><td>16 bits</td>
                        </tr>
                         <tr>
                             <td>MEDIUMINT(n)</td style="width:50%"><td>24 bits</td>
                         </tr>  
                        <tr>
                                <td>BIGINT(n)</td style="width:50%"><td>32 bits</td>
                        </tr>
                        <tr class=titretb >
                           <td> Type numerique à flottant à valeur exact</td> 
                       </tr>  
                       <tr>
                                <td>NUMBER(n,s)</td style="width:50%"><td> bits</td>
                        </tr> 
                        <tr>
                                <td>DECIMAL(n,s)</td style="width:50%"><td> bits</td>
                        </tr> 
                        
                        <tr class='titretb' >
                           <td> Type numerique à flottant à valeur approximatives</td> 
                       </tr> 
                       <tr>
                                <td>FLOAT(n)</td style="width:50%"><td>1 - 126 bits</td>
                        </tr>   
                        

                      
            </table>
            
             
 </div>