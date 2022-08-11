<?php
//Connet database
 
$conn = mysqli_connect("localhost","root","","db_humanitycare");

function query($query)
{
    global $conn;
   $result = mysqli_query($conn, $query);
   $rows = [];

    while ( $row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;

}

function deleteData($id)
{   
    global $conn;
    mysqli_query($conn, "DELETE FROM tb_users WHERE id = $id");
    return mysqli_affected_rows($conn);
}


function TambahDataUser($data){
    global $conn;

    $username = htmlspecialchars(strtolower(stripslashes($data["username"])));
    $password = mysqli_real_escape_string($conn,$data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);
    $id = htmlspecialchars(strtolower(stripslashes($data["id"])));
    $email = htmlspecialchars(strtolower(stripslashes($data["email"])));
    $nama = htmlspecialchars(strtolower(stripslashes($data["name"])));
    

    //cek username
    $result = mysqli_query($conn,"SELECT username_user FROM tb_users WHERE username_user = '$username'");

    if (mysqli_fetch_assoc($result)){
        echo "<script>
                alert('username sudah terdaftar');
            </script>";
            return false;
    }

    // password sesuai
    if ($password !== $password2) {
        echo "<script>
                  alert('password tidak sesuai');
                </script>";
        return false;
    } 

    // enkripsi
    $password = password_hash($password, PASSWORD_DEFAULT);
    // tambah user
    mysqli_query($conn,"INSERT INTO tb_users
    VALUE ('','$username','$password','$id','$nama','$email')");

    return mysqli_affected_rows($conn);
}


function createDataBerita($data)
{
    global $conn;

    $judul = htmlspecialchars($data["judul"]);
    $kategori = htmlspecialchars($data["kategori"]);
    $waktu = htmlspecialchars($data["waktu"]); 
    $artikel = htmlspecialchars($data["artikel"]);
    $author = htmlspecialchars($data["author"]);
    $gambarberita = uploadBerita();
    if (!$gambarberita) {
        return false;
    }

  
    // masukan data
    $query = "INSERT INTO tb_berita VALUE 
        ('','$judul','$kategori','$waktu','$artikel','$author','$gambarberita')
        ";
        mysqli_query($conn,$query);
        return mysqli_affected_rows($conn);
}


function uploadBerita(){
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    if ($error === 4) {
        echo "<script>
                alert('tambahkan gambar terlebih dahulu');
            </script>";
            return false;
    }

    //cek ekstentsi file gambar agar benar dalam penambahan gambar

    $ekstenPictValid = ['jpg','jpeg','png'];
    $ekstenPict = explode('.',$namaFile);
    $ekstenPict = strtolower(end($ekstenPict));
    if(!in_array($ekstenPict,$ekstenPictValid)){
        echo "<script>
        alert('yang anda upload bukan gambar');
    </script>";
    return false;
    }

    // cek ukuran
    if ($ukuranFile > 1000000) {
        echo "<script>
        alert('ukuran file terlalu besar');
        </script>";
    }

    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru.= $ekstenPict;

    //pengecekan akhir 
    move_uploaded_file($tmpName,'img/berita/'. $namaFileBaru);
    return $namaFileBaru;

}

function deleteBerita($id)
{   
    global $conn;
    mysqli_query($conn, "DELETE FROM tb_berita WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function deleteDonatur($id)
{   
    global $conn;
    mysqli_query($conn, "DELETE FROM tb_donasi WHERE id = $id");
    return mysqli_affected_rows($conn);
}


function updateDataBerita($data)
{
    global $conn;

    $id =  $data["id"];
    $judul = htmlspecialchars($data["judul"]);
    $kategori = htmlspecialchars($data["kategori"]);
    $waktu = htmlspecialchars($data["waktu"]);
    $artikel = htmlspecialchars($data["artikel"]);
    $author = htmlspecialchars($data["author"]);
    $gambarawal = htmlspecialchars($data["gambarawal"]);

    if ($_FILES ['gambar']['error'] === 4) {
        $gambarbaru = $gambarawal;
        }else {
            $gambarbaru = uploadBerita();                                                
        }
    
        
     
    // masukan data
    $query = "UPDATE tb_berita SET
        	judul_post_news = '$judul',
            kategori_post_news = '$kategori',
            waktu_post_news = '$waktu',
            artikel_post_news = '$artikel',
            author_post_news = '$author',
            img_post_news = '$gambarbaru'	
            WHERE id = $id
        ";
        mysqli_query($conn,$query);
        return mysqli_affected_rows($conn);
}


function cari ($keyword){
    $query = "SELECT * FROM tb_berita
        WHERE 
        judul_post_news LIKE  '%$keyword%' OR
        kategori_post_news LIKE  '%$keyword%'  OR
        waktu_post_news LIKE  '%$keyword%' OR
        artikel_post_news LIKE  '%$keyword%'
    ";

    return query($query);
}

function updateDataUser($data)
{
    global $conn;
    
    $id =  $data["id"];
    $username = htmlspecialchars($data["username"]);
    $password = htmlspecialchars($data["password"]);
    $role = htmlspecialchars($data["role"]); 
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);

     
    // masukan data
    $query = "UPDATE tb_users SET
        	username_user = '$username',
            password_user = '$password',
            id_role = '$role',
            nama_user = '$nama',
            email_user = '$email'
            WHERE id = $id
        ";
        mysqli_query($conn,$query);
        return mysqli_affected_rows($conn);
}



function createDataDonasi($data)
{
    global $conn;

    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $alamat = htmlspecialchars($data["alamat"]); 
    $notelp = htmlspecialchars($data["notelp"]);
    $nominal = htmlspecialchars($data["nominal"]);
    $ket =  htmlspecialchars($data["ket"]);

    $barang = uploadBarang();
    if (!$barang) {
        return false;
    }

    $bukti = uploadBukti();
    if (!$bukti) {
        return false;
    }
    
    // masukan data
    $query = "INSERT INTO tb_donasi VALUE 
        ('','$nama','$email','$alamat','$notelp','$nominal','$barang','$ket','$bukti')
        ";
        mysqli_query($conn,$query);
        return mysqli_affected_rows($conn);
}

function uploadBarang(){
    $namaFile = $_FILES['barang']['name'];
    $ukuranFile = $_FILES['barang']['size'];
    $error = $_FILES['barang']['error'];
    $tmpName = $_FILES['barang']['tmp_name'];

    if ($error === 4) {
        echo "<script>
                alert('tambahkan gambar terlebih dahulu');
            </script>";
            return false;
    }

    //cek ekstentsi file gambar agar benar dalam penambahan gambar

    $ekstenPictValid = ['jpg','jpeg','png'];
    $ekstenPict = explode('.',$namaFile);
    $ekstenPict = strtolower(end($ekstenPict));
    if(!in_array($ekstenPict,$ekstenPictValid)){
        echo "<script>
        alert('yang anda upload bukan gambar');
    </script>";
    return false;
    }

    // cek ukuran
    if ($ukuranFile > 1000000) {
        echo "<script>
        alert('ukuran file terlalu besar');
        </script>";
    }

    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru.= $ekstenPict;

    //pengecekan akhir 
    move_uploaded_file($tmpName,'dasboard/img/barang/'. $namaFileBaru);
    return $namaFileBaru;

}
function uploadBukti(){
    $namaFile = $_FILES['bukti']['name'];
    $ukuranFile = $_FILES['bukti']['size'];
    $error = $_FILES['bukti']['error'];
    $tmpName = $_FILES['bukti']['tmp_name'];

    if ($error === 4) {
        echo "<script>
                alert('tambahkan gambar terlebih dahulu');
            </script>";
            return false;
    }

    //cek ekstentsi file gambar agar benar dalam penambahan gambar

    $ekstenPictValid = ['jpg','jpeg','png'];
    $ekstenPict = explode('.',$namaFile);
    $ekstenPict = strtolower(end($ekstenPict));
    if(!in_array($ekstenPict,$ekstenPictValid)){
        echo "<script>
        alert('yang anda upload bukan gambar');
    </script>";
    return false;
    }

    // cek ukuran
    if ($ukuranFile > 1000000) {
        echo "<script>
        alert('ukuran file terlalu besar');
        </script>";
    }

    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru.= $ekstenPict;

    //pengecekan akhir 
    move_uploaded_file($tmpName,'dasboard/img/bukti/'. $namaFileBaru);
    return $namaFileBaru;

}

function limit_text($text, $limit) {
    if (str_word_count($text, 0) > $limit) {
        $words = str_word_count($text, 2);
        $pos   = array_keys($words);
        $text  = substr($text, 0, $pos[$limit]) . '...';
    }
    return $text;
}

?>