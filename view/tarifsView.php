<?php $title = 'Tarifs - iRez, Solutions Informatiques'; ?>


<?php ob_start(); ?>        
<main id="tarifs" role="main">
    <section>
        <div class="container">
            <div class="text-center" style="margin: 30px;">
                <h2 class="py-4 text-center text-uppercase" style="margin-top: 180px !important;">Grille des tarifs</h2>
                <hr/>
                <p>Nous réalisons les interventions à domicile (prix du service + frais de déplacement) et en atelier.</p>
            </div>

            <h2 class="text-center mt-5 tarifs_h2"><i class="fas fa-home mr-3"></i>Chez vous </h2>
            <table class="table table-hover table-dark">
                <thead>
                    <tr>
                        <th scope="col" colspan="2" class="text-uppercase text-center">Services</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Intervention 1H</td>
                        <td class="text-right">50€</td>
                    </tr>
                    <tr>
                        <td>Intervention 1H Urgence*</td>
                        <td class="text-right">80€</td>
                    </tr>
                    <tr>
                        <td>Formation 1H</td>
                        <td class="text-right">60€</td>
                    </tr>
                    <tr>
                        <td>Formation Pack 2H</td>
                        <td class="text-right">100€</td>
                    </tr>
                </tbody>
                <thead>
                    <tr>
                        <th colspan="2" class="text-uppercase text-center">+ Coût du Déplacement</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Moins de 10Km</td>
                        <td class="text-right">5€</td>
                    </tr>
                    <tr>
                        <td>Entre 10 et 20Km</td>
                        <td class="text-right">10€</td>
                    </tr>
                    <tr>
                        <td>Plus de 20Km</td>
                        <td class="text-right">à partir de 15€</td>
                    </tr>
                </tbody>
            </table>

            <p>Exemple: 15Km + 2H d'intervention = 10€ + 50€ + 50€ = 110€ <br/>
            <small>*Intervention 1H Urgence : Horaires exceptionnels > 19H, Jours non ouvrés, Intervention sous 24H sous réserve de disponibilité.</small></p>
        </div>
        <div class="container">
            <h2 class="text-center mt-5 tarifs_h2"><i class="fas fa-wrench mr-3"></i>L'atelier </h2>
            <table class="table table-hover table-dark" id="table-responsive">
                <thead>
                    <tr>
                        <th scope="col" colspan="2" class="text-uppercase text-center">Software</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Diagnostic</td>
                        <td class="text-right">20€</td>
                    </tr>
                    <tr>
                        <td>Réinstallation système</td>
                        <td class="text-right">80€</td>
                    </tr>
                    <tr>
                        <td>Réinstallation système + Récupération de données</td>
                        <td class="text-right">100€</td>
                    </tr>
                    <tr>
                        <td>Nettoyage système, Antivirus, Désinfection</td>
                        <td class="text-right">50€</td>
                    </tr>
                </tbody>
                <thead>
                    <tr>
                        <th scope="col" colspan="2" class="text-uppercase text-center">PC portables</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Changement d'écran</td>
                        <td class="text-right">à partir de 120€</td>
                    </tr>
                    <tr>
                        <td>Connecteur de charge</td>
                        <td class="text-right">à partir de 100€</td>
                    </tr>
                    <tr>
                        <td>Changement de clavier</td>
                        <td class="text-right">à partir de 80€</td>
                    </tr>
                    <tr>
                        <td>Changement de batterie interne</td>
                        <td class="text-right">Sur devis</td>
                    </tr>
                </tbody>
                <thead>
                    <tr>
                        <th scope="col" colspan="2" class="text-uppercase text-center">Hardware</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Assemblage PC bureautique multimédia</td>
                        <td class="text-right">60€</td>
                    </tr>
                    <tr>
                        <td>Assemblage PC Gamer</td>
                        <td class="text-right">80€</td>
                    </tr>
                    <tr>
                        <td>Montage composants + installation Drivers</td>
                        <td class="text-right">30€</td>
                    </tr>
                </tbody>
                <thead>
                    <tr>
                        <th scope="col" colspan="2" class="text-uppercase text-center">Entretien</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Nettoyage unité centrale</td>
                        <td class="text-right">30€</td>
                    </tr>
                    <tr>
                        <td>Nettoyage unité centrale + pâte thermique</td>
                        <td class="text-right">50€</td>
                    </tr>
                    <tr>
                        <td>Nettoyage PC portable</td>
                        <td class="text-right">40€</td>
                    </tr>
                    <tr>
                        <td>Nettoyage PC portable + pâte thermique</td>
                        <td class="text-right">70€</td>
                    </tr>
                    <tr>
                        <td>Pack Windows + Clé USB Windows à jour</td>
                        <td class="text-right">90€</td>
                    </tr>
                </tbody>
                <thead>
                    <tr>
                        <th scope="col" colspan="2" class="text-uppercase text-center">Récupération de données</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Récupération à l'atelier</td>
                        <td class="text-right">à partir de 50€</td>
                    </tr>
                    <tr>
                        <td>Récupération en laboratoire</td>
                        <td class="text-right">Sur devis</td>
                    </tr>
                </tbody>
                <thead>
                    <tr>
                        <th scope="col" colspan="2" class="text-uppercase text-center">Autre</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Delid CPU Séries : 3xxx/4xxx/6xxx/7xxx/8xxx socket 15xx</td>
                        <td class="text-right">40€ (pâte kryonaut conductonaut inclus)</td>
                    </tr>
                    <tr>
                        <td>Tablette et Smartphone</td>
                        <td class="text-right">Sur devis</td>
                    </tr>
                </tbody>
            </table><hr/>
        </div>
    </section>
</main>   
<?php $content = ob_get_clean(); ?>

<?php require('templateView.php') ?>