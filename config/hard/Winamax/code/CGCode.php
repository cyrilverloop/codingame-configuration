<?php
fscanf($stdin, "%d %d", $width, $height);
for ($i = 0; $i < $height; $i++)
{
    fscanf($stdin, "%s", $row);
}