<?php 

    /**
     *  ce script permet de recuperer au hasard un caractère dans une chaine entrez en paramètre
     * @param string $str chaine donc on veut le caractère
     * @return string retourne un caractère aléatoire de la chaine
     */
    function get_characters($str)
    {
        $randomIndex = random_int(0, strlen($str) - 1);
        return $str[$randomIndex];
    }

    if($_SERVER['REQUEST_METHOD'] === 'POST')
    {

        switch($_POST['length'])
        {
            case 4 : 

                /**
                 * Block de la logique en fonction des options(Lowercase, Uppercase, Number et Specialcharacter) lorsque length_password = 4
                 */
                require_once 'includes/switch_case_4.php';

            break;

            case 6 :

                /**
                 * Block de la logique en fonction des options(Lowercase, Uppercase, Number et Specialcharacter) lorsque length_password = 6
                 */
                require_once 'includes/switch_case_6.php';

            break;

            case 8 :

                /**
                 * Block de la logique en fonction des options(Lowercase, Uppercase, Number et Specialcharacter) lorsque length_password = 8
                 */
                require_once 'includes/switch_case_8.php';

            break;
        }

    }