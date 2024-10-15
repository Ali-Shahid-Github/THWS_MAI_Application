using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Data.SqlClient;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Bakery_Management_System
{
    public partial class Home_Form : Form
    {
        public Home_Form()
        {
            InitializeComponent();
        }

        private void Home_Form_Load(object sender, EventArgs e)
        {

        }

        private void bunifuCustomTextbox3_TextChanged(object sender, EventArgs e)
        {

        }

        private void call_login()
        {
            string username = Username_login_textbox.Text.ToString();
            string pass = Password_login_textbox.Text.ToString();

            SqlConnection con = new SqlConnection("Data Source=ALI-SHAHID;Initial Catalog=BMAS;Integrated Security=True");
            con.Open();


            SqlCommand command = new SqlCommand("SELECT * FROM User_credentials WHERE Use_UserName=@A AND Use_password=@B", con);
            command.Parameters.AddWithValue("@A", username);
            command.Parameters.AddWithValue("@B", pass);


            SqlDataAdapter dataAdapter = new SqlDataAdapter(command);
            DataSet dataSet = new DataSet();
            dataAdapter.Fill(dataSet);
            con.Close();


            if (dataSet.Tables[0].Rows.Count == 1)
            {
                string id = dataSet.Tables[0].Rows[0].ItemArray[1].ToString();
                string pas = dataSet.Tables[0].Rows[0].ItemArray[2].ToString();
               
                if (id == username && pas == pass)
                    new Menu_form().Show();
                else
                    MessageBox.Show("Credentials are not correct\nTry SignUp!!", "Error:Wrong Credentials", MessageBoxButtons.OK, MessageBoxIcon.Error);
            }
            else
                MessageBox.Show("Credentials are not correct\nTry SignUp!!", "Error:Wrong Credentials", MessageBoxButtons.OK, MessageBoxIcon.Error);

            Username_login_textbox.Text = "";
            Password_login_textbox.Text = "";

        }

        private void login_button_Click(object sender, EventArgs e)
        {

            call_login();
        }

        private void Sigup_button_Click(object sender, EventArgs e)
        {
            new Signup().Show();

        }

        private void Password_login_textbox_KeyDown(object sender, KeyEventArgs e)
        {
            if (e.KeyCode == Keys.Enter)
            {
                call_login();
            }
        }
    }
}
