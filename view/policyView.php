<?php $title = 'Données personnelles - iRez, Solutions Informatiques'; ?>
      
<?php ob_start(); ?>        
    <main role="main">
        <section id="policy">
            <div class="container">
                <h2 class="py-4 m-5 text-center text-uppercase" id="policy_h1">Notre politique de confidentialité</h2><br />
                <p class="text-left font-weight-bold">> Identité et coordonnées du responsable du traitement</p>
                <p style="text-align:left"></p>
                <p style="text-align:left">Identité et coordonnées du responsable du traitement: Mathieu Delclos 240 chemin St Martin 13420 Gémenos</p>

                <p class="text-left font-weight-bold">> Finalités du traitement auquel sont destinées les données à caractère personnel et base juridique du traitement</p>
                <p style="text-align:left"></p>
                <p style="text-align:left">Le traitement des données envoyées via le formulaire de contact est destiné à pouvoir recontacter les prospects et clients suite à leur demande de contact.<br />
                 <br />

                <p class="text-left font-weight-bold">> Destinataires des données à caractère personnel</p>
                <p style="text-align:left"></p>
                <p style="text-align:left">L'unique destinataire des données est l'auto-entreprise <strong>irez solutions informatiques</strong>.</p>

                <p class="text-left font-weight-bold">> Transfert de données</p>
                <p style="text-align:left"></p>
                <p style="text-align:left">Le responsable du traitement <strong>n’a pas l’intention</strong> d’effectuer un transfert de données à caractère personnel vers un pays tiers ou à une organisation internationale.<br />
            
                <p class="text-left font-weight-bold">> Durée de conservation</p>
                <p style="text-align:left"></p>
                <p style="text-align:left"> Les données seront conservées jusqu'à demande de suppression des données d'une personne physique ou morale.</p>

                <p class="text-left font-weight-bold">> Droits de la personne dont les données sont collectées</p>
                <p style="text-align:left"></p>
                <p style="text-align:left"><strong>La personne dont les données personnelles sont collectées a le droit :</strong>
                <ul>
                    <li>de demander au responsable du traitement l’accès aux données à caractère personnel, la rectifi­cation ou l’effacement de celles-ci, ou une limitation du traitement relatif à la personne concernée</li>
                    <li>de s’opposer au traitement</li>
                    <li>à la portabilité de ses données</li>
                    <li>d’introduire une réclamation auprès d’une autorité de contrôle</li><br />
                </ul>        
                
                <p class="text-left font-weight-bold">> Prise de décision automatisée – profilage</p>
                <p style="text-align:left"></p>
                <p style="text-align:left"><strong>Aucun profilage ne sera réalisé et plus généralement aucune décision automatisée ne sera prise sur la base des données collectées.</strong></p>

           
            <div>
        </section>
    </main>   
<?php $content = ob_get_clean(); ?>
        
<?php require('templateView.php') ?>