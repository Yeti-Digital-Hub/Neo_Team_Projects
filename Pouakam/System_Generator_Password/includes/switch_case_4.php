            <?php

                /**
                 * Pour le checked du uppercase uniquement
                 */
                if(!empty($_POST['include-uppercase']) AND empty($_POST['include-lowercase']) AND empty($_POST['include-numbers']) AND empty($_POST['include-symbols']))
                {
                    $uppercaseCharacters = 'ABCDEFGHIJKLMNOPQRSTVWXYZ';
                    $password = '';

                    //choisi au hasard un caractère dans la chaine $uppercaseCharacters
                    for($i=0; $i<4; $i++)
                    {
                        $password .= get_characters($uppercaseCharacters);
                    }
                    header('Location: index.php?password='.str_shuffle($password));
                }

                /**
                 * Pour le checked du lowercase uniquement
                 */
                elseif(!empty($_POST['include-lowercase']) AND empty($_POST['include-uppercase']) AND empty($_POST['include-numbers']) AND empty($_POST['include-symbols']))
                {
                    $lowercaseCharacters = 'abcdefghijklmnopqrstvwxyz';
                    $password = '';

                    //choisi au hasard un caractère dans la chaine $lowerCharacters
                    for($i=0; $i<4; $i++)
                    {
                        $password .= get_characters($lowercaseCharacters);
                    }
                    header('Location: index.php?password='.str_shuffle($password));
                }

                /**
                 * Pour le checked du number uniquement
                 */
                elseif(!empty($_POST['include-numbers']) AND empty($_POST['include-uppercase']) AND empty($_POST['include-lowercase']) AND empty($_POST['include-symbols']))
                {
                    $numbers = '0123456789';
                    $password = '';

                    //choisi au hasard un caractère dans la chaine $lowerCharacters
                    for($i=0; $i<4; $i++)
                    {
                        $password .= get_characters($numbers);   
                    }
                    header('Location: index.php?password='.str_shuffle($password));
                }

                /**
                 * Pour le checked du special caracteres uniquement
                 */
                elseif(!empty($_POST['include-symbols']) AND empty($_POST['include-uppercase']) AND empty($_POST['include-numbers']) AND empty($_POST['include-lowercase']))
                {
                    $specialCharacters = '!@$%^*()_-=[]{}';
                    $password = '';

                    //choisi au hasard un caractère dans la chaine $lowerCharacters
                    for($i=0; $i<4; $i++)
                    {
                        $password .= get_characters($specialCharacters);
                    }
                    header('Location: index.php?password='.str_shuffle($password));
                }

                /**
                 * Pour le checked du uppercase et du lowercase uniquement
                 */
                elseif(!empty($_POST['include-uppercase']) AND !empty($_POST['include-lowercase']) AND empty($_POST['include-numbers']) AND empty($_POST['include-symbols']))
                {
                    $uppercaseCharacters = 'ABCDEFGHIJKLMNOPQRSTVWXYZ';
                    $lowercaseCharacters = 'abcdefghijklmnopqrstvwxyz';
                    $characters = $uppercaseCharacters.$lowercaseCharacters;
                    $password = '';

                    // produit une chaine à 2 caractères(un uppercase et un lowercase)
                    $password .=get_characters($uppercaseCharacters);
                    $password .=get_characters($lowercaseCharacters);

                    //permet de completer les deux autre caractères manquants en tirant au hasard 2 caractères dans la chaine $characters
                    for($i=0; $i<2; $i++)
                    {
                        $password .= get_characters($characters);
                    }
                    header('Location: index.php?password='.str_shuffle($password));
                }

                /**
                 * Pour le checked du uppercase et du number uniquement
                 */
                elseif(!empty($_POST['include-uppercase']) AND !empty($_POST['include-numbers']) AND empty($_POST['include-lowercase']) AND empty($_POST['include-symbols']))
                {
                    $uppercaseCharacters = 'ABCDEFGHIJKLMNOPQRSTVWXYZ';
                    $numbers = '0123456789';
                    $characters = $uppercaseCharacters.$numbers;
                    $password = '';

                    // produit une chaine à 2 caractères(un uppercase et un number)
                    $password .= get_characters($uppercaseCharacters);
                    $password .= get_characters($numbers);

                    //permet de completer les deux autre caractères manquants en tirant au hasard 2 caractères dans la chaine $characters
                    for($i=0; $i<2; $i++)
                    {
                        $password .= get_characters($characters);
                    }
                    header('Location: index.php?password='. str_shuffle($password));
                }

                /**
                 * Pour le checked du uppercase et du specialCharacters uniquement
                 */
                elseif(!empty($_POST['include-uppercase']) AND !empty($_POST['include-symbols']) AND empty($_POST['include-lowercase']) AND empty($_POST['include-numbers']))
                {
                    $uppercaseCharacters = 'ABCDEFGHIJKLMNOPQRSTVWXYZ';
                    $specialCharacters = '!@$%^*()_-=[]{}';
                    $characters = $uppercaseCharacters.$specialCharacters;
                    $password = '';

                    // produit une chaine à 2 caractères(un uppercase et un specialCharactère)
                    $password .= get_characters($uppercaseCharacters);
                    $password .= get_characters($specialCharacters);

                    //permet de completer les deux autre caractères manquants en tirant au hasard 2 caractères dans la chaine $characters
                    for($i=0; $i<2; $i++)
                    {
                        $password .= get_characters($characters);
                    }
                    header('Location: index.php?password='. str_shuffle($password));
                }

                /**
                 * Pour le checked du lowercase et du numbers uniquement
                 */
                elseif(!empty($_POST['include-lowercase']) AND !empty($_POST['include-numbers']) AND empty($_POST['include-uppercase']) AND empty($_POST['include-symbols']))
                {
                    $lowercaseCharacters = 'abcdefghijklmnopqrstvwxyz';
                    $numbers = '0123456789';
                    $characters = $lowercaseCharacters.$numbers;
                    $password = '';

                    // produit une chaine à 2 caractères(un lowercase et un number)
                    $password .= get_characters($lowercaseCharacters);
                    $password .= get_characters($numbers);

                    //permet de completer les deux autre caractères manquants en tirant au hasard 2 caractères dans la chaine $characters
                    for($i=0; $i<2; $i++)
                    {
                        $password .= get_characters($characters);
                    }
                    header('Location: index.php?password='. str_shuffle($password));
                }

                /**
                 * Pour le checked du lowercase et du specialCharacters uniquement
                 */
                elseif(!empty($_POST['include-lowercase']) AND !empty($_POST['include-symbols']) AND empty($_POST['include-uppercase']) AND empty($_POST['include-numbers']))
                {
                    $lowercaseCharacters = 'abcdefghijklmnopqrstvwxyz';
                    $specialCharacters = '!@$%^*()_-=[]{}';
                    $characters = $lowercaseCharacters.$specialCharacters;
                    $password = '';

                    // produit une chaine à 2 caractères(un lowercase et un specialCharactère)
                    $password .= get_characters($lowercaseCharacters);
                    $password .= get_characters($specialCharacters); 

                    //permet de completer les deux autre caractères manquants en tirant au hasard 2 caractères dans la chaine $characters
                    for($i=0; $i<2; $i++)
                    {
                        $password .= get_characters($characters);
                    }
                    header('Location: index.php?password='. str_shuffle($password));
                }

                /**
                 * Pour le checked du numbers et du specialCharacters uniquement
                 */
                elseif(!empty($_POST['include-numbers']) AND !empty($_POST['include-symbols']) AND empty($_POST['include-uppercase']) AND empty($_POST['include-lowercase']))
                {
                    $numbers = '0123456789';
                    $specialCharacters = '!@$%^*()_-=[]{}';
                    $characters = $numbers.$specialCharacters;
                    $password = '';

                    // produit une chaine à 2 caractères(un lowercase et un specialCharactère)
                    $password .= get_characters($numbers);
                    $password .= get_characters($specialCharacters); 

                    //permet de completer les deux autre caractères manquants en tirant au hasard 2 caractères dans la chaine $characters
                    for($i=0; $i<2; $i++)
                    {
                        $password .= get_characters($characters);
                    }
                    header('Location: index.php?password='. str_shuffle($password));
                }

                /**
                 * Pour le checked du uppercase, lowercase et du number uniquement
                 */
                elseif(!empty($_POST['include-uppercase']) AND !empty($_POST['include-lowercase']) AND !empty($_POST['include-numbers']) AND empty($_POST['include-symbols']))
                {
                    $uppercaseCharacters = 'ABCDEFGHIJKLMNOPQRSTVWXYZ';
                    $lowercaseCharacters = 'abcdefghijklmnopqrstvwxyz';
                    $numbers = '0123456789';
                    $characters = $uppercaseCharacters.$lowercaseCharacters.$numbers;
                    $password = '';

                    // produit une chaine à 3 caractères(un uppercase, un lowercase et un number)
                    $password .= get_characters($uppercaseCharacters);
                    $password .= get_characters($lowercaseCharacters); 
                    $password .= get_characters($numbers);

                    //permet de completer les deux autre caractères manquants en tirant au hasard 1 caractères dans la chaine $characters
                    $password .= get_characters($characters);

                    header('Location: index.php?password='. str_shuffle($password));
                }

                /**
                 * Pour le checked du uppercase, lowercase et du specialCharacters uniquement
                 */
                elseif(!empty($_POST['include-uppercase']) AND !empty($_POST['include-lowercase']) AND !empty($_POST['include-symbols']) AND empty($_POST['include-numbers']))
                {
                    $uppercaseCharacters = 'ABCDEFGHIJKLMNOPQRSTVWXYZ';
                    $lowercaseCharacters = 'abcdefghijklmnopqrstvwxyz';
                    $specialCharacters = '!@$%^*()_-=[]{}';
                    $characters = $uppercaseCharacters.$lowercaseCharacters.$specialCharacters;
                    $password = '';

                    // produit une chaine à 3 caractères(un uppercase, un lowercase et un specialCharactère)
                    $password .= get_characters($uppercaseCharacters);
                    $password .= get_characters($lowercaseCharacters); 
                    $password .= get_characters($specialCharacters);

                    //permet de completer les deux autre caractères manquants en tirant au hasard 1 caractères dans la chaine $characters
                    $password .= get_characters($characters);

                    header('Location: index.php?password='. str_shuffle($password));
                }

                /**
                 * Pour le checked du lowercase, number et du specialCharacters uniquement
                 */
                elseif(!empty($_POST['include-lowercase']) AND !empty($_POST['include-numbers']) AND !empty($_POST['include-symbols']) AND empty($_POST['include-uppercase']))
                {
                    $lowercaseCharacters = 'abcdefghijklmnopqrstvwxyz';
                    $numbers = '0123456789';
                    $specialCharacters = '!@$%^*()_-=[]{}';
                    $characters = $lowercaseCharacters.$numbers.$specialCharacters;
                    $password = '';

                    // produit une chaine à 3 caractères(un lowercase, un number et un specialCharactère)
                    $password .= get_characters($lowercaseCharacters);
                    $password .= get_characters($numbers);
                    $password .= get_characters($specialCharacters);

                    //permet de completer les deux autre caractères manquants en tirant au hasard 1 caractères dans la chaine $characters
                    $password .= get_characters($characters);

                    header('Location: index.php?password='. str_shuffle($password));
                }

                /**
                 * Pour le checked du specialCharacters, number et du uppercase uniquement
                 */
                elseif(!empty($_POST['include-symbols']) AND !empty($_POST['include-numbers']) AND !empty($_POST['include-uppercase']) AND empty($_POST['include-lowercase']))
                {
                    $specialCharacters = '!@$%^*()_-=[]{}';
                    $numbers = '0123456789';
                    $uppercaseCharacters = 'ABCDEFGHIJKLMNOPQRSTVWXYZ';
                    $characters = $uppercaseCharacters.$numbers.$specialCharacters;
                    $password = '';

                    // produit une chaine à 3 caractères(un specialCharacters, un number et un uppercase)
                    $password .= get_characters($specialCharacters);
                    $password .= get_characters($numbers);
                    $password .= get_characters($uppercaseCharacters);

                    //permet de completer les deux autre caractères manquants en tirant au hasard 1 caractères dans la chaine $characters
                    $password .= get_characters($characters);

                    header('Location: index.php?password='. str_shuffle($password));
                }

                /**
                 * Pour le checked du specialCharacters, du number, du uppercase et lowercase
                 */
                elseif(!empty($_POST['include-symbols']) AND !empty($_POST['include-numbers']) AND !empty($_POST['include-uppercase']) AND !empty($_POST['include-lowercase']))
                {
                    $lowercaseCharacters = 'abcdefghijklmnopqrstvwxyz';
                    $specialCharacters = '!@$%^*()_-=[]{}';
                    $numbers = '0123456789';
                    $uppercaseCharacters = 'ABCDEFGHIJKLMNOPQRSTVWXYZ';
                    $password = '';

                    // produit une chaine à 3 caractères(un specialCharacters, un number et un uppercase)
                    $password .= get_characters($specialCharacters);
                    $password .= get_characters($numbers);
                    $password .= get_characters($uppercaseCharacters);
                    $password .= get_characters($lowercaseCharacters);

                    header('Location: index.php?password='. str_shuffle($password));
                }