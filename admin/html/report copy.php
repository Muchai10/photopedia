<?php
    ini_set("display_errors", "1");
    ini_set("display_startup_errors","1");
    error_reporting(E_ALL);

    include_once "PHP/config.php"; // Make sure this path is correct

    $sql = "SELECT * FROM review";
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

    // Header of the table
    $pdf->Cell(45, 10, 'ID', 1);
    $pdf->Cell(45, 10, 'Name', 1);
    $pdf->Cell(45, 10, 'Email', 1);
    $pdf->Cell(45, 10, 'Business', 1);
    $pdf->Cell(45, 10, 'Type', 1);
    $pdf->Cell(45, 10, 'Desired Date', 1);
    $pdf->Cell(45, 10, 'Start Time', 1);
    $pdf->Cell(45, 10, 'End Time', 1);
    $pdf->Cell(45, 10, 'Location', 1);
    $pdf->Cell(45, 10, 'Date', 1);
    $pdf->Ln();

    // Fetching data and displaying in table
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $pdf->Cell(45, 10, $row['name'], 1);
        $pdf->Cell(45, 10, $row['email'], 1);
        $pdf->Cell(45, 10, $row['business'], 1);
        $pdf->Cell(45, 10, $row['type'], 1);
        $pdf->Cell(45, 10, $row['desired_date'], 1);
        $pdf->Cell(45, 10, $row['time'], 1);
        $pdf->Cell(45, 10, $row['end_time'], 1);
        $pdf->Cell(45, 10, $row['location'], 1);
        $pdf->Cell(45, 10, $row['date'], 1);
        $pdf->Ln();
    }

    $pdf->Output();
?>
