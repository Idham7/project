<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cexcel extends CI_Controller {

	public function __construct()
  {
      parent::__construct();

//			$this->load->model('Home_model');
  }

// 	public function index()
// 	{
// 		$data['users'] = $this->Home_model->get_muser();
// 		print_r($data);
// 		$arrlength = count($data['users']);
// 	  for($x = 0; $x < $arrlength; $x++) {
// 	    foreach($data['users'][$x] as $y => $y_value) {
// 				$email = "";
// 				$pass = "";
// 	      if($y == 'email'){
// 	        $email = $y_value;
// 					echo "<br>";
// //						echo $email;
// 	      }
// 	      if($y == 'password'){
// 	        $pass = $y_value;
// 					echo "<br>";
// //						echo $pass;
// 	      }
// 				echo $pass;
// 				echo $email;
// 	    }
// 	  }
// 	}

// 	public function edit()
// 	{
// 		$inputFileName = 'assets/template2.xlsx';
//
// 		/*check point*/
//
// 		// Read the existing excel file
// 		$inputFileType = PHPExcel_IOFactory::identify($inputFileName);
// 		$objReader = PHPExcel_IOFactory::createReader($inputFileType);
// 		$objPHPExcel = $objReader->load($inputFileName);
//
// 		// Update it's data
// 		// Set active sheet index to the first sheet, so Excel opens this as the first sheet
// 		$objPHPExcel->setActiveSheetIndex(0);
//
// 		// Add column headers
// 		$objPHPExcel->getActiveSheet()
// 				->setCellValue('A1', 'EDITED Last Name')
// 				->setCellValue('B1', 'EDITED First Name')
// 				->setCellValue('C1', 'EDITED Age')
// 				->setCellValue('D1', 'EDITED Sex')
// 				->setCellValue('E1', 'EDITED Location')
// 				;
//
// 		// Generate an updated excel file
// 		// Redirect output to a client’s web browser (Excel2007)
// 		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
// 		header('Content-Disposition: attachment;filename="' . $inputFileName . '"');
// 		header('Cache-Control: max-age=0');
//
// 		$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
// 		$objWriter->save('php://output');
// 	}
//
// 	function test(){
// 		$aasd = 65;
// 		$tut = chr($aasd);
// 		echo $tut;
// 		echo ord($tut);
//
// 		$data['muser'] = $this->Home_model->get_muser();
// 		$data['pegawai'] = $this->Data_Pegawai_model->get_all_only();
// 		$i=0;
//
//
// 			foreach ($data['muser'] as $row) {
// 				echo $row['id'];
// 			}
//
// 			print_r("<br>");
// 			print_r("<br>");
//
// 			foreach ($data['pegawai'] as $row) {
// 				echo $row->id;
// 			}
// 			print_r("<br>");
// 			print_r("<br>");
//
// 			print_r($data['muser']);
// 			print_r("<br>");
// 			print_r("<br>");
// 			$keys = array_keys($data['muser'][0]);
// 			// print_r("<br>");
// 			// print_r("<br>");
// 			print_r($keys);
// 			// print_r($data['muser'][0]);
// 			print_r("<br>");
// 			print_r("<br>");
// 			// $kejs = array_keys($data['pegawai'][0]);
// 			// print_r("<br>");
// 			// print_r("<br>");
// //			print_r($kejs);
// 			// print_r($data['muser'][0]);
// 			print_r("<br>");
// 			print_r("<br>");
// 			print_r($data['pegawai'][0]);
// 			// print_r("<br>");
// 			// print_r("<br>");
// 			// print_r($data['pegawai']);
// 			// print_r("<br>");
// 			// print_r("<br>");
// 			// print_r($data['pegawai'][0]);
// 			print_r("<br>");
// 			print_r("<br>");
// 			foreach ($data['pegawai'] as $row) {
// 				foreach ($row as $key => $value) {
// 					print_r($key.$i++);
// 				}
// 				print_r("<br>");
// 			}
//
// 	}

	public function read_modify_write()
	{

		  $inputFileName =  'assets/template2.xlsx';

		  /*check point*/

		  // Read the existing excel file
		  $inputFileType = PHPExcel_IOFactory::identify($inputFileName);
		  $objReader = PHPExcel_IOFactory::createReader($inputFileType);
		  $objPHPExcel = $objReader->load($inputFileName);

		  // Update it's data
		  // Set active sheet index to the first sheet, so Excel opens this as the first sheet
		  $objPHPExcel->setActiveSheetIndex(0);


		  $table['pegawai'] = $this->Data_Pegawai_model->get_all_only();

			$p = 0;
			foreach ($table['pegawai'] as $row) {
				$q = 0;
				foreach ($row as $key => $value) {
					$data[$p][$q] = $value;
					$q++;
				}
				$p++;
			}

			$data_x = 65;
			$data_y = 3;

			for($i = 0; $i < $p; $i++){
				for($j = 1; $j < $q; $j++){
					$j_mod = ($j-1) % 26;
					$j_dec = floor(($j-1) / 26);
					if($j_dec != 0){
						$a = chr($data_x+$j_dec-1);
						$b = chr($data_x+$j_mod);
						$c = $data_y+$i;
						$objPHPExcel->getActiveSheet()
						->setCellValue($a.$b.$c, $data[$i][$j]);
//-----------------------------------------------------------------------------//
						//echo $data[$i][$j+1] . '||';
					}	else{
						if($j == 1){
							$a = chr($data_x+$j_mod);
							$b = $data_y+$i;
							$objPHPExcel->getActiveSheet()
							->setCellValue($a.$b, $i+1);
//-----------------------------------------------------------------------------//
							//echo $i+1;
						}else{
							$a = chr($data_x+$j_mod);
							$b = $data_y+$i;
							$objPHPExcel->getActiveSheet()
							->setCellValue($a.$b, $data[$i][$j]);
//-----------------------------------------------------------------------------//
							//echo $data[$i][$j+1] . '||';
						}
					}
				}
//				echo '<br>';
			}

			// Generate an updated excel file
			// Redirect output to a client’s web browser (Excel2007)
			header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
			header('Content-Disposition: attachment;filename="' . $inputFileName . '"');
			header('Cache-Control: max-age=0');

			$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
			$objWriter->save('php://output');
	}

// 	public function read_modify_write_haha()
// 	{
//
// 		$inputFileName =  'assets/template2.xls';
//
// 		 $excel2 = PHPExcel_IOFactory::createReader('Excel5');
// 		 $excel3 = $excel2->load($inputFileName);
//
// 		$data_x_1 = 'A';
// 		$data_x_2 = 'B';
// 		$data_x_3 = 'C';
//
// 		$data_y = 3;
//
// //			$data = $data_x_1 . $data_y;
//
// //			echo $data;
// //			$objPHPexcel->getActiveSheet()->getCell('A4')->setValue('Smith');
//
// 		$excel3->setActiveSheetIndex(0)
// 		->setCellValue('A4', 'John')
// 		->setCellValue('A5', 'Smith');
//
//
// /*
// 		$objWorksheet = $objPHPexcel->getActiveSheet();
// /*			$objWorksheet->getCell($data_x_1 . $data_y)->setValue('lala1');
// 		$objWorksheet->getCell($data_x_2 . $data_y)->setValue('lala2');
// 		$objWorksheet->getCell($data_x_3 . $data_y)->setValue('lala3');
// //*/
// //			$this->excel->getCell('A4')->setValue('Smith');
//
//
// 		$objWriter = PHPExcel_IOFactory::createWriter($excel3, 'excel5');
// 		$objWriter->save('php://output');
// //*/
// 	}
//
// 	public function generate_excel_data()
// 	{
// 		$this->excel->setActiveSheetIndex(0);
// 		//name the worksheet
// 		$this->excel->getActiveSheet()->setTitle('user data');
// 		$this->load->model('Home_model');
// 		$users = $this->Home_model->get_muser();
// 		$this->excel->getActiveSheet()->fromArray($users);
//
// 		$filename = 'users1.xlsx';
//
// 		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'); //mime type
// 		header('Content-Disposition:attachment; filename="'.$filename.'"'); //tell the browser what's the file name
// 		header('Cache-Control: max-age=0'); //no cache
//
// 		$objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel2007');
// 		$objWriter->save('php://output');
// 	}
//
// 	public function create_an_excel_file()
// 	{
// 		//activate worksheet number 1
// 		$this->excel->setActiveSheetIndex(0);
// 		//name the worksheet
// 		$this->excel->getActiveSheet()->setTitle('test worksheet');
// 		//set cell A1 content with some text
// 		$this->excel->getActiveSheet()->setCellValue('A1', 'This is just some text value');
// 		//change the font size
// 		$this->excel->getActiveSheet()->getStyle('A1')->getFont()->setSize(20);
// 		//make the font become bold
// 		$this->excel->getActiveSheet()->getStyle('A1')->getFont()->setBold(true);
// 		//merge cell A1 until D1
// 		$this->excel->getActiveSheet()->mergeCells('A1:D1');
// 		//set alignment to center for that merged cell (A1 to D1)
// 		$this->excel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
//
// 		$filename = 'just_some_random_name.xlsx';
//
// 		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'); //mime type
// 		header('Content-Disposition:attachment; filename="'.$filename.'"'); //tell the browser what's the file name
// 		header('Cache-Control: max-age=0'); //no cache
//
// 		$objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel2007');
// 		$objWriter->save('php://output');
//
//
// 	}
}

?>
