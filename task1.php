<?php

$emails = [
    "test.mail@mail.com",
    "abc-mail@host.ua",
    "user@site.net",
    "nomail@gmail.coma",
    "-mnk@mail.com",
    "mail@mail@mail.com",
    "mail*tt@mail.com",
];
$correctEmails = [];
$incorrectEmails = [];
foreach ($emails as $key => $email) {
    preg_match('/^[^-][a-zA-Z0-9_\.-]+@[a-zA-Z]+(\.com|\.ua|\.net)$/', $email, $matches);
    if (!empty($matches[0])) {
        $correctEmails[] = $email;
    } else {
        $incorrectEmails[] = $email;
    }
}

$incorrectEmails = "Incorrect emails:\n" . implode("\n", $incorrectEmails);
$correctEmails = "Correct emails:\n" . implode("\n", $correctEmails);
echo $correctEmails ."\n\n" .$incorrectEmails;
