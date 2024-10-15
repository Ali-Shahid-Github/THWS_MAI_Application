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
    public partial class View_Supplier : Form
    {
        public View_Supplier()
        {
            InitializeComponent();
        }

        private void View_Supplier_Load(object sender, EventArgs e)
        {
            // TODO: This line of code loads data into the 'bMASDataSet1.SUPLLIER' table. You can move, or remove it, as needed.
            this.sUPLLIERTableAdapter.Fill(this.bMASDataSet1.SUPLLIER);

        }

        private void populate_dis_data()
        {

            SqlConnection con = new SqlConnection("Data Source=ALI-SHAHID;Initial Catalog=BMAS;Integrated Security=True");
            con.Open();

            SqlCommand command = new SqlCommand("SELECT  Dis_ID, Dis_Name FROM DISTRIBUTER ", con);
            SqlDataAdapter adapter = new SqlDataAdapter(command);
            command.ExecuteNonQuery();

            con.Close();

            DataSet dataSet = new DataSet();
            adapter.Fill(dataSet);
            up_dis_id_combo_box.Items.Clear();

            for (int i = 0; i < dataSet.Tables[0].Rows.Count; i++)
            {

                string id = dataSet.Tables[0].Rows[i].ItemArray[0].ToString();
                string role = dataSet.Tables[0].Rows[i].ItemArray[1].ToString();
                up_dis_id_combo_box.Items.Add(id + " " + role);

            }


        }

        private void dataGridView_Supplier_CellMouseDoubleClick(object sender, DataGridViewCellMouseEventArgs e)
        {
            DataGridViewRow row = dataGridView_Supplier.Rows[e.RowIndex];

            string to_delete = row.Cells[0].Value.ToString();

            SqlConnection con = new SqlConnection("Data Source=ALI-SHAHID;Initial Catalog=BMAS;Integrated Security=True");
            con.Open();

            SqlCommand command = new SqlCommand("DELETE from SUPLLIER where Sup_ID=@a", con);

            command.Parameters.AddWithValue("@a", to_delete);

            command.ExecuteNonQuery();
            MessageBox.Show("Record has been Deleted", "Deleted", MessageBoxButtons.OK, MessageBoxIcon.Information);


            con.Close();

            this.Close();
        }

        private void dataGridView_Supplier_RowEnter(object sender, DataGridViewCellEventArgs e)
        {
            DataGridViewRow row = dataGridView_Supplier.Rows[e.RowIndex];

            up_sup_id.Text = row.Cells[0].Value.ToString();
            up_sup_name.Text = row.Cells[1].Value.ToString();
            up_sup_con.Text = row.Cells[2].Value.ToString();
            up_sup_com.Text = row.Cells[3].Value.ToString();
            
            populate_dis_data();
            up_dis_id_combo_box.SelectedItem = row.Cells[4].Value.ToString();
            up_dis_id_combo_box.Text = row.Cells[4].Value.ToString();
        }

        private void up_sup_Click(object sender, EventArgs e)
        {
            SqlConnection con = new SqlConnection("Data Source=ALI-SHAHID;Initial Catalog=BMAS;Integrated Security=True");
            con.Open();

            SqlCommand command = new SqlCommand("UPDATE SUPLLIER SET Sup_Name=@a,Sup_ContactNo=@b, Sup_Company=@c,Dis_ID=@d WHERE Sup_ID=@e", con);
            
            command.Parameters.AddWithValue("@a", up_sup_name.Text.ToString());
            command.Parameters.AddWithValue("@b", up_sup_con.Text.ToString());
            command.Parameters.AddWithValue("@c", up_sup_com.Text.ToString());

            string rol = up_dis_id_combo_box.Text.ToString();
            string[] r = { };
            if (rol.Contains(" "))
            {
                r = rol.Split(' ');
                command.Parameters.AddWithValue("@d", Convert.ToInt32(r[0]));
            }
            else
                command.Parameters.AddWithValue("@d", Convert.ToInt32(rol));

            command.Parameters.AddWithValue("@e", Convert.ToInt32(up_sup_id.Text.ToString()));

            command.ExecuteNonQuery();

            con.Close();
            MessageBox.Show("Record Has been Updated", "Update", MessageBoxButtons.OK, MessageBoxIcon.Information);
            this.Close();
        }
    }
}
