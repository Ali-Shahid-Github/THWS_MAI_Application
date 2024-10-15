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
    public partial class Add_Supplier : Form
    {
        public Add_Supplier()
        {
            InitializeComponent();


            SqlConnection con = new SqlConnection("Data Source=ALI-SHAHID;Initial Catalog=BMAS;Integrated Security=True");
            con.Open();

            SqlCommand command = new SqlCommand("SELECT  Dis_ID, Dis_Name FROM DISTRIBUTER ", con);
            SqlDataAdapter adapter = new SqlDataAdapter(command);
            command.ExecuteNonQuery();

            con.Close();

            DataSet dataSet = new DataSet();
            adapter.Fill(dataSet);
            dis_id_combo_box.Items.Clear();

            for (int i = 0; i < dataSet.Tables[0].Rows.Count; i++)
            {

                string id = dataSet.Tables[0].Rows[i].ItemArray[0].ToString();
                string role = dataSet.Tables[0].Rows[i].ItemArray[1].ToString();
                dis_id_combo_box.Items.Add(id + " " + role);

            }
        }

        private void add_sup_Click(object sender, EventArgs e)
        {
            string[] r = { };
            if (dis_id_combo_box.SelectedItem != null)
            {
                string dis_id = dis_id_combo_box.SelectedItem.ToString();
                r = dis_id.Split(' ');
            }
            else
                MessageBox.Show("Some Fiedls are missing\nEnter Data again", "Error", MessageBoxButtons.OK, MessageBoxIcon.Error);


            if (sup_name.Text != "" && sup_contact.Text != "" )
            {

                SqlConnection con = new SqlConnection("Data Source=ALI-SHAHID;Initial Catalog=BMAS;Integrated Security=True");
                con.Open();

                SqlCommand command = new SqlCommand("INSERT INTO SUPLLIER(Sup_Name,Sup_ContactNo,Sup_Company,Dis_ID)" +
                    " VALUES(@a,@b,@c,@d)", con);
                command.Parameters.AddWithValue("@a", sup_name.Text.ToString());
                command.Parameters.AddWithValue("@b", sup_contact.Text.ToString());
                command.Parameters.AddWithValue("@c", sup_company.Text.ToString());
                
                command.Parameters.AddWithValue("@d", Convert.ToInt32(r[0]));


                command.ExecuteNonQuery();
                con.Close();

                MessageBox.Show("Added Sucessfull", "Added Complete", MessageBoxButtons.OK, MessageBoxIcon.Information);
            }
            else
                MessageBox.Show("Some Fiedls are missing\nEnter Data again", "Error", MessageBoxButtons.OK, MessageBoxIcon.Error);
        }
    }
}
