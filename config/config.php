<?php
session_start();
// Database
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'masterpiece';

$conn = mysqli_connect($host, $user, $password, $dbname);


// query
function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

// Jumlah Data
function rows($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = mysqli_num_rows($result);
    return $rows;
}

// Data tiket
function tambahTiket($data)
{
    global $conn;

    $email = $data["email"];
    $nama = $data["nama"];
    $nik = $data["nik"];
    $instansi = $data["instansi"];
    $lomba = $data["lomba"];

    $query = "INSERT INTO tiket
                VALUES
                ('', '$email','$nama',
            '$nik','$instansi','$lomba')
            ";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function updateTiket($data)
{
    global $conn;

    $id = $data["id"];
    $email = $data["email"];
    $nama = $data["nama"];
    $nik = $data["nik"];
    $instansi = $data["instansi"];
    $lomba = $data["lomba"];

    $query = "UPDATE tiket SET
                email = '$email',
                nama = '$nama',
                nik = '$nik',
                instansi = '$instansi',
                lomba = '$lomba'
                WHERE kode_tiket = $id
            ";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function hapusTiket($id)
{
    global $conn;

    mysqli_query($conn, "DELETE FROM tiket WHERE kode_tiket = $id");
    return mysqli_affected_rows($conn);
}

// Users

function tambahUser($data)
{
    global $conn;
    $name = $data["name"];
    $email = stripslashes($data["email"]);
    $password = password_hash($data["password"], PASSWORD_DEFAULT);
    $alamat = $data["alamat"];
    $roles = $data["roles"];

    $query = "INSERT INTO users
                VALUES
                ('', '$name', '$email', '$password', '$alamat', '$roles')
            ";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function updateUser($data)
{
    global $conn;
    $id = $data["id"];
    $result = query("SELECT password FROM users WHERE id_user = $id")[0];
    $name = $data["name"];
    if (empty($data["password"])) {
        $password = $result["password"];
    } else {
        $password = password_hash($data["password"], PASSWORD_DEFAULT);
    }
    $alamat = $data["alamat"];
    $code = $data["code"];
    $roles = $data["roles"];

    $query = "UPDATE users SET
                name = '$name',
                password = '$password',
                address = '$alamat',
                roles = '$roles'
                WHERE id_user = $id
            ";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function hapusUser($id)
{
    global $conn;

    mysqli_query($conn, "DELETE FROM users WHERE id_user = $id");
    return mysqli_affected_rows($conn);
}





