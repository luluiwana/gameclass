<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Don't forget include/define REST_Controller path

/**
 *
 * Controller Quiz
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller CI
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @author    Raul Guerrero <r.g.c@me.com>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Quiz extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Course_model');
        $this->load->model('M_Discussion');
        $this->load->model('M_Quiz', 'quiz');
        if ($this->session->userdata('role') != 'siswa') {
            redirect('auth', 'refresh');
        }
        $totalXP = $this->Course_model->totalXP();
        $this->Course_model->setLevel($totalXP);
    }

    public function Quiz_detail($quizID, $CourseID)
    {
        $data = array(
            'title' => "Soal Quiz",
            'menu'  => 'Kelas',
            'CourseID' => $CourseID,
            'user'        => $this->Course_model->getUser(),
            'quiz' => $this->quiz->getQuiz($quizID),
            'jmlsoal' => $this->quiz->countQuestion($quizID)
        );
        $data['question'] = $this->quiz->getQuizByID($quizID);

        $this->load->view('siswa/template/header', $data);
        $this->load->view('siswa/quiz/quiz_detail');
        $this->load->view('siswa/template/footer');
    }
    public function Essay_detail($quizID, $CourseID)
    {
        $data = array(
            'title' => "Soal Essay",
            'menu'  => 'Kelas',
            'CourseID' => $CourseID,
            'user'        => $this->Course_model->getUser(),
            'quiz' => $this->quiz->getQuiz($quizID),
            'jmlsoal' => $this->quiz->countEssay($quizID)
        );
        $data['question'] = $this->quiz->getEssayByID($quizID);

        $this->load->view('siswa/template/header', $data);
        $this->load->view('siswa/quiz/essay_detail');
        $this->load->view('siswa/template/footer');
    }
    public function Submission_detail($quizID, $CourseID)
    {
        $data = array(
            'title' => "Soal Tugas",
            'menu'  => 'Kelas',
            'CourseID' => $CourseID,
            'user'        => $this->Course_model->getUser(),
            'quiz' => $this->quiz->getQuiz($quizID),
            'jmlsoal' => $this->quiz->countEssay($quizID)
        );
        $data['question'] = $this->quiz->getEssayByID($quizID);

        $this->load->view('siswa/template/header', $data);
        $this->load->view('siswa/quiz/submission_detail');
        $this->load->view('siswa/template/footer');
    }

    public function QuizResult($quizID, $CourseID)
    {
        //Masukkan jawaban ke tabel user_answer dan beri nilai
        $question = $this->quiz->getQuizByID($quizID);
        $score = 0;
        $addXP = 0;
        $jml_soal = $this->quiz->countQuestion($quizID);
        foreach ($question as $row) {
            if ($row->TrueOption == $this->input->post('pertanyaan' . $row->QuestionID)) {
                $score++;
                $addXP = $addXP + 50;
            } else {
                $addXP = $addXP + 10;
            }
            $answer = array(
                'UserID' =>  $id = $this->session->userdata('id_user'),
                'QuestionID' => $row->QuestionID,
                'answer' => $this->input->post('pertanyaan' . $row->QuestionID)
            );
            $this->quiz->insertAnswer($answer);
        }
        //hitung nilai dan insert nilai
        $nilai = $score / $jml_soal * 100;
        $dataNilai = array(
            'UserID' =>  $id = $this->session->userdata('id_user'),
            'QuizID' => $quizID,
            'result' => ceil($nilai),
            'addXP' => $addXP
        );
        $this->quiz->insertNilai($dataNilai);
        //updateXP
        $this->quiz->updateXP($CourseID, $addXP);
        //load page
        $QuizType = $this->quiz->getQuiz($quizID)->QuizType;
        if ($QuizType == 1) {
            $type = "quiz";
        } elseif ($QuizType == 2) {
            $type = "tes";
        }
        $log = [
            'CourseID' => $CourseID,
            'UserID' =>  $id = $this->session->userdata('id_user'),
            'Log' => 'menyelesaikan soal' . $type . ': ' . $this->quiz->getQuiz($quizID)->QuizTitle,
        ];
        $this->db->insert('log', $log);
        redirect('quiz/result/' . $quizID . '/' . $CourseID, 'refresh');
    }
    public function EssayResult($quizID, $CourseID)
    {
        //Masukkan jawaban ke tabel user_answer dan beri nilai
        $question = $this->quiz->getEssayByID($quizID);
        foreach ($question as $row) {
            $answer = array(
                'UserID' =>  $id = $this->session->userdata('id_user'),
                'EssayID' => $row->EssayID,
                'Answer' => $this->input->post('essay' . $row->EssayID)
            );
            $this->quiz->insertAnswerEssay($answer);
        }
        $dataNilai = array(
            'UserID' =>  $id = $this->session->userdata('id_user'),
            'QuizID' => $quizID,
            'result' => 0,
            'addXP' => 0
        );
        $this->quiz->insertNilai($dataNilai);
        $log = [
            'CourseID' => $CourseID,
            'UserID' =>  $id = $this->session->userdata('id_user'),
            'Log' => 'menyelesaikan soal essay: ' . $this->quiz->getQuiz($quizID)->QuizTitle,
        ];
        $this->db->insert('log', $log);
        redirect('quiz/result/' . $quizID . '/' . $CourseID, 'refresh');
    }
    public function SubmissionResult($quizID, $CourseID)
    {
        $config['upload_path']          = './media/tugas_siswa';
        $config['allowed_types']        = '*';;
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('tugas_siswa')) {
            echo $this->upload->display_errors();
            redirect('quiz/submission_detail/' . $quizID . '/' . $CourseID, 'refresh');
        } else {
            //Masukkan jawaban ke tabel user_answer dan beri nilai
            $question = $this->quiz->getEssayByID($quizID);
            foreach ($question as $row) {
                $answer = array(
                    'UserID' =>  $id = $this->session->userdata('id_user'),
                    'EssayID' => $row->EssayID,
                    'File' => $this->upload->data('file_name')
                );
                $this->quiz->insertAnswerEssay($answer);
            }
            $dataNilai = array(
                'UserID' =>  $id = $this->session->userdata('id_user'),
                'QuizID' => $quizID,
                'result' => 0,
                'addXP' => 0
            );
            $this->quiz->insertNilai($dataNilai);
            $log = [
                'CourseID' => $CourseID,
                'UserID' =>  $id = $this->session->userdata('id_user'),
                'Log' => 'mengumpulkan tugas: ' . $this->quiz->getQuiz($quizID)->QuizTitle,
            ];
            $this->db->insert('log', $log);
        }

        redirect('quiz/result/' . $quizID . '/' . $CourseID, 'refresh');
    }
    public function result($quizID, $CourseID)
    {
        $data = array(
            'title' => "Hasil Quiz",
            'menu'  => 'Kelas',
            'user'        => $this->Course_model->getUser(),
            'CourseID' => $CourseID,
            'quiz' => $this->quiz->getQuiz($quizID),
            'user_quiz' => $this->quiz->getUserQuiz($quizID),
            'feedback' => $this->quiz->feedback($quizID),
            'feedback_essay' => $this->quiz->feedback_essay($quizID),
            'course_menu'      => "Kelas",
            'course'    => $this->Course_model->course($CourseID),
        );
        $this->load->view('siswa/template/header', $data);
        $this->load->view('siswa/quiz/quiz_result');
        $this->load->view('siswa/template/footer');
    }
}


/* End of file Quiz.php */
/* Location: ./application/controllers/Quiz.php */
