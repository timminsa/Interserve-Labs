<?php

define("DB_HOST", "127.0.0.1");
define("DB_NAME", "interser_live");
define("DB_USER", "interser_live");
define("DB_PASS", "S4msung1!");

function PostLoop($table) {



    try {
        $dbh = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8', DB_USER, DB_PASS);

        foreach ($dbh->query('SELECT * from '.$table) as $row) {

            echo '<div class="uk-grid" data-uk-grid-margin="10">';
            echo '<div class="uk-width-medium-1-1">';
            echo '<div class="uk-panel uk-panel-box">';
            echo '<p><strong>' . $row['heading'] . ':</strong> ' . $row['subheading'] . '<a class="uk-button uk-button-primary uk-margin-left uk-float-right" href="/'.$table.'.php?id=' . $row[$table.'_id'] . '">More Info...</a></p>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
        $dbh = null;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }
    return true;
}

function Post($table,$id) {



    try {
        $dbh = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8', DB_USER, DB_PASS);

        foreach ($dbh->query('SELECT * from '.$table.' where '.$table.'_id = ' . $id) as $row) {

            echo '<div class="uk-grid" data-uk-grid-margin="10">';
            echo '<div class="uk-width-medium-1-1">';
            echo '<h2 class="uk-h2">' . $row['heading'] . '</h2>';
            echo '<p>' . $row['subheading'] . '</p>';
            echo '<hr class="uk-grid-divider">';
            echo '<div class="uk-width-medium-1-1">';
            echo '<p>' . $row['content'] . '</p>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
        $dbh = null;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }

    return true;
}
