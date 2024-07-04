<!--            http://localhost/projet_cd/views/           -->


    <!-- appel de errorConfig et index.controleur  -->
<?php require_once('../config/errorConfig.php'); ?>
<?php require_once('../controller/index-Controller.php'); ?>

    <!-- appel du header  -->
<?php require_once('../partials/headerGP.php'); ?>

<main>
    <section class="accueil">
        <div class="immArriere">
            <img src="../assets/img/mainsdecalees.jpg" alt="solidarité">
        </div>
        <article>
            <div class="textArriere">
                <p>Vous avez besoin de conseils pour votre budget, 
                vous rencontrez des difficultés financières, vous n'êtes plus en mesure de régler l'ensemble de vos charges et de vos dettes, vous avez besoin d'un microcrédit, ...</p>
                <p>Des bénévoles accompagnants de CRESUS  vous accueillent, vous écoutent, vous informent et peuvent vous accompagner.
                Ils recherchent avec vous les solutions les plus adaptées à vos difficultés financières, sociales et juridiques</p>
                <p class="lorem">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat quasi voluptas odio quas numquam nemo assumenda cum laboriosam dolore, eum adipisci saepe provident dolorum repudiandae tempora et! Assumenda, voluptatem culpa.</p>
                <div id="bouton">
                    <a href="#nousTrouver"> Nous contacter</a>
                </div>
            </div>

        </article>
    </section>
    <section class="solutions">
        <h1 >Nos solutions concrètes pour vous aider</h1>
        <div class="lessolutions">
            <?php foreach ($activites as $activite) { ?>
                <div class='activite'>
                    <div>
                        <img src="<?php echo $activite['img-pte']; ?>" alt="<?php echo $activite['alt']; ?>" >
                    </div>
                    <a href="<?php echo $activite['ancre']; ?>"> <?php echo $activite['in2lines']; ?> </a>
                </div>
            <?php } ?>
        </div>
    </section>
</main> 

    <!-- appel du footer  -->
<?php require_once('../partials/footer.php'); ?>