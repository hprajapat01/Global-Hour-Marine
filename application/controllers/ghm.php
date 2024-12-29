<?php
defined('BASEPATH') OR exit('No direct access script allowed');
class ghm extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
    }
    public function header()
    {
        $this->load->view('../views/header.php');
    }
    public function home()
    {
        $this->load->view('../views/header.php');
        $this->load->view('../views/home.php');
        $this->load->view('../views/footer.php');
    }
    public function about_us()
    {
        $this->load->view('../views/header.php');
        $this->load->view('../views/about_us.php');
        $this->load->view('../views/footer.php');
    }
    public function our_services()
    {
        $this->load->view('../views/header.php');
        $this->load->view('../views/our-services.php');
        $this->load->view('../views/footer.php');
    }
    public function available_vessels()
    {
        $this->load->view('../views/header.php');
        $this->load->view('../views/available-vessels.php');
        $this->load->view('../views/footer.php');
    }
    public function offshore_vessels()
    {
        $this->load->view('../views/header.php');
        $this->load->view('../views/offshore_vessels2.php');
        $this->load->view('../views/footer.php');
    }
    public function tanker_vessels()
    {
        $this->load->view('../views/header.php');
        $this->load->view('../views/tanker_vessels.php');
        $this->load->view('../views/footer.php');
    }
    public function bulk_carriers()
    {
        $this->load->view('../views/header.php');
        $this->load->view('../views/bulk_carriers.php');
        $this->load->view('../views/footer.php');
    }
    public function vessels_for_sale()
    {
        $this->load->view('../views/header.php');
        $this->load->view('../views/vessels_for_sale.php');
        $this->load->view('../views/footer.php');
    }
    public function offshore_vessel()
    {
        $this->load->view('../views/header.php');
        $this->load->view('../views/offshore-vessel.php');
        $this->load->view('../views/footer.php');

    }
    public function tanker_chartering()
    {
        $this->load->view('../views/header.php');
        $this->load->view('../views/tanker_chartering.php');
        $this->load->view('../views/footer.php');

    }
    public function dry_cargo()
    {
        $this->load->view('../views/header.php');
        $this->load->view('../views/dry_cargo.php');
        $this->load->view('../views/footer.php');

    }
    public function marine_survey()
    {
        $this->load->view('../views/header.php');
        $this->load->view('../views/marine-survey.php');
        $this->load->view('../views/footer.php');

    }
    public function vessel_technical()
    {
        $this->load->view('../views/header.php');
        $this->load->view('../views/vessel-technical.php');
        $this->load->view('../views/footer.php');

    }
    public function vessel_sale_purchase()
    {
        $this->load->view('../views/header.php');
        $this->load->view('../views/vessel-sale-purchase.php');
        $this->load->view('../views/footer.php');

    }
    public function completed_projects()
    {
        $this->load->view('../views/header.php');
        $this->load->view('../views/completed_projects.php');
        $this->load->view('../views/footer.php');

    }
    public function offshore_projects()
    {
        $this->load->view('../views/header.php');
        $this->load->view('../views/offshore-project.php');
        $this->load->view('../views/footer.php');

    }
    public function tanker_projects()
    {
        $this->load->view('../views/header.php');
        $this->load->view('../views/tanker-project.php');
        $this->load->view('../views/footer.php');

    }
    public function bulk_carrier_projects()
    {
        $this->load->view('../views/header.php');
        $this->load->view('../views/bulk-project.php');
        $this->load->view('../views/footer.php');

    }
    public function consultancy_projects()
    {
        $this->load->view('../views/header.php');
        $this->load->view('../views/consultancy-project.php');
        $this->load->view('../views/footer.php');

    }
    public function technical_management()
    {
        $this->load->view('../views/header.php');
        $this->load->view('../views/technical-management.php');
        $this->load->view('../views/footer.php');

    }
    public function blog()
    {
        $this->load->view('../views/header.php');
        $this->load->view('../views/blogpage.php');
        $this->load->view('../views/footer.php');

    }
    public function news()
    {
        $this->load->view('../views/header.php');
        $this->load->view('../views/news.php');
        $this->load->view('../views/footer.php');

    }
    public function contect_us()
    {
        $this->load->view('../views/header.php');
        $this->load->view('../views/contect-us.php');
        $this->load->view('../views/footer.php');

    }
}
?>
