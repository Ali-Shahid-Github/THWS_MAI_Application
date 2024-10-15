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
    public partial class View_Purchasing : Form
    {
        public View_Purchasing()
        {
            InitializeComponent();
        }

        private void View_Purchasing_Load(object sender, EventArgs e)
        {
            // TODO: This line of code loads data into the 'bMASDataSet1.PURCHASING' table. You can move, or remove it, as needed.
            this.pURCHASINGTableAdapter.Fill(this.bMASDataSet1.PURCHASING);

        }

        private void populate_cat_and_sup_data()
        {

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
            up_cat_id_combo_box.Items.Clear();

            for (int i = 0; i < dataSet.Tables[0].Rows.Count; i++)
            {

                string id = dataSet.Tables[0].Rows[i].ItemArray[0].ToString();
                string role = dataSet.Tables[0].Rows[i].ItemArray[1].ToString();
                up_cat_id_combo_box.Items.Add(id + " " + role);

            }

            DataSet dataSet2 = new DataSet();
            adapter2.Fill(dataSet2);

            up_sup_id_combo_box.Items.Clear();

            for (int i = 0; i < dataSet2.Tables[0].Rows.Count; i++)
            {

                string id = dataSet2.Tables[0].Rows[i].ItemArray[0].ToString();
                string role = dataSet2.Tables[0].Rows[i].ItemArray[1].ToString();
                up_sup_id_combo_box.Items.Add(id + " " + role);

            }

        }

        private void dataGridView_Purchasing_CellMouseDoubleClick(object sender, DataGridViewCellMouseEventArgs e)
        {
            DataGridViewRow row = dataGridView_Purchasing.Rows[e.RowIndex];

            string to_delete = row.Cells[0].Value.ToString();

            SqlConnection con = new SqlConnection("Data Source=ALI-SHAHID;Initial Catalog=BMAS;Integrated Security=True");
            con.Open();

            SqlCommand command = new SqlCommand("DELETE from PURCHASING where Pur_ID=@a", con);

            command.Parameters.AddWithValue("@a", to_delete);

            command.ExecuteNonQuery();
            MessageBox.Show("Record has been Deleted", "Deleted", MessageBoxButtons.OK, MessageBoxIcon.Information);


            con.Close();

            this.Close();
        }

        private void dataGridView_Purchasing_RowEnter(object sender, DataGridViewCellEventArgs e)
        {
            DataGridViewRow row = dataGridView_Purchasing.Rows[e.RowIndex];

            up_pur_id.Text = row.Cells[0].Value.ToString();
            up_pur_amount.Text = row.Cells[3].Value.ToString();


            populate_cat_and_sup_data();
            up_cat_id_combo_box.SelectedItem = row.Cells[4].Value.ToString();
            up_cat_id_combo_box.Text = row.Cells[4].Value.ToString();

            up_sup_id_combo_box.SelectedItem = row.Cells[5].Value.ToString();
            up_sup_id_combo_box.Text = row.Cells[5].Value.ToString();
        }

        private void up_pur_Click(object sender, EventArgs e)
        {
            SqlConnection con = new SqlConnection("Data Source=ALI-SHAHID;Initial Catalog=BMAS;Integrated Security=True");
            con.Open();

            SqlCommand command = new SqlCommand("UPDATE PURCHASING SET Pur_Amount=@a, Cat_ID=@b, Sup_ID=@c WHERE Pur_ID=@d", con);
            command.Parameters.AddWithValue("@a", up_pur_amount.Text.ToString());
            
            string rol = up_cat_id_combo_box.Text.ToString();
            string[] r = { };
            if (rol.Contains(" "))
            {
                r = rol.Split(' ');
                command.Parameters.AddWithValue("@b", Convert.ToInt32(r[0]));
            }
            else
                command.Parameters.AddWithValue("@b", Convert.ToInt32(rol));

            string sup = up_sup_id_combo_box.Text.ToString();
            string[] s = { };
            if (sup.Contains(" "))
            {
                s = sup.Split(' ');
                command.Parameters.AddWithValue("@c", Convert.ToInt32(s[0]));
            }
            else
                command.Parameters.AddWithValue("@c", Convert.ToInt32(sup));

            command.Parameters.AddWithValue("@d", Convert.ToInt32(up_pur_id.Text.ToString()));

            command.ExecuteNonQuery();

            con.Close();
            MessageBox.Show("Record Has been Updated", "Update", MessageBoxButtons.OK, MessageBoxIcon.Information);
            this.Close();
        }
    }
}
