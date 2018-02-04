<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Auth extends CI_Model
{
	public function login($email, $pass)
	{
		$sql = "SELECT count(id_user) FROM user WHERE email_user = '$email' AND pass_user ='$pass'";
		$query = $this->db->query($sql);
		foreach ($query->result_array() as $row)
		{
			$count = $row['count(id_user)'];
		}
		if ($count == 1) {
			// Lưu thông tin vào SESSION
			$sql = "SELECT * FROM user WHERE email_user = '$email'";
			$query = $this->db->query($sql);
			foreach ($query->result_array() as $row)
			{
				$session_user = array(
					'id_user'=> $row['id_user'],
					'email_user'=> $row['email_user'],
					'name_user' => $row['name_user'],
					'job_user' => $row['job_user'],
					'about_user' => $row['about_user'],
					'permission_user' => $row['permission_user'],

				);
				$this->session->set_userdata('userdata', $session_user);
			}
			header('Location: ../home');
		}
		else{
			echo "<script type='text/javascript'>alert('Tài khoản hoặc mật khẩu không đúng! Vui lòng nhập lại!');</script>";
			$this->load->view('v_auth');
			$view = new V_Auth();
			$view->show_login();
		}
	}
	public function register($username ,$email, $pass)
	{
		$sql = "SELECT count(id_user) FROM user WHERE email_user = '$email'";
		$query = $this->db->query($sql);
		foreach ($query->result_array() as $row)
		{
			$count = $row['count(id_user)'];
		}
		if ($count == 1) {
			echo "<script type='text/javascript'>alert('Tài khoản đã bị trùng! Vui lòng nhập lại!');</script>";
			$this->load->view('v_auth');
			$view = new V_Auth();
			$view->show_register();
		}
		else{
			$sql = "INSERT INTO user(name_user, pass_user, email_user) VALUES ('$username', '$pass', '$email')";
			$query = $this->db->query($sql);
			echo "<script type='text/javascript'>confirm('Chúc mừng bạn đã đăng ký thành công! Hãy đăng nhập để trải nghiệm nào!');</script>";
		}
	}
}