 <?php
class User_model extends CI_Model {

 

    public function user_insert()
	{
		$data = array(
        'user_id' => rand(11,11),
        'fname' => $this->input->post('fname'),
        'sname' => $this->input->post('surname'),
        'gender' => $this->input->post('gender'),
        'email' => $this->input->post('email'),
        'phone' => $this->input->post('phone'),
        'status' => $this->input->post('status')
    );
		if ($data!='') {
			$this->db->insert('users', $data);
		}
		else{
			echo "insert failed";
		}
	}
}