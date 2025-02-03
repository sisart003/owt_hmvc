<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// require('application/libraries/fpdf.php'); // Load FPDF library

class Converters extends MX_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('converter_model');
        $this->load->library('pdf');
    }

    public function converter_table()
    {
        $data['mytable'] = $this->converter_model->get_all_users();
        $this->load->view('converters/converter_table', $data);
    }

    public function export_csv()
    {
        $this->load->dbutil();
        $this->load->helper('download');

        $query = $this->db->query("SELECT * FROM mytable");

        $delimiter = ",";
        $newline = "\r\n";
        $csv_data = $this->dbutil->csv_from_result($query, $delimiter, $newline);
        $rand_name = rand();

        // Force Download
        force_download("{$rand_name}-data.csv", $csv_data);
    }

    public function export_pdf()
    {
        $data['results'] = $this->converter_model->get_all_users();

        // Create new PDF document
        $pdf = new Pdf(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
        
        // Set document information
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('Your Name');
        $pdf->SetTitle('Data Export via PDF');

        // Set default header data
        $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, 'Data Export', 'Generated on: ' . date('Y-m-d H:i:s'));
    
        // Set header and footer fonts
        $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
        $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

        // Set default monospaced font
        $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

        // Set margins
        $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
        $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
        $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

        // Set auto page breaks
        $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
        
        // Add a page
        $pdf->AddPage();
        
        // Set font
        $pdf->SetFont('helvetica', '', 10);

        // Create the table header
        $html = '<table border="1" cellpadding="4">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Country</th>
                <th>Number Range</th>
            </tr>';
        
        // Add data rows
        foreach($data['results'] as $row) {
            $html .= '<tr>
                <td>'.$row->id.'</td>
                <td>'.$row->name.'</td>
                <td>'.$row->phone.'</td>
                <td>'.$row->email.'</td>
                <td>'.$row->country.'</td>
                <td>'.$row->numberrange.'</td>
            </tr>';
        }
        
        $html .= '</table>';
        
        // Print the HTML table as PDF
        $pdf->writeHTML($html, true, false, true, false, '');
        
        // Close and output PDF document
        $pdf->Output('data_export_'.date('Y-m-d').'.pdf', 'D');

    }
    
}