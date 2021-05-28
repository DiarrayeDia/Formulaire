<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amazin Formulaire</title>

    <link rel="stylesheet" href="skeleton.css">
    <link rel="stylesheet" href="https://bootswatch.com/5/sandstone/bootstrap.min.css">
</head>

<body>
    <div>
        <form>
            <fieldset>
                <legend>Formulaire de Satisfaction</legend>

                <!-- Informations personnelles -->
                <div class="form-group">
                    <label for="lname" class="form-label mt-4">Nom</label>
                    <input type="text" class="form-control" id="lname" placeholder="Dupont">
                </div>

                <div class="form-group">
                    <label for="fname" class="form-label mt-4">Prénom</label>
                    <input type="text" class="form-control" id="fname" placeholder="Pierre">
                </div>

                <div class="form-group">
                    <label for="phone" class="form-label mt-4">Numéro de téléphone</label>
                    <input type="tel" class="form-control" id="phone" name="phone" pattern="[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}" placeholder="0678899000">
                </div>

                <!-- Questions sur l'accueil -->
                <div class="form-group">
                    <label for="question1" class="form-label mt-4">L'agent a-t-il été agréable ?</label>
                    <select class="form-select" id="question1">
                        <option>Oui</option>
                        <option>Non</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="question1" class="form-label mt-4">L'agent a-t-il compris votre problème ?</label>
                    <select class="form-select" id="question1">
                        <option>Oui</option>
                        <option>Non</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="question1" class="form-label mt-4">L'agent a-t-il résolu votre problème ?</label>
                    <select class="form-select" id="question1">
                        <option>Oui</option>
                        <option>Non</option>
                    </select>
                </div>

                <!-- Question libre -->
                <div class="form-group">
                    <label for="exampleTextarea" class="form-label mt-4">Dites-nous en plus</label>
                    <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
                </div>
                <!-- Rappel du client -->
                <fieldset class="form-group">
                    <legend class="form-label mt-4">Acceptez-vous d'être rappelé ?</legend>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Cochez la case si Oui
                        </label>
                    </div>
                </fieldset>
                <label for="button" class="form-label mt-4">Cliquez sur le bouton "Valider" pour envoyer votre formulaire :</label><br>
                <a href="" role="button" class="btn btn-success">Valider</a>
            </fieldset>
        </form>
    </div>
</body>

</html>