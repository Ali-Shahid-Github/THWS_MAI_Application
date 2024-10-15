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
    public partial class Add_Products : Form
    {
        public Add_Products()
        {
            InitializeComponent();

            SqlConnection con = new SqlConnection("Data Source=ALI-SHAHID;Initial Catalog=BMAS;Integrated Security=True");
            con.Open();

            SqlCommand command = new SqlCommand("SELECT  Cat_ID, Cat_Name FROM CATEGORY ", con);
            SqlDataAdapter adapter = new SqlDataAdapter(command);
            command.ExecuteNonQuery();

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

        }

        private void add_pro_Click(object sender, EventArgs e)
        {
            string[] r = { };
            if (cat_id_combo_box.SelectedItem!=null)
            {
                string cat_id = cat_id_combo_box.SelectedItem.ToString();
                r = cat_id.Split(' ');
            }
            else
                MessageBox.Show("Some Fiedls are missing\nEnter Data again", "Error", MessageBoxButtons.OK, MessageBoxIcon.Error);


            if (pro_name.Text != "" && pro_stock.Text != "")
            {

                SqlConnection con = new SqlConnection("Data Source=ALI-SHAHID;Initial Catalog=BMAS;Integrated Security=True");
                con.Open();

                SqlCommand command = new SqlCommand("INSERT INTO PRODUCTS(Pro_Name,Pro_Stock,Cat_ID) VALUES(@a,@b,@c)", con);
                command.Parameters.AddWithValue("@a", pro_name.Text.ToString());
                command.Parameters.AddWithValue("@b", Convert.ToInt32(pro_stock.Text.ToString()));
                command.Parameters.AddWithValue("@c", Convert.ToInt32(r[0]));


                command.ExecuteNonQuery();
                con.Close();

                MessageBox.Show("Added Sucessfull", "Added Complete", MessageBoxButtons.OK, MessageBoxIcon.Information);
            }
            else
                MessageBox.Show("Some Fiedls are missing\nEnter Data again", "Error", MessageBoxButtons.OK, MessageBoxIcon.Error);

        }

        private void cat_id_combo_box_SelectedIndexChanged(object sender, EventArgs e)
        {

        }
    }
}
