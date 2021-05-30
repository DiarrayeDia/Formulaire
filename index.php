
        <?php
        // step 0 : A afficher uniquement au chargement de la page 
        if (!$_POST) {
            require 'form.php';
        } else {
            $error = checkForm($_POST);
        }

        if ($error !== []) {
            require 'form.php';
        } else {
            require 'validation_form.php';
        }

        function checkForm(array $post)
        {
            $error = [];
            if ($post['lastname'] === "" || strlen($post['lastname'] < 2)) {
                $error['lastname'] = "Veuillez entrer un nom de famille valide (min 2 lettres) ";
            }

            if ($post['firstname'] === "" || strlen($post['firstname'] < 2)) {
                $error['firstname'] = "Veuillez entrer un prénom valide (min 2 lettres) ";
            }
            return $error;
        }
