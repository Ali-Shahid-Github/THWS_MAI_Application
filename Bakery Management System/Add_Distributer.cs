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
    public partial class Add_Distributer : Form
    {
        public Add_Distributer()
        {
            InitializeComponent();

            SqlConnection con = new SqlConnection("Data Source=ALI-SHAHID;Initial Catalog=BMAS;Integrated Security=True");
            con.Open();

            SqlCommand command = new SqlCommand("SELECT  Man_ID, Man_Name FROM MANUFACTURER ", con);
            SqlDataAdapter adapter = new SqlDataAdapter(command);
            command.ExecuteNonQuery();

            con.Close();

            DataSet dataSet = new DataSet();
            adapter.Fill(dataSet);
            man_id_combo_box.Items.Clear();

            for (int i = 0; i < dataSet.Tables[0].Rows.Count; i++)
            {

                string id = dataSet.Tables[0].Rows[i].ItemArray[0].ToString();
                string role = dataSet.Tables[0].Rows[i].ItemArray[1].ToString();
                man_id_combo_box.Items.Add(id + " " + role);

            }


        }

        private void add_dis_Click(object sender, EventArgs e)
        {
            string[] r = { };
            if (man_id_combo_box.SelectedItem != null)
            {
                string man_id = man_id_combo_box.SelectedItem.ToString();
                r = man_id.Split(' ');
            }
            else
                MessageBox.Show("Some Fiedls are missing\nEnter Data again", "Error", MessageBoxButtons.OK, MessageBoxIcon.Error);


            if (dis_name.Text != "" && dis_ntn.Text != "" && dis_ntn.Text != "")
            {

                SqlConnection con = new SqlConnection("Data Source=ALI-SHAHID;Initial Catalog=BMAS;Integrated Security=True");
                con.Open();

                SqlCommand command = new SqlCommand("INSERT INTO DISTRIBUTER(Dis_Name,Dis_Description,Dis_NTN,Dis_RegistrationNo,Man_ID)" +
                    " VALUES(@a,@b,@c,@d,@e)", con);
                command.Parameters.AddWithValue("@a", dis_name.Text.ToString());
                command.Parameters.AddWithValue("@b", dis_description.Text.ToString());
                command.Parameters.AddWithValue("@c", dis_ntn.Text.ToString());
                command.Parameters.AddWithValue("@d", dis_regno.Text.ToString());
                command.Parameters.AddWithValue("@e", Convert.ToInt32(r[0]));


                command.ExecuteNonQuery();
                con.Close();

                MessageBox.Show("Added Sucessfull", "Added Complete", MessageBoxButtons.OK, MessageBoxIcon.Information);
            }
            else
                MessageBox.Show("Some Fiedls are missing\nEnter Data again", "Error", MessageBoxButtons.OK, MessageBoxIcon.Error);
        }
    }
}
