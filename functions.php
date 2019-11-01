<?php

declare(strict_types=1);

function Sortbydate(array $a, array $b): int
{
    return strtotime($a["published"]) <=> strtotime($b["published"]);
}
// ^ Sorts the date of the articles