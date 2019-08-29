<?php

class Site extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $data['title'] = 'login';
        // $this->load->view('front/commons/header', $data);
        $this->load->view('front/index', $data);
        //$this->load->view('front/commons/footer');
    }

    public function home() {
      
        if (!empty($this->session->userdata('user_email'))) {
            $data['user_email'] = $this->session->userdata('user_email');
             $data['user_name'] = $this->session->userdata('user_name');
             $data['user_image'] = $this->session->userdata('user_image');
             $data['user_uid'] = $this->session->userdata('user_id');
            $data['title'] = 'home';

            $this->load->view('front/commons/header', $data);
            $this->load->view('front/home');
            $this->load->view('front/commons/footer');
        } else {
            redirect('site');
        }
    }
    
    public function sendMoney(){
        $this->output->set_content_type('application/json');
        $data['sendMoneys'] = $this->input->post('arr');
        // print_r($data['sendMoneys']);die;
        $content_wrapper = $this->load->view('front/transaction/sendmoney', $data, true);
         $this->output->set_output(json_encode(['content_wrapper' => $content_wrapper]));
        return false;
    }
//    public function cashOut(){
//        $this->output->set_content_type('application/json');
//        $data['cashOut'] = $this->input->post('arr1');
//     
//        $content_wrapper = $this->load->view('front/transaction/cashout', $data, true);
//         $this->output->set_output(json_encode(['content_wrapper1' => $content_wrapper]));
//        return false;
//    }
    public function pdfgenerate(){
        $this->output->set_content_type('application/json');
        $data['test'] = 'Testing';
        $content_wrapper = $this->load->view('front/invoice', $data, true);
        $this->output->set_output(json_encode(['content_wrapper' => $content_wrapper]));
        return false;
    }

    public function expense() {
        if (!empty($this->session->userdata('user_email'))) {
            $data['user_email'] = $this->session->userdata('user_email');
             $data['user_name'] = $this->session->userdata('user_name');
             $data['user_image'] = $this->session->userdata('user_image');
             $data['user_uid'] = $this->session->userdata('user_id');
            $data['title'] = 'expense';
            $this->load->view('front/commons/header', $data);
            $this->load->view('front/expense');
            $this->load->view('front/commons/footer');
        } else {
            redirect('site');
        }
    }

    public function statistics() {
        if (!empty($this->session->userdata('user_email'))) {
            $data['user_email'] = $this->session->userdata('user_email');
             $data['user_name'] = $this->session->userdata('user_name');
             $data['user_image'] = $this->session->userdata('user_image');
             $data['user_uid'] = $this->session->userdata('user_id');
            $data['title'] = 'statistics';
            $this->load->view('front/commons/header', $data);
            $this->load->view('front/statistics');
            $this->load->view('front/commons/footer');
        } else {
            redirect('site');
        }
    }

    public function change_theme() {
        $this->output->set_content_type('application/json');

        $dark_mode = $this->input->post('dark_mode');

        $this->session->set_userdata('dark_mode', $dark_mode);

        $this->output->set_output(json_encode(['result' => 1]));
        return false;
    }

    public function check_theme() {
        $this->output->set_content_type('application/json');

        if (!empty($this->session->userdata('dark_mode'))) {
            $dark_mode = $this->session->userdata('dark_mode');
        } else {
            $dark_mode = 'off';
        }

        $this->output->set_output(json_encode(['result' => 1, 'dark_mode' => $dark_mode]));
        return false;
    }

    public function set_session() {

        $this->output->set_content_type('application/json');
        $email = $this->input->post('email');
        $uid = $this->input->post('uniqueId');
        $name = $this->input->post('name');
        $image = $this->input->post('image');
        $this->session->set_userdata('user_email', $email);
        $this->session->set_userdata('user_id', $uid);
         $this->session->set_userdata('user_name', $name);
          $this->session->set_userdata('user_image', $image);

        $this->output->set_output(json_encode(['result' => 1]));
        return false;
    }

    public function unset_session() {

        $this->output->set_content_type('application/json');
        $this->session->unset_userdata('user_email');
         $this->session->unset_userdata('user_id');
          $this->session->unset_userdata('user_name');
           $this->session->unset_userdata('user_image');
        $this->output->set_output(json_encode(['result' => 1]));
        return false;
    }
    public function convertpdf(){
        // Get output html
        $dompdf->loadHtml('<h1>Welcome to CodexWorld.com</h1>'); 
 
// (Optional) Setup the paper size and orientation 
$dompdf->setPaper('A4', 'landscape'); 
 
// Render the HTML as PDF 
$dompdf->render(); 
 
// Output the generated PDF to Browser 
$dompdf->stream();
    }

}
