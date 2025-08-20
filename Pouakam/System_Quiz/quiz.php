<?php

    // fichier lier au debugage
    require_once '../Debug.php';

    // array_multidimentionnel contenant les data sur chaque questions
    $questions =
        [
            [
                "question" => "1) Quelle est la capitale du Cameroun ?",
                "answers" => [ "a) Douala", "b)Yaoundé", "c) Garoua" ],
                "true_answer" => "b"
            ],
            [
                "question" => "2) Quel langage est utilisé principalement côté serveur ?",
                "answers" => [ "a) CSS", "b)HTML", "c) PHP" ],
                "true_answer" => "c"
            ],
            [
                "question" => "3) Quelle extension correspond aux fichiers PHP ?",
                "answers" => [ "a) .html", "b) .php", "c) .js" ],
                "true_answer" => "b"
            ],
            [
                "question" => "4) Dans quelle année PHP a été créé ?",
                "answers" => ["a) 1995", "b) 2001", "c) 2010" ],
                "true_answer" => "a"
            ],
            [
                "question" => "5) Quel mot-clé est utilisé pour afficher du texte en PHP ?",
                "answers" => ["a) echo", "b) printText", "c)Show"],
                "true_answer" => "a"
            ],
            [
                "question" => "6) Quel est le rôle du HTML ?",
                "answers" => ["a) Styliser les pages", "b) Structurer le contenu", "c) Gérer les bases de données"],
                "true_answer" => "b"
            ],
            [
                "question" => "7) Quel langage permet de styliser une page web ?",
                "answers" => ["a) JavaScript", "b) PHP", "c) CSS"],
                "true_answer" => "c"
            ],
            [
                "question" => "8) Que signifie `SQL` ?",
                "answers" => [ "a) Structured Query Language", "b) Simple Question Logic", "c) Simple Question Logic" ],
                "true_answer" => "a"
            ],
            [
                "question" => "9) Quelle balise HTML permet d’afficher un titre ?",
                "answers" => [ "a) <h1>", "b) <p>", "c) <div>" ],
                "true_answer" => "a"
            ],
            [
                "question" => "10) Quel framework PHP est très populaire ?",
                "answers" => [ "a) React", "b) Laravel", "c) Django" ],
                "true_answer" => "b"
            ]
        ];

        echo "\n\nPetit test de quiz de 10 questions\n\n\n";

        // logic du quiz
        $total = count($questions);
        $score = 0;

        foreach($questions as $values)
        {
            echo $values['question']."\n";

            //answers possibles
            foreach($values['answers'] as $answers)
            {
                echo $answers."\n";
            }

            // answer user
            $answersUsers = strtolower(readline("Saisissez votre réponse ici : "));

            echo "\n";

            if($answersUsers == strtolower($values['true_answer']))
            {
                echo "✅ Bonne réponse !\n";
                $score++;
            }
            else
            {
                echo "❌ Mauvaise réponse. La bonne était ".strtolower($values['true_answer'])."\n";
            }
        }

        // Résultat final
        echo "\n--- Résultats ---\n\n";
        echo "Score : ". $score ."/" .$total."\n";