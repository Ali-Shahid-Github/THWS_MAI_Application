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
    public partial class View_Invoice : Form
    {
        public View_Invoice()
        {
            InitializeComponent();
        }

        private void View_Invoice_Load(object sender, EventArgs e)
        {
            // TODO: This line of code loads data into the 'bMASDataSet1.SOLD' table. You can move, or remove it, as needed.
            this.sOLDTableAdapter.Fill(this.bMASDataSet1.SOLD);

        }

        private void populate_pro_and_cus_data()
        {

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
            up_pro_id_combo_box.Items.Clear();

            for (int i = 0; i < dataSet.Tables[0].Rows.Count; i++)
            {

                string id = dataSet.Tables[0].Rows[i].ItemArray[0].ToString();
                string role = dataSet.Tables[0].Rows[i].ItemArray[1].ToString();
                up_pro_id_combo_box.Items.Add(id + " " + role);

            }

            DataSet dataSet2 = new DataSet();
            adapter2.Fill(dataSet2);

            up_cus_id_combo_box.Items.Clear();

            for (int i = 0; i < dataSet2.Tables[0].Rows.Count; i++)
            {

                string id = dataSet2.Tables[0].Rows[i].ItemArray[0].ToString();
                string role = dataSet2.Tables[0].Rows[i].ItemArray[1].ToString();
                up_cus_id_combo_box.Items.Add(id + " " + role);

            }
        }

        private void dataGridView_Invoice_CellMouseDoubleClick(object sender, DataGridViewCellMouseEventArgs e)
        {
            DataGridViewRow row = dataGridView_Invoice.Rows[e.RowIndex];

            string to_delete = row.Cells[0].Value.ToString();

            SqlConnection con = new SqlConnection("Data Source=ALI-SHAHID;Initial Catalog=BMAS;Integrated Security=True");
            con.Open();

            SqlCommand command = new SqlCommand("DELETE from SOLD where Sol_ID=@a", con);

            command.Parameters.AddWithValue("@a", to_delete);

            command.ExecuteNonQuery();
            MessageBox.Show("Record has been Deleted", "Deleted", MessageBoxButtons.OK, MessageBoxIcon.Information);


            con.Close();

            this.Close();
        }

        private void dataGridView_Invoice_RowEnter(object sender, DataGridViewCellEventArgs e)
        {
            DataGridViewRow row = dataGridView_Invoice.Rows[e.RowIndex];

            up_sol_id.Text = row.Cells[0].Value.ToString();
            up_sol_amount.Text = row.Cells[3].Value.ToString();


            populate_pro_and_cus_data();
            up_pro_id_combo_box.SelectedItem = row.Cells[4].Value.ToString();
            up_pro_id_combo_box.Text = row.Cells[4].Value.ToString();

            up_cus_id_combo_box.SelectedItem = row.Cells[5].Value.ToString();
            up_cus_id_combo_box.Text = row.Cells[5].Value.ToString();
        }

        private void up_inv_Click(object sender, EventArgs e)
        {
            SqlConnection con = new SqlConnection("Data Source=ALI-SHAHID;Initial Catalog=BMAS;Integrated Security=True");
            con.Open();

            SqlCommand command = new SqlCommand("UPDATE SOLD SET Sol_Amount=@a, Pro_ID=@b, Cus_ID=@c WHERE Sol_ID=@d", con);
            command.Parameters.AddWithValue("@a", up_sol_amount.Text.ToString());

            string rol = up_pro_id_combo_box.Text.ToString();
            string[] r = { };
            if (rol.Contains(" "))
            {
                r = rol.Split(' ');
                command.Parameters.AddWithValue("@b", Convert.ToInt32(r[0]));
            }
            else
                command.Parameters.AddWithValue("@b", Convert.ToInt32(rol));

            string sup = up_cus_id_combo_box.Text.ToString();
            string[] s = { };
            if (sup.Contains(" "))
            {
                s = sup.Split(' ');
                command.Parameters.AddWithValue("@c", Convert.ToInt32(s[0]));
            }
            else
                command.Parameters.AddWithValue("@c", Convert.ToInt32(sup));

            command.Parameters.AddWithValue("@d", Convert.ToInt32(up_sol_id.Text.ToString()));

            command.ExecuteNonQuery();

            con.Close();
            MessageBox.Show("Record Has been Updated", "Update", MessageBoxButtons.OK, MessageBoxIcon.Information);
            this.Close();
        }
    }
}
