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
    public partial class View_Distributer : Form
    {
        public View_Distributer()
        {
            InitializeComponent();
        }

        private void View_Distributer_Load(object sender, EventArgs e)
        {
            // TODO: This line of code loads data into the 'bMASDataSet1.DISTRIBUTER' table. You can move, or remove it, as needed.
            this.dISTRIBUTERTableAdapter.Fill(this.bMASDataSet1.DISTRIBUTER);
            // TODO: This line of code loads data into the 'bMASDataSet1.DISTRIBUTER' table. You can move, or remove it, as needed.
            this.dISTRIBUTERTableAdapter.Fill(this.bMASDataSet1.DISTRIBUTER);

        }

        private void populate_man_data()
        {

            SqlConnection con = new SqlConnection("Data Source=ALI-SHAHID;Initial Catalog=BMAS;Integrated Security=True");
            con.Open();

            SqlCommand command = new SqlCommand("SELECT  Man_ID, Man_Name FROM MANUFACTURER ", con);
            SqlDataAdapter adapter = new SqlDataAdapter(command);
            command.ExecuteNonQuery();

            con.Close();

            DataSet dataSet = new DataSet();
            adapter.Fill(dataSet);
            up_man_id_combo_box.Items.Clear();

            for (int i = 0; i < dataSet.Tables[0].Rows.Count; i++)
            {

                string id = dataSet.Tables[0].Rows[i].ItemArray[0].ToString();
                string role = dataSet.Tables[0].Rows[i].ItemArray[1].ToString();
                up_man_id_combo_box.Items.Add(id + " " + role);

            }


        }
        private void dataGridView_Manufacturer_RowEnter(object sender, DataGridViewCellEventArgs e)
        {
            DataGridViewRow row = dataGridView_Distributer.Rows[e.RowIndex];

            up_dis_id.Text = row.Cells[0].Value.ToString();
            up_dis_name.Text = row.Cells[1].Value.ToString();
            up_dis_description.Text = row.Cells[2].Value.ToString();
            up_dis_ntn.Text = row.Cells[3].Value.ToString();
            up_dis_regno.Text = row.Cells[4].Value.ToString();
            populate_man_data();
            up_man_id_combo_box.SelectedItem = row.Cells[5].Value.ToString();
            up_man_id_combo_box.Text = row.Cells[5].Value.ToString();
        }

        private void dataGridView_Distributer_CellDoubleClick(object sender, DataGridViewCellEventArgs e)
        {
            DataGridViewRow row = dataGridView_Distributer.Rows[e.RowIndex];

            string to_delete = row.Cells[0].Value.ToString();

            SqlConnection con = new SqlConnection("Data Source=ALI-SHAHID;Initial Catalog=BMAS;Integrated Security=True");
            con.Open();

            SqlCommand command = new SqlCommand("DELETE from DISTRIBUTER where Dis_ID=@a", con);

            command.Parameters.AddWithValue("@a", to_delete);

            command.ExecuteNonQuery();
            MessageBox.Show("Record has been Deleted", "Deleted", MessageBoxButtons.OK, MessageBoxIcon.Information);


            con.Close();

            this.Close();
        }

        private void up_dis_Click(object sender, EventArgs e)
        {
            SqlConnection con = new SqlConnection("Data Source=ALI-SHAHID;Initial Catalog=BMAS;Integrated Security=True");
            con.Open();

            SqlCommand command = new SqlCommand("UPDATE DISTRIBUTER SET Dis_Name=@a,Dis_Description=@b, Dis_NTN=@c, " +
                "Dis_RegistrationNo=@d, Man_ID=@e WHERE Dis_ID=@f", con);
            command.Parameters.AddWithValue("@a", up_dis_name.Text.ToString());
            command.Parameters.AddWithValue("@b", up_dis_description.Text.ToString());
            command.Parameters.AddWithValue("@c", up_dis_ntn.Text.ToString());
            command.Parameters.AddWithValue("@d", up_dis_regno.Text.ToString());

            string rol = up_man_id_combo_box.Text.ToString();
            string[] r = { };
            if (rol.Contains(" "))
            {
                r = rol.Split(' ');
                command.Parameters.AddWithValue("@e", Convert.ToInt32(r[0]));
            }
            else
                command.Parameters.AddWithValue("@e", Convert.ToInt32(rol));

            command.Parameters.AddWithValue("@f", Convert.ToInt32(up_dis_id.Text.ToString()));

            command.ExecuteNonQuery();

            con.Close();
            MessageBox.Show("Record Has been Updated", "Update", MessageBoxButtons.OK, MessageBoxIcon.Information);
            this.Close();
        }
    }
}
