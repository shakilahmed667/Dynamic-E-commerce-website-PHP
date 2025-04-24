<?php
include_once('./stripe/init.php');

$publishableKey="pk_test_51QNoEnGSmwkOpdfstagWTUcgWKP24dWyymXHKWdaxxh0OYvYvkNPgcBKHFfkcKGigJW65Qb2mkOAD3byAx7wfTYH00Jg3cW2xk";

$secretKey="sk_test_51QNoEnGSmwkOpdfsgSql8hkMjMSszv8A3RXjLpz9GKGJrRmg0VFK7TtMKvH7PtootShtPlPcLO0TBJuslqrUzwib00e3vIF1WS";

\Stripe\Stripe::setApiKey($secretKey);
?>
