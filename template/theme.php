<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Theme_Template extends Theme {

    public $name = 'Theme Template';
    public $author = 'Author Name';
    public $author_website = 'http://iamtheauthor.com/';
    public $website = 'http://www.mysite.com/';
    public $description = 'A HTML5 and CSS3 Responsive Theme template based on Twitter Bootstrap, FontAwesome and jQuery';
    public $version = '0.1';
	public $options = array(					
					'slider' => array(
						'title'         => 'Featured Images Slider',
						'description'   => 'Do you have a featured images slider on homepage?',
						'default'       => 'no',
						'type'          => 'radio',
						'options'       => 'yes=Yes | no=No',
						'is_required'   => TRUE
					),
				);
}

/* End of file theme.php */