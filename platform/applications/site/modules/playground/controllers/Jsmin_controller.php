<?php if (!defined('BASEPATH')) { exit('No direct script access allowed.'); }

/**
 * @author Deepak Patil <deepak.patil@relesol.com>, 2015
 * @license The MIT License, http://opensource.org/licenses/MIT
 */

class Jsmin_controller extends Base_Controller {

    public function __construct() {

        parent::__construct();

        $this->load
            ->parser()
        ;

        $this->template
            ->title('JavaScript Minification Test')
        ;

        $this->registry->set('nav', 'playground');
    }

    public function index() {

        $output = null;

        $validation_rules = array(
            array(
                'field' => 'input',
                'label' => 'Input JavaScript source',
                'rules' => 'trim'
            ),
        );

        $this->form_validation->set_rules($validation_rules);

        if ($this->form_validation->run()) {

            try {
                $output = $this->parser->parse_string($this->input->post('input'), null, true, 'jsmin');
            } catch (Exception $e) {
                $output = $e->getMessage();
            }

        } elseif (validation_errors()) {

            $output = null;

            $this->template->set('error_message', '<ul>'.validation_errors('<li>', '</li>').'</ul>');
            $this->template->set('validation_errors', validation_errors_array());
        }

        $this->template
            ->set(compact('output'))
            ->enable_parser_body('i18n')
            ->build('jsmin');
    }

}
