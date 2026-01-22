<?php

    /**
     * filter enter of user
     *
     * @param  string $data enter of user
     * @return string $data enter of user filter
     */
    function filter_data($data) {
        $data = htmlspecialchars($data);
        $data = stripslashes($data);
        $data = trim($data);

        return $data;
    }