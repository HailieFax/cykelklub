    <?php
        $kontakt_mail = get_field('kontakt_mail');

        if ( !empty($kontakt_mail)){
        echo '
            <div class="kontakt__container">
                <form id="kontakt__form" action="" method="post">
                    <input type="text" name="navn" placeholder="Navn">
                    <input type="email" name="email" placeholder="E-mail">
                    <input type="text" name="emne" placeholder="Emne">
                    <textarea name="besked" placeholder="Meddelse"></textarea>
                    <input class="btn" type="submit" name="submit" value="Send">
                </form>    
            </div>';
        }
    
        $til = $kontakt_mail; // Dette er din mail
        $fra = $_POST['email']; // Afsenders email
        $navn = $_POST['navn']; // Afsenders navn
        $besked = $_POST['besked']; // Afsenders besked
        $emne = "Mail fra website";
        $emne2 = "Kopi af din mail til Nr. Søby Cykelklub";
        $besked = $navn . " skrev følgende:" . "\n\n" . $besked;
        $besked2 = "Her er en kopi af din besked " . $navn . "\n\n" . $besked;

        $headers = "Fra:" . $fra;
        $headers2 = "Fra:" . $til;
        mail($til,$emne,$besked,$headers);
        mail($fra,$emne2,$besked2,$headers2); // Sender en kopi af mailen til afsender, som en form for bekræftelse.
        
    ?>