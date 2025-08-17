<?php

    //recuperation de tous les articles en bd

    $postsArticles = json_decode(file_get_contents(('data/db_articles.json')), true);

    $postsByDate = array_reverse($postsArticles, true);
