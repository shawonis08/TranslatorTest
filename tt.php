<?php
		//Translate API
        require 'vendor/autoload.php';
		use Stichoza\GoogleTranslate\TranslateClient;

        $tr = new TranslateClient(null, 'bn'); 
		$st= $tr->translate("Dakota skippers only spend two weeks as adult butterflies flitting about the prairie, and the rush and excitement of the emergence and release of the adults at Hole-in-the-Mountain is over for the year. We had about three weeks to watch them explore their new home, encounter each other in a natural setting, mate and lay eggs. The eggs hatched this summer, and they will spend the Minnesota winter as caterpillars in homemade grass shelters near the prairie soil. Pretty hardy critters. Now the waiting begins.");
		echo $st;
   

?>