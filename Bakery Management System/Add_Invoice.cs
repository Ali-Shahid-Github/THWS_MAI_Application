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
    public partial class Add_Invoice : Form
    {
        public Add_Invoice()
        {
            InitializeComponent();

            SqlConnection con = new SqlConnection("Data Source=ALI-SHAHID;Initial Catalog=BMAS;Integrated Security=True");
            con.Open();

            SqlCommand command = new SqlCommand("SELECT  Pro_ID, Pro_Name FROM PRODUCTS ", con);
            SqlCommand command2 = new SqlCommand("SELECT Cus_ID, Cus_Name FROM CUSTOMER ", con);
            SqlDataAdapter adapter = new SqlDataAdapter(command);
            SqlDataAdapter adapter2 = new SqlDataAdapter(command2);
            command.ExecuteNonQuery();
            command2.ExecuteNonQuery();

            con.Close();

            DataSet dataSet = new DataSet();
            adapter.Fill(dataSet);
            pro_id_combo_box.Items.Clear();

            for (int i = 0; i < dataSet.Tables[0].Rows.Count; i++)
            {

                string id = dataSet.Tables[0].Rows[i].ItemArray[0].ToString();
                string role = dataSet.Tables[0].Rows[i].ItemArray[1].ToString();
                pro_id_combo_box.Items.Add(id + " " + role);

            }

            DataSet dataSet2 = new DataSet();
            adapter2.Fill(dataSet2);

            cus_id_combo_box.Items.Clear();

            for (int i = 0; i < dataSet2.Tables[0].Rows.Count; i++)
            {

                string id = dataSet2.Tables[0].Rows[i].ItemArray[0].ToString();
                string role = dataSet2.Tables[0].Rows[i].ItemArray[1].ToString();
                cus_id_combo_box.Items.Add(id + " " + role);

            }
        }

        private void add_inv_Click(object sender, EventArgs e)
        {
            string[] r = { };
            string[] r1 = { };
            if (pro_id_combo_box.SelectedItem != null)
            {
                string pro_id = pro_id_combo_box.SelectedItem.ToString();
                r = pro_id.Split(' ');
            }
            else
                MessageBox.Show("Some Fiedls are missing\nEnter Data again", "Error", MessageBoxButtons.OK, MessageBoxIcon.Error);

            if (cus_id_combo_box.SelectedItem != null)
            {
                string cus_id = cus_id_combo_box.SelectedItem.ToString();
                r1 = cus_id.Split(' ');
            }
            else
                MessageBox.Show("Some Fiedls are missing\nEnter Data again", "Error", MessageBoxButtons.OK, MessageBoxIcon.Error);


            if (sol_amount.Text != "")
            {

                SqlConnection con = new SqlConnection("Data Source=ALI-SHAHID;Initial Catalog=BMAS;Integrated Security=True");
                con.Open();

                SqlCommand command = new SqlCommand("INSERT INTO SOLD(Sol_Amount,Pro_ID,Cus_ID) VALUES(@a,@b,@c)", con);
                command.Parameters.AddWithValue("@a", Convert.ToInt32(sol_amount.Text));
                command.Parameters.AddWithValue("@b", Convert.ToInt32(r[0]));
                command.Parameters.AddWithValue("@c", Convert.ToInt32(r1[0]));


                command.ExecuteNonQuery();
                con.Close();

                MessageBox.Show("Added Sucessfull", "Added Complete", MessageBoxButtons.OK, MessageBoxIcon.Information);
            }
            else
                MessageBox.Show("Some Fiedls are missing\nEnter Data again", "Error", MessageBoxButtons.OK, MessageBoxIcon.Error);
        }
    }
}
