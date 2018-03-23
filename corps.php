
<div class="corps">                	
    <div style="background color: red;  float: left; margin-left: 1%; width: 48%; margin-right: 1% ">
                   
        <!--Carousel Wrapper-->
        <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel" style="height: 500px">
            <!--Indicators-->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-1z" data-slide-to="0" class="active">Bienvenue</li>
                <li data-target="#carousel-example-1z" data-slide-to="1"></li>
                <li data-target="#carousel-example-1z" data-slide-to="2"></li>
            </ol>
            <!--/.Indicators-->
            <!--Slides-->
            <div class="carousel-inner" role="listbox">
                <!--First slide-->
                <div class="carousel-item active">
                    <div class="carousel-caption">
                        <h3 style=" color: black; font-size: 300%"><strong>Bienvenue sur le site de New World!</strong></h3><h4 style="margin-bottom: 60%; color:black">Site de redistribution de produit entre Producteur et particulier</h4>
                    </div>
                    <img class="d-block w-100" height="585" src="./image/backgroung.jpg" alt="First slide">
                   
                </div>
                <!--/First slide-->
                <!--Second slide-->
                <div class="carousel-item">
                    <div class="carousel-caption">
                        <h4 style="margin-bottom: 60%; color: black; font-size: 300%">De nombreux produits frais de votre region a portée de mains!</h4>
                    </div>
                    <img class="d-block w-100"  height="585" src="./image/fruit.jpg" alt="Second slide">
                </div>
                <!--/Second slide-->
                <!--Third slide-->
                <div class="carousel-item">
                    <div class="carousel-caption">
                        <h4 style="margin-bottom: 4 0%;margin-left: 50%; color: black; font-size: 300%">Avec de nombreux producteurs pour vous servir !</h4>
                    </div>
                    <img class="d-block w-100"  height="585" src="./image/papy.jpg" alt="Third slide">
                </div>
                <!--/Third slide-->
            </div>
            <!--/.Slides-->
            <!--Controls-->
            <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            <!--/.Controls-->
        </div>
        <!--/.Carousel Wrapper-->
    </div>

    <section class="form-elegant" ">
    <!--Form without header-->
        <div class="card" style="width: 49%; height: 585px; margin-top: 1%; margin-left: 1%; margin-right: 1%"  style="float: left">
            <?php
            if(!isset($_SESSION['id']))
            {
            ?>

            <div class="card-body mx-4" id="connecter" >

                <!--Header-->
                <div class="text-center">
                    <h3 class="dark-grey-text mb-5"><strong>Se Connecter:</strong></h3>
                </div>

                <!--Body-->
                <div class="md-form">
                    <input type="text" id="Form-email1" class="form-control">
                    <label for="Form-email1">Votre email:</label>
                </div>

                <div class="md-form pb-3">
                    <input type="password" id="Form-pass1" class="form-control">
                    <label for="Form-pass1">Votre mot de passe:</label>
                    <p class="font-small blue-text d-flex justify-content-end"> <a href="#" class="blue-text ml-1"> Mot de passe oublié?</a></p>
                </div>
                    <div class="text-center mb-3">
                    <button type="button" class="btn blue-gradient btn-block btn-rounded z-depth-1a indigo" >Connecter</button>
                </div>
                    <p class="font-small dark-grey-text text-right d-flex justify-content-center mb-3 pt-2"> Se connecter avec:</p>

                <div class="row my-3 d-flex justify-content-center">
                    <!--Facebook-->
                    <a href="" > <img src="./image/facebook.jpeg" style="max-width: 50px; max-height: 50px;" ></a> 
                    <!--Twitter-->
                    <a href="" > <img src="./image/twiter.jpeg" style="max-width: 50px; max-height: 50px;" ></a>
                    <!--Google +-->
                    <a href="" > <img src="./image/google.png" style="max-width: 50px; max-height: 50px;" ></a>
                </div> 
                <!--Footer-->
                <div class="modal-footer mx-5 pt-3 mb-1">
                    <p class="font-small grey-text d-flex justify-content-end"><a href="#" class="blue-text ml-1" onclick="inscription()"> Pas encore inscrit ? Inscrit toi ici !</a></p>
                </div>
            </div>
            <?

            } 
            else 
            {
            ?> 
            <!--Card-->
            <div class="card testimonial-card">

                <!--Bacground color-->
                <div class="card-up indigo lighten-1">
                </div>

                <!--Avatar-->
                <div class="avatar"><img src="https://mdbootstrap.com/img/Photos/Avatars/img%20%2810%29.jpg" class="rounded-circle">
                </div>

                <div class="card-body">
                <!--Name-->
                <h4 class="card-title">nom+prenom</h4>
                <hr>
                <!--Quotation-->
                <p><i class="fa fa-quote-left"></i> info perso</p>
                </div>

            </div>
            <!--/.Card-->
            <?
            }
            ?>
        </div>
    <!--/Form without header-->
    </div>
    </section>      
          
</div>

<div style="display: none;" id="inscription" >
    <!-- Form register -->
    <form>
        <p class="h5 text-center mb-4">Inscription</p>

        <div class="md-form">
            <i class="fa fa-user prefix grey-text"></i>
            <input type="text" id="nom" class="form-control">
            <label for="orangeForm-name">Nom: </label>
        </div>
        <div class="md-form">
            <i class="fa fa-user prefix grey-text"></i>
            <input type="text" id="prenom" class="form-control">
            <label for="orangeForm-name">Prenom: </label>
        </div>

        <div class="md-form">
            <i class="fa fa-envelope prefix grey-text"></i>
            <input type="text" id="email" class="form-control">
            <label for="orangeForm-email">Email: </label>
        </div>

        <div class="md-form">
            <i class="fa fa-lock prefix grey-text"></i>
            <input type="password" id="mdp" class="form-control">
            <label for="orangeForm-pass">Mot de passe: </label>
        </div>
        <div class="md-form">
            <i class="fa fa-lock prefix grey-text"></i>
            <input type="password" id="conf-mdp" class="form-control">
            <label for="orangeForm-pass">Confirmer mot de passe: </label>
        </div>

        <div class="text-center">
            <button class="btn btn-deep-orange indigo">S'inscrire!</button>
        </div>
    </form>
    <!-- Form register -->
</div>

