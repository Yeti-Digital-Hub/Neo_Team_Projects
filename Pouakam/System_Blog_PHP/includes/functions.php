<?php

    /**
     * verifie si un champs à été rempli
     * @param string $data
     * @return string retourne le chaine qui à été entrez
     */
    function verify_empty($data)
    {
        if(isset($data))
        {
            if(!empty($data))
            {
                return $data;
            }
        }
    }
    /**
     * elle va securiser le données entrez dans les champs
     *@param string $data
     * @return string retourne le chaine déjà sécuriser
     */
    function security_str($data)
    {
        $data = verify_empty($data);
        $data = htmlspecialchars($data);
        $data = stripslashes($data);
        return $data;
    }