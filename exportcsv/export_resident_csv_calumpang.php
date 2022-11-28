<?php

require("../server/server.php");

// get Users
$query = "SELECT members,firstname,middlename,lastname,relationship,age,civilstatus,gender,occupation,income,dependents,child,senior,housecondition,contact,outside,inside,amountdamage,housingstatus,incident,barangay FROM tblincident WHERE barangay = 'Calumpang'";
if (!$result = $conn->query($query)) {
    exit($conn->error);
}

$users = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $users[] = $row;
    }
}

header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=Residents.csv');
$output = fopen('php://output', 'w');
fputcsv($output, array('HH-MEMBERS','First Name','Middle Name', 'Last Name', 'Relationship To Client', 'Age', 'Civil Status', 'Gender', 'Occupation/Source of Income', 'Monthly Income','No. of Dependents', 'With Child (Below 18 Years Old)', 'With Senior Citizen', 'Housing Condition', 'Contact Number', 'Outside Evacuee', 'Inside Evacuee', 'Amount of Damage', 'Housing Status', 'Incident', 'Barangay'));

if (count($users) > 0) {
    foreach ($users as $row) {
        fputcsv($output, $row);
    }
}


?>