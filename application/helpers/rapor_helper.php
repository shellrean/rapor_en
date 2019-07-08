<?php

  /**
   * Helper untuk membuat flash message sukses
   * @param  string $name
   * @param  string $text
   * @return string
   * @author Kuswandi <wandinak17@gmail.com>
   */
  function alertsuccess($name,$text) {
    $CI =& get_instance();
    $alert = ' 
    <div class="alert alert-success alert-dismissible">
    '.$text.'
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    </div>
    ';
    return $CI->session->set_flashdata($name,$alert);
  }

  /**
   * Helper untuk membuat flash message error
   * @param  string $name
   * @param  string $text
   * @return string
   * @author Kuswandi <wandinak17@gmail.com>
   */
  function alerterror($name,$text) {
    $CI =& get_instance();
    $alert = ' 
    <div class="alert alert-danger alert-dismissible">
    '.$text.'
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    </div>
    ';
    return $CI->session->set_flashdata($name,$alert);
  }

  /**
   * Helper untuk mengecek apakah user sudah login
   * @return boolean
   * @author Kuswandi <wandinak17@gmail.com>
   */
  function is_login()
  {
    $CI =& get_instance();
    if (!$CI->session->has_userdata('menu')) {
      redirect('auth');
    }
  }

  /**
   * Helper untuk mengecek apakah user yang login adalah admin
   * @return boolean
   * @author Kuswandi <wandinak17@gmail.com>
   */
  function is_admin()
  {
    $CI =& get_instance();
    is_login();
    if( !$CI->session->has_userdata('eveadmin')) {
      redirect('errors/denied');
    }
  }