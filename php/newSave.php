<?php
    if (isset($_POST['txtInput']) && isset($_POST['cmbTextType']) && isset($_POST['cmbTextExpiration']) && isset($_POST['cmbHighlight']))
    {
        require("_func.php");
        require("_connect.php");

        $input = $_POST['txtInput'];
        $cmbTextType = $_POST['cmbTextType'];
        $cmbTextExpiration = $_POST['cmbTextExpiration'];
        $cmbTextHighlight = $_POST['cmbHighlight'];

        if (strlen($input) <= 0)
            die("Invalid text length");

        // if ($cmbTextType != "Public" || $cmbTextType !="Private")
        //     die("Invalid text type.");

        if ($cmbTextExpiration == "none")
            $cmbTextExpiration = -1;

        if (!is_int($cmbTextExpiration))
            die("Invalid Text Expiration");

        // if (!in_array($cmbTextExpiration, getLangs()))
        //     die("Invalid Syntax");

        $textUUID = GenerateID();

        $IP = GetIP();

        $SQL = "INSERT INTO `texts` (`textUUID`, `data`, `visibility`, `expiration`, `IP`, `syntax`, `TIMESTAMP`) VALUES (?, ?, ?, ?, ?, ?, current_timestamp())";
        
        $stmt = mysqli_prepare($connect, $SQL);
        $type = ($cmbTextType == "public" ? 1 : 0);
        mysqli_stmt_bind_param($stmt, 'ssssss', $textUUID, $input, $type, $cmbTextExpiration, $IP, $cmbTextHighlight );

        if ($stmt->execute())
            die("true");
        else
            die("Error");

    }
    else{
        die("Missing");
    }
?>