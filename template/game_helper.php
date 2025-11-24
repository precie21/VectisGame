<?php
include 'dbconfig.php';

function getAllGames()
{
    global $conn;

    $sql = "SELECT 
            g.game_id,
            g.game_name,
            g.game_price,
            g.pegi_rating,
            g.description,
            g.full_description,
            g.image_url,
            g.tag,
            ge.genre_name
            FROM GAME g
            JOIN GENRE ge ON g.genre_id = ge.genre_id
            ORDER BY g.game_id ASC";

    $result = $conn->query($sql);

    if (!$result) {
        die("Error: " . $conn->error);
    }

    $games = [];
    while ($row = $result->fetch_assoc()) {
        $games[] = $row;
    }

    return $games;
}

function getGameById($gameId)
{
    global $conn;

    $sql = "SELECT 
            g.game_id,
            g.game_name,
            g.game_price,
            g.pegi_rating,
            g.description,
            g.full_description,
            g.image_url,
            g.tag,
            ge.genre_name
            FROM GAME g
            JOIN GENRE ge ON g.genre_id = ge.genre_id
            WHERE g.game_id = " . intval($gameId);

    $result = $conn->query($sql);

    if (!$result) {
        die("Error: " . $conn->error);
    }

    return $result->fetch_assoc();
}

?>