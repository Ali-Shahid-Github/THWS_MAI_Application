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
    public partial class Signup : Form
    {
        public Signup()
        {
            InitializeComponent();
        }

        private void textBox1_TextChanged(object sender, EventArgs e)
        {

        }

        private void bunifuCustomLabel1_Click(object sender, EventArgs e)
        {

        }

        private void bunifuCustomLabel5_Click(object sender, EventArgs e)
        {

        }

        private void Signup_Load(object sender, EventArgs e)
        {

        }

        private void bunifuCustomTextbox5_TextChanged(object sender, EventArgs e)
        {

        }

        private void bunifuCustomTextbox12_TextChanged(object sender, EventArgs e)
        {

        }

        private void bunifuGradientPanel1_Paint(object sender, PaintEventArgs e)
        {

        }

        private void login_button_Click(object sender, EventArgs e)
        {
            string u_name = uname.Text.ToString();
            string pass = password.Text.ToString();
            string name_of_user = nameu.Text.ToString();
            string contactnumber = contact.Text.ToString();
            string emailId = email.Text.ToString();

            string bakery_name = bname.Text.ToString();
            int registration_no = Convert.ToInt32(reg_no.Text.ToString());
            int NTN = Convert.ToInt32(ntn.Text.ToString());
            string ownername = oname.Text.ToString();
            string bakery_contact = bcontact.Text.ToString();
            string bakery_location = blocation.Text.ToString();
            string bakery_city = bcity.Text.ToString();


            SqlConnection con = new SqlConnection("Data Source=ALI-SHAHID;Initial Catalog=BMAS;Integrated Security=True");
            con.Open();

            SqlCommand command = new SqlCommand("INSERT INTO User_credentials VALUES(@a,@b,@c,@d,@e)", con);
            command.Parameters.AddWithValue("@a", u_name);
            command.Parameters.AddWithValue("@b", pass);
            command.Parameters.AddWithValue("@c", name_of_user);
            command.Parameters.AddWithValue("@d", emailId);
            command.Parameters.AddWithValue("@e", contactnumber);

            command.ExecuteNonQuery();

            command = new SqlCommand("INSERT INTO BAKERY VALUES(@a,@b,@c,@d,@e,@f,@g)", con);

            command.Parameters.AddWithValue("@a", bakery_name);
            command.Parameters.AddWithValue("@b", bakery_location);
            command.Parameters.AddWithValue("@c", bakery_city);
            command.Parameters.AddWithValue("@d", bakery_contact);
            command.Parameters.AddWithValue("@e", ownername);
            command.Parameters.AddWithValue("@f", NTN);
            command.Parameters.AddWithValue("@g", registration_no);

            command.ExecuteNonQuery();

            MessageBox.Show("Record has been saved", "Saved");
            con.Close();

            {
                uname.Text = "";
                password.Text = "";
                nameu.Text = "";
                contact.Text = "";
                email.Text = "";

                bname.Text = "";
                reg_no.Text = "";
                ntn.Text = "";
                oname.Text = "";
                bcontact.Text = "";
                blocation.Text = "";
                bcity.Text = "";
            }


            this.Hide();
            new Menu_form().Show();

        }
    }
}
