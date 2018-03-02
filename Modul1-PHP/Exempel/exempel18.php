<h1>Skicka e-post via PHP</h1>
<p>OBS! Vi behöver en mail-server</p>

<?php

    mail("tobias.hedkvist@hotmail.com", "Hej från Backend", 
    "Detta är bara ett testmeddelande", "From: name@example.com");

?>