<?php

        require("class.user2.php");
        require("class.pdofactory.php");

        print "Running...<br />";

        $strDSN = "pgsql:dbname=postgres;host=localhost;port=5432";
        $objPDO = PDOFactory::GetPDO($strDSN, "postgres", "postgres",array());
        $objPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $objUser = new User($objPDO);
        $objUser2 = new User($objPDO);
        $objUser3 = new User($objPDO);
        $objUser4 = new User($objPDO);


        $objUser->setFirstName("Steve");
        $objUser->setLastName("Nowicki");
        $objUser->setDateAccountCreated(date("Y-m-d"));

        $objUser2->setFirstName("Adria");
        $objUser2->setLastName("Fuentes");
        $objUser2->setDateAccountCreated(date("Y-m-d"));

        $objUser3->setFirstName("Raul");
        $objUser3->setLastName("Sanchez");
        $objUser3->setDateAccountCreated(date("Y-m-d"));

        $objUser4->setFirstName("Jesus");
        $objUser4->setLastName("Meriel");
        $objUser4->setDateAccountCreated(date("Y-m-d"));

        print "First name is " . $objUser->getFirstName() . "<br />";
        print "Last name is " . $objUser->getLastName() . "<br />";

        print "First name is " . $objUser2->getFirstName() . "<br />";
        print "Last name is " . $objUser2->getLastName() . "<br />";

        print "First name is " . $objUser3->getFirstName() . "<br />";
        print "Last name is " . $objUser3->getLastName() . "<br />";

        print "First name is " . $objUser4->getFirstName() . "<br />";
        print "Last name is " . $objUser4->getLastName() . "<br />";


        print "Saving...<br />";

        $objUser->Save();
        $objUser2->Save();
        $objUser3->Save();
        $objUser4->Save();

        print "ID in database is " . $objUser->getID() . "<br />";

        print "ID in database is " . $objUser2->getID() . "<br />";

        print "ID in database is " . $objUser3->getID() . "<br />";

        print "ID in database is " . $objUser4->getID() . "<br />";


?>
