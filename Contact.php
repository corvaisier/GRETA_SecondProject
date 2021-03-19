<?php
include("helpers/header-other.php")
?>
<main id="main-contact">
    <section>
        <h4>Contacter Simply Home</h4>
        <div class="text-contact">
            <p>
                Pour toute demande d'information ou de prise de rendez-vous, vous pouvez nous adresser votre demande en remplissant le formulaire de contact ci-dessous. 
                <br>
                Le conseiller en habitat de votre secteur géographique, interlocuteur unique, vous proposera un accompagnement unique et personnalisé tout au long de la construction. Ce suivi personnalisé est garant de la réussite des projets.
            </p>
            <div class="img-contact">
                <img src="images\imgcommencerprojet.jpg" alt="plan maison">
            </div>
        </div>
    </section>
    <section>
        <form action="traitement.php" method="post">
            <div class="colum border-form">
                <input type="text" placeholder="Nom">
                <input type="text" placeholder="Email">
                <input type="text" placeholder="Téléphone">
            </div>
            <p>Département<br>
                <input type="checkbox" name="continent" id="europe" value="europe">
                <label for="europe" class="small">16</label>
                <input type="checkbox" name="continent" id="amerique" value="amerique">
                <label for="amerique" class="small">85</label>
            </p>
            <p>Votre projet<br>
                <input type="checkbox" name="continent" id="europe" value="europe">
                <label for="europe" class="small">Maison</label>
                <input type="checkbox" name="continent" id="amerique" value="amerique">
                <label for="amerique" class="small">Maison+Terrain</label>
                <input type="checkbox" name="continent" id="amerique" value="amerique">
                <label for="amerique" class="small">Appartement</label>
            </p>
            <div class="colum">
                <label for="message">Votre message</label>
                    <textarea name="message" id="message"></textarea>
                <input class="submit-button bouton" type="submit"></input>
            </div>

        </form>
    </section>

</main>

<?php
include("helpers/footer.php")
?>