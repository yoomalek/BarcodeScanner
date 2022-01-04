<?php

function getAll($tbname)
{
    global $conn;

    $query = "SELECT * FROM " . $tbname. " ORDER BY id DESC";
    $result = pg_query($conn, $query);

    if (!$result) {
        echo "Error when mining data!";
        exit;
    }

    while ($row = pg_fetch_assoc($result)) {
        $results[] = $row;
    }

    return $results;
}

function getById($id)
{
    global $conn;

    $query = "SELECT * FROM test WHERE id = " . $id;
    $result = pg_query($conn, $query);

    if (!$result) {
        return "Error when mining data!";
    }

    while ($row = pg_fetch_assoc($result)) {
        $results[] = $row;
    }

    return $results[0];
}

function insert($data)
{
    global $conn;

    // $mine_result = $data['mine_result'];
    $mine_color = $data['barcode'];
    $date = $data['volt'];
    $owner = $data['resistance'];

    $query = "INSERT INTO test(barcode,volt,resistance) VALUES('$mine_color','$date','$owner')";

    $insert = pg_query($conn, $query);

    return pg_affected_rows($insert);
}

function update($data)
{
    global $conn;

    // $mine_result = $data['mine_result'];
    $mine_color = $data['barcode'];
    $date = $data['volt'];
    $owner = $data['resistance'];
    $id = $data['id'];

    $query = "UPDATE test SET
        -- mine_result = '$mine_result',
        barcode = '$mine_color',
        volt = '$date',
        resistance = '$owner'
        WHERE id = $id";

    $insert = pg_query($conn, $query);

    return pg_affected_rows($insert);
}

function delete($id)
{
    global $conn;
    $query = "DELETE FROM test WHERE id =" . $id;
    $delete = pg_query($conn, $query);

    return pg_affected_rows($delete);
}
