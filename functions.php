<?php

declare(strict_types=1);

function Sortbydate(array $a, array $b): int
{
    return strtotime($b["published"]) <=> strtotime($a["published"]);
}
// ^ Sorts the date of the articles
