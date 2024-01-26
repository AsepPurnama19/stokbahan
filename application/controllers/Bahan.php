<?php
class Bahan extends CI_Controller {

  function __construct()
  {
      parent::__construct();
      $this->load->model('MBahan');
      $this->load->library('form_validation');
  }

  public function tampil_data()
    {
        $data['list_bahan'] = $this->MBahan->get_all();
        $this->load->view('bahan_list', $data);
    }

    public function tambah() 
    {
        $data = array(
            'action' => site_url('bahan/tambah_action'),
            'id_bahan' => set_value('id_bahan'),
            'nama' => set_value('nama'),
            'jumlah' => set_value('jumlah'),
        );
        $this->load->view('bahan_form', $data);
    }
    
  public function tambah_action() 
  {
    $data = array(
      'nama' => $this->input->post('nama', TRUE),
      'jumlah' => $this->input->post('jumlah', TRUE),
    );
    $this->MBahan->insert($data);
    $this->session->set_flashdata('message', 'Data Berhasil Ditambahkan');
    redirect(site_url('bahan/tampil_data'));
  }

  // Update
  public function update($id_bahan) 
{
    $row = $this->MBahan->get_by_id($id_bahan);
    if ($row) {
        $data = array(
            'action' => site_url('bahan/update_action'), // Corrected action URL
            'id_bahan' => set_value('id_bahan', $row->id_bahan),
            'nama' => set_value('nama', $row->nama),
            'jumlah' => set_value('jumlah', $row->jumlah),
        );
        $this->load->view('bahan_form', $data);
    } else {
        // Handle the case when the specified ID is not found
        show_404();
    }
}

public function update_action() 
{
    $data = array(
        'nama' => $this->input->post('nama', TRUE),
        'jumlah' => $this->input->post('jumlah', TRUE),
    );

    $this->MBahan->update($this->input->post('id_bahan', TRUE), $data); // Use 'id_bahan' instead of 'id'
    $this->session->set_flashdata('message', 'Data Berhasil Diubah');
    redirect(site_url('bahan/tampil_data'));
}


  // Delete
  public function delete($id_bahan) 
    {
        $this->MBahan->delete($id_bahan);
        $this->session->set_flashdata('message', 'Data Berhasil Dihapus');
        var_dump($this->session->flashdata('message')); // Check the flash message
        redirect(site_url('bahan/tampil_data'));
    }

}
