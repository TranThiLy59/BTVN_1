<?php

try {
    $conn = new PDO("mysql:host=localhost;dbname=baitap", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// insert 
    $sql = "INSERT INTO my_contacts (full_names, gender, contact_no, email, city, country) 
            VALUES (:full_names, :gender, :contact_no, :email, :city, :country)";
    
    // Chuẩn bị câu lệnh
    $stmt = $conn->prepare($sql);

    // Gán giá trị cho các tham số
    $stmt->bindParam(':full_names', $full_names);
    $stmt->bindParam(':gender', $gender);
    $stmt->bindParam(':contact_no', $contact_no);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':city', $city);
    $stmt->bindParam(':country', $country);

    // Các giá trị
    $full_names = 'Poseido';
    $gender = 'Male';
    $contact_no = '540';
    $email = 'poseidon@sea.oc';
    $city = 'Troy';
    $country = 'Ithaca';

    $stmt->execute();

    echo "New record created successfully";


// update
    $sql_1 = "UPDATE my_contacts SET email = :email WHERE full_names = :full_names";

    // Chuẩn bị câu lệnh
    $stmt = $conn->prepare($sql_1);

    // Gán giá trị cho các tham số
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':full_names', $full_names);

    // Các giá trị
    $email = 'poseidon_new@sea.oc';
    $full_names = 'Poseido';

    // Thực thi câu lệnh
    $stmt->execute();

    echo "updated successfully";

// delete
    $sql_2 = "DELETE FROM my_contacts WHERE id = :id";

    // Chuẩn bị câu lệnh
    $stmt = $conn->prepare($sql_2);

    // Gán giá trị cho tham số
    $stmt->bindParam(':id', $id);

    // Giá trị
    $id = 6;

    // Thực thi câu lệnh
    $stmt->execute();

    echo "Deleted successfully";

// select 
    $sql_3 = "SELECT id, full_names, gender, contact_no, email, city, country FROM my_contacts";
    $stmt = $conn->prepare($sql_3);
    $stmt->execute();

    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    foreach($stmt->fetchAll() as $row) {
        echo "ID: " . $row['id'] . "<br>";
        echo "Name: " . $row['full_names'] . "<br>";
        echo "Gender: " . $row['gender'] . "<br>";
        echo "Contact No: " . $row['contact_no'] . "<br>";
        echo "Email: " . $row['email'] . "<br>";
        echo "City: " . $row['city'] . "<br>";
        echo "Country: " . $row['country'] . "<br><br>";
    }

} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

?>
