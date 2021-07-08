<!DOCTYPE html>
<html lang="en-GB">

<head>

    <title>Reasonable passwords</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- millipedia made this -->
    <link rel="author" href="https://millipedia.com/humans.txt" />

    <meta http-equiv="Content-Security-Policy" content=" default-src  'self'; font-src 'self'; style-src 'self' 'unsafe-inline'; script-src 'self' ; img-src * data: ;">
    <link rel="stylesheet" href="millco_base.css" />

</head>

<body>

    <div class="container pt-1">

        <h1>Reasonable passwords</h1>

        <div class="row">

            <?php

            $html_flag = 1;

            if (isset($_REQUEST['required_entries']) && $_REQUEST['required_entries'] > 0 && $_REQUEST['required_entries'] < 251) {
                $required_entries = (int)$_REQUEST['required_entries'];
            } else {
                $required_entries = 25;
            }

            if (isset($_REQUEST['no_of_words_in_passphrase']) && $_REQUEST['no_of_words_in_passphrase'] > 0 && $_REQUEST['no_of_words_in_passphrase'] < 10) {
                $no_of_words_in_passphrase = (int)$_REQUEST['no_of_words_in_passphrase'];
            } else {
                $no_of_words_in_passphrase = 4;
            }

            echo '<div class="col-7 pr-1" >';
            require('dice.php');
            echo '</div>';


            echo '<div class="col-5">';
            ?>

            <div class="alert">
                I needed a big list of reasonable passwords that matched the password requirements for ProcessWire. It's probably not for you if you're a secret government agency but actually it's been very handy.
            </div>

            <?php
            echo '<form>';
            echo '<label for="required_entries">Number of entries</label>';
            echo '<input id="required_entries" name="required_entries" type="number" value="' . $required_entries . '" max="250" min="1"/>';
            echo '<label for="no_of_words_in_passphrase">Number of words in passphrase</label>';
            echo '<input id="no_of_words_in_passphrase" name="no_of_words_in_passphrase" type="number" value="' . $no_of_words_in_passphrase . '" max="10" min="3"/>';
            echo '<button type="submit">Go</button>';
            echo '</form>';

            echo '</div>';

            ?>
        </div>

        <div style="padding:4rem" class="text-center"><a href="https://millipedia.com">millipedia.com</a></div>
    </div>
</body>