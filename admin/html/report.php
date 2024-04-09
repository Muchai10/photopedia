<?php
    ini_set("display_errors", "1");
    ini_set("display_startup_errors","1");
    error_reporting(E_ALL);

    include_once "PHP/config.php"; // Make sure this path is correct

    require('fdpf/fpdf.php');

    class PDF extends FPDF {
        function Header() {
            $this->SetFont('Arial','B',17); // Set font before using it
            $this->Cell(80);
            $this->Cell(30,10,'Reports',1,0,'C');
            $this->Ln(20);
        }

        function Footer() {
            $this->SetY(-15);
            $this->SetFont('Arial','I',8);
            $this->Cell(0,10,"Page ". $this->PageNo(). ' / {nb}', 0,0,'C') ;
        }
    }

    $pdf = new PDF();
    $pdf->AliasNbPages();
    $pdf->AddPage();

    // Set font before using it in Header
    $pdf->SetFont('Arial','',12);

    $pdf->SetFont('Arial','B',14);
    $pdf->Cell(0,10,'Booking Trends',0,1); // Add the heading
    $pdf->SetFont('Arial','',12); // Reset font


    // Fetching and displaying data from another table
    $sql_another_table = "SELECT * FROM session";
    $result_another_table = mysqli_query($conn, $sql_another_table);

    $pdf->Ln(8); // Add space between tables

    $pdf->Cell(25, 10, 'ID', 1);
    $pdf->Cell(25, 10, 'Name', 1);
    $pdf->Cell(58, 10, 'Email', 1);
    $pdf->Cell(25, 10, 'Business', 1);
    $pdf->Cell(25, 10, 'Type', 1);
    $pdf->Cell(40, 10, 'Desired Date', 1);


    // Add more headers here as needed


    while ($row_another_table = mysqli_fetch_assoc($result_another_table)) {
        $pdf->Cell(25, 10, $row_another_table['session_id'], 1);
        $pdf->Cell(25, 10, $row_another_table['name'], 1);
        $pdf->Cell(58, 10, $row_another_table['email'], 1);
        $pdf->Cell(25, 10, $row_another_table['business'], 1);
        $pdf->Cell(25, 10, $row_another_table['type'], 1);
        $pdf->Cell(40, 10, $row_another_table['desired_date'], 1);
        // Add more cell data here as needed
        $pdf->Ln();
    }

    $pdf->Ln();
    $pdf->SetFont('Arial','B',14);
    $pdf->Cell(0,10,'Revenues',0,1); // Add the heading
    $pdf->SetFont('Arial','',12); // Reset font
    // Add more tables similarly by fetching data and displaying it

    // Fetching and displaying data from another table
    $sql_table = "SELECT * FROM transaction";
    $result = mysqli_query($conn, $sql_table);

    $pdf->Ln(10); // Add space between tables

    $pdf->Cell(25, 10, 'ID', 1);
    $pdf->Cell(58, 10, 'Email', 1);
    $pdf->Cell(20, 10, 'Amount', 1);
    $pdf->Cell(40, 10, 'Receipt Number', 1);
    $pdf->Cell(28, 10, 'Phone', 1);
    $pdf->Cell(35, 10, 'Date', 1);



    // Add more headers here as needed
    $pdf->Ln();

    while ($row_table = mysqli_fetch_assoc($result)) {
        $pdf->Cell(25, 10, $row_table['id'], 1);
        $pdf->Cell(58, 10, $row_table['email'], 1);
        $pdf->Cell(20, 10, $row_table['amount'], 1);
        $pdf->Cell(40, 10, $row_table['mpesareceiptnumber'], 1);
        $pdf->Cell(28, 10, $row_table['phone'], 1);
        $pdf->Cell(35, 10, $row_table['date'], 1);

        // Add more cell data here as needed
        $pdf->Ln();
    }

    $pdf->Ln();
    $pdf->SetFont('Arial','B',14);
    $pdf->Cell(0,10,'Customer Ratings',0,1); // Add the heading
    $pdf->SetFont('Arial','',12); // Reset font
    // Add more tables similarly by fetching data and displaying it

    // Fetching and displaying data from another table
    $sql_another_table = "SELECT * FROM review";
    $result_another_table = mysqli_query($conn, $sql_another_table);

    $pdf->Ln(10); // Add space between tables

    $pdf->Cell(25, 10, 'ID', 1);
    $pdf->Cell(25, 10, 'Name', 1);
    $pdf->Cell(58, 10, 'Email', 1);
    $pdf->Cell(20, 10, 'Rating', 1);
    $pdf->Cell(40, 10, 'Description', 1);
    $pdf->Cell(35, 10, 'Date', 1);


    // Add more headers here as needed
    $pdf->Ln();

    while ($row_another_table = mysqli_fetch_assoc($result_another_table)) {
        $pdf->Cell(25, 10, $row_another_table['review_id'], 1);
        $pdf->Cell(25, 10, $row_another_table['name'], 1);
        $pdf->Cell(58, 10, $row_another_table['email'], 1);
        $pdf->Cell(20, 10, $row_another_table['rating'], 1);
        $pdf->Cell(40, 10, $row_another_table['description'], 1);
        $pdf->Cell(35, 10, $row_another_table['date'], 1);
        // Add more cell data here as needed
        $pdf->Ln();
    }

    $pdf->Output();

?>
