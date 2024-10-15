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
    public partial class Add_Purchasing : Form
    {
        public Add_Purchasing()
        {
            InitializeComponent();
            SqlConnection con = new SqlConnection("Data Source=ALI-SHAHID;Initial Catalog=BMAS;Integrated Security=True");
            con.Open();

            SqlCommand command = new SqlCommand("SELECT  Cat_ID, Cat_Name FROM CATEGORY ", con);
            SqlCommand command2 = new SqlCommand("SELECT  Sup_ID, Sup_Name FROM SUPLLIER ", con);
            SqlDataAdapter adapter = new SqlDataAdapter(command);
            SqlDataAdapter adapter2 = new SqlDataAdapter(command2);
            command.ExecuteNonQuery();
            command2.ExecuteNonQuery();

            con.Close();

            DataSet dataSet = new DataSet();
            adapter.Fill(dataSet);
            cat_id_combo_box.Items.Clear();

            for (int i = 0; i < dataSet.Tables[0].Rows.Count; i++)
            {

                string id = dataSet.Tables[0].Rows[i].ItemArray[0].ToString();
                string role = dataSet.Tables[0].Rows[i].ItemArray[1].ToString();
                cat_id_combo_box.Items.Add(id + " " + role);

            }

            DataSet dataSet2 = new DataSet();
            adapter2.Fill(dataSet2);

            sup_id_combo_box.Items.Clear();

            for (int i = 0; i < dataSet2.Tables[0].Rows.Count; i++)
            {

                string id = dataSet2.Tables[0].Rows[i].ItemArray[0].ToString();
                string role = dataSet2.Tables[0].Rows[i].ItemArray[1].ToString();
                sup_id_combo_box.Items.Add(id + " " + role);

            }
        }

        private void add_pur_Click(object sender, EventArgs e)
        {
            string[] r = { };
            string[] r1 = { };
            if (cat_id_combo_box.SelectedItem != null)
            {
                string cat_id = cat_id_combo_box.SelectedItem.ToString();
                r = cat_id.Split(' ');
            }
            else
                MessageBox.Show("Some Fiedls are missing\nEnter Data again", "Error", MessageBoxButtons.OK, MessageBoxIcon.Error);

            if (sup_id_combo_box.SelectedItem != null)
            {
                string sup_id = cat_id_combo_box.SelectedItem.ToString();
                r1 = sup_id.Split(' ');
            }
            else
                MessageBox.Show("Some Fiedls are missing\nEnter Data again", "Error", MessageBoxButtons.OK, MessageBoxIcon.Error);


            if (pur_amount.Text != "")
            {

                SqlConnection con = new SqlConnection("Data Source=ALI-SHAHID;Initial Catalog=BMAS;Integrated Security=True");
                con.Open();

                SqlCommand command = new SqlCommand("INSERT INTO PURCHASING(Pur_Amount,Cat_ID,Sup_ID) VALUES(@a,@b,@c)", con);
                command.Parameters.AddWithValue("@a", Convert.ToInt32(pur_amount.Text));
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
