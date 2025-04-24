<?php
// Declaration of variables
$sessionId = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];
$phoneNumber = $_POST["phoneNumber"];
$text = $_POST["text"];

// first stage of the application
if ($text == "") {
    // display available response
    $response = "CON What would you want to do?\n";
    $response .= "1. Check Program Details\n";
    $response .= "2. Check Phone Number";

} elseif ($text == "1") {
    // first option responses
    $response = "CON Which Program Details do you want to view?\n";
    $response .= "1. Wedding Program Outline\n";
    $response .= "2. Wedding Donation Account";

} elseif ($text == "2") {
    // For option 2 which terminates the session
    $response = "END Phone Number is " . $phoneNumber;

} elseif ($text == "1*1") {
    // Program Details
    $ProgramDetails = "Opening Prayer - John Mensah\n"
        . "Praise - Dcn. Bernard\n"
        . "Sermon - Ps Solomon\n"
        . "Vow - Ps Erice\n"
        . "Benediction - Aps Emmanuel.";

    // terminal response
    $response = "END The Wedding Program Outline is:\n" . $ProgramDetails;

} elseif ($text == "1*2") {
    // Donation Account
    $DonationAccount = "GCB: 717102154659878\n"
        . "Momo: 0241137291\n"
        . "Name: Elder Agyei Ventures";

    // terminal response
    $response = "END The Donation Account Details are:\n" . $DonationAccount;
    
} else {
    // Fallback for unexpected input
    $response = "END Invalid input. Please try again.";
}

// echo the response to the user
header('Content-type: text/plain');
echo $response;
?>
