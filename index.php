
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
