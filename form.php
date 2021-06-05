<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Formulaire de satisfaction Amazin</title>
    <link rel="stylesheet" href="https://bootswatch.com/5/lumen/bootstrap.min.css">
</head>

<body>

    <div class="container">

        <h1> Amazin</h1>

        <form class="mb-5" method="POST" action="index.php">
            <fieldset>
                <legend>Formulaire de satisfaction</legend>

                <!-- Personal information -->
                <div class="form-group">
                    <label for="lastname" class="form-label mt-4">Nom : </label>
                    <input type="text" name="lastname" class="form-control" id="lastname" aria-describedby="lastnameHelp" placeholder="Entrez votre nom" value="<?= isset($_POST['lastname']) ? $_POST['lastname'] : '' ?>" required="">
                    <small class="form-text text-muted"><?php if (isset($error['lastname'])) echo $error['lastname'] ?></small>
                </div>

                <div class="form-group">
                    <label for="firstname" class="form-label mt-4">Prénom : </label>
                    <input type="text" name="firstname" class="form-control" id="firstname" aria-describedby="firstnameHelp" placeholder="Entrez votre prénom" value="<?= isset($_POST['firstname']) ? $_POST['firstname'] : '' ?>" required="">
                    <small class="form-text text-muted"><?php if (isset($error['firstname'])) echo $error['firstname'] ?></small>
                </div>

                <div class="form-group">
                    <label for="phone" class="form-label mt-4">Numéro de téléphone : </label>
                    <input type="tel" name="phone" class="form-control" id="phone" aria-describedby="phoneHelp" placeholder="0123456789" value="<?= isset($_POST['phone']) ? $_POST['phone'] : '' ?>" required="">
                    <small class="form-text text-muted"><?php if (isset($error['phone'])) echo $error['phone'] ?></small>
                </div>

                <div class="form-group">
                    <label for="date" class="form-label mt-4">Date d'achat : </label>
                    <input type="date" name="date" class="form-control" id="date" aria-describedby="dateHelp" placeholder="01/01/2021" value="<?= isset($_POST['date']) ? $_POST['date'] : '' ?>">
                </div>

                <!-- Questions  -->
                <legend class="mt-4">L'agent a-t-il été agréable ?</legend>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="question1" id="optionsRadios1" value="2" required="" <?= isset($_POST['question1']) && $_POST['question1'] === '2' ? 'checked' : "" ?>> <!-- adds 2 points to the rating-->
                        Oui
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="question1" id="optionsRadios2" value="0" required="" <?= isset($_POST['question1']) && $_POST['question1'] === '0' ? 'checked' : "" ?>> <!-- adds  no point to the rating-->
                        non </label>
                </div>
                <div class="form-check-label">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="question1" id="optionsRadios3" value="1" required="" <?= isset($_POST['question1']) && $_POST['question1'] === '1' ? 'checked' : "" ?>> <!-- adds 1point to the rating-->
                        sans avis
                    </label>
                </div>
                <legend class="mt-4">L'agent a-t-il compris votre problème</legend>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="question2" id="optionsRadios1" value="2" required="" <?= isset($_POST['question2']) && $_POST['question2'] === '2' ? 'checked' : "" ?>> <!-- adds 2 points to the rating-->
                        Oui
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="question2" id="optionsRadios2" value="0" required="" <?= isset($_POST['question2']) && $_POST['question2'] === '0' ? 'checked' : "" ?>> <!-- adds  no point to the rating-->
                        non </label>
                </div>
                <div class="form-check-label">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="question2" id="optionsRadios3" value="1" required="" <?= isset($_POST['question2']) && $_POST['question2'] === '1' ? 'checked' : "" ?>><!-- adds 1point to the rating-->
                        sans avis
                    </label>
                </div>
                <legend class="mt-4">L'agent a-t-il résolu votre problème ?</legend>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="question3" id="optionsRadios1" value="1" required="" <?= isset($_POST['question3']) && $_POST['question3'] === '1' ? 'checked' : "" ?>> <!-- adds 1point to the rating-->
                        Oui
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="question3" id="optionsRadios2" value="-1" required="" <?= isset($_POST['question3']) && $_POST['question3'] === '-1' ? 'checked' : "" ?>> <!-- adds  no point to the rating-->
                        non </label>
                </div>

                <div class="form-group">
                    <label for="message" class="form-label mt-4">Dites-nous en plus : </label>
                    <textarea name="message" class="form-control" id="message" rows="3"><?= isset($_POST['mesage']) ? $_POST['message'] : "" ?></textarea>
                </div>
                <legend class="mt-4">Checkboxes</legend>
                <div class="form-check">
                    <input name="recall" class="form-check-input" type="checkbox" value="true" id="recall" <?= isset($_POST['recall']) ? 'checked' : "" ?>>
                    <label class="form-check-label" for="recall">
                        Cochez-cette case si vous acceptez d'être rappelé.
                    </label>
                </div>
                <button type="submit" class="btn btn-primary mt-5">Submit</button>
            </fieldset>
        </form>



    </div>

</body>

</html>