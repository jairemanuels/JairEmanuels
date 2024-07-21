<?php

//Functie voor het ophalen van het aantal users van de TechTraject server
function getDiscordUserAmount()
{
    $inviteUrl = "https://discord.com/api/v10/invites/jsz7uV4JMz?with_counts=true&with_expiration=true";

    $json = file_get_contents($inviteUrl);

    $data = json_decode($json);

    return $data->approximate_member_count;
}

function getYoutubeSubAmount()
{

    $json = file_get_contents("https://www.googleapis.com/youtube/v3/channels?part=statistics&id=jairemanuels&key=AIzaSyBo4zYbLkJ8ot55MF3eQh2rgif2HwUdOl4");

    $data = json_decode($json);

    return $data->approximate_member_count;
}


