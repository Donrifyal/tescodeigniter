<?php
class About extends CI_Controller{

    public function __construct()
        {
                parent::__construct();
                $this->load->model('bio_model');
                $this->load->helper('url_helper');
        }

        public function index()
        {
                $data['bio'] = $this->bio_model->get_bio();
                $data['title'] = 'About Me';
        
                $this->load->view('templates/header', $data);
                $this->load->view('about/index', $data);
                $this->load->view('templates/footer');
        }

    public function view($slug = NULL)
        {
        $data['bio_item'] = $this->bio_model->get_bio($slug);

        if (empty($data['news_bio']))
        {
                show_404();
        }
        }
}