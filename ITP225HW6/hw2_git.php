<?php

// this function hashes the phrase using "md5"
function hashMd5($phrase) {
    // Trim spaces from left and right, convert to lowercase, and then hash
    $trimmedLowerCasePhrase = strtolower(trim($phrase));
    return md5($trimmedLowerCasePhrase);
}

// Function to hash the phrase using "sha1"
function hashSha1($phrase) {
    // Trim spaces from left and right, convert to lowercase, and then hash
    $trimmedLowerCasePhrase = strtolower(trim($phrase));
    return sha1($trimmedLowerCasePhrase);
}


// User chooses the hash type
echo "Type you hashing method of choice (md5 or sha1): ";
$hashType = readline();

// Validate the chosen hash type
if ($hashType !== 'md5' && $hashType !== 'sha1') {
    echo "Invalid hash type! It must be either 'md5' or 'sha1'";
    exit();
}

// User enters the phrase
echo "Enter the phrase to hash: ";
$phrase = readline();

// Choose the appropriate hashing function based on input
if ($hashType === 'md5') {
    $hashedValue = hashMd5($phrase);
} else {
    $hashedValue = hashSha1($phrase);
}

// Output the hashed value
echo "Hashed value: " . $hashedValue;

?>