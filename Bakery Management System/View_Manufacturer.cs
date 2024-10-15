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
    public partial class View_Manufacturer : Form
    {
        public View_Manufacturer()
        {
            InitializeComponent();
        }

        private void View_Manufacturer_Load(object sender, EventArgs e)
        {
            // TODO: This line of code loads data into the 'bMASDataSet1.MANUFACTURER' table. You can move, or remove it, as needed.
            this.mANUFACTURERTableAdapter.Fill(this.bMASDataSet1.MANUFACTURER);

        }

        private void dataGridView_Manufacturer_RowEnter(object sender, DataGridViewCellEventArgs e)
        {
            DataGridViewRow row = dataGridView_Manufacturer.Rows[e.RowIndex];

            up_man_id.Text = row.Cells[0].Value.ToString();
            up_man_name.Text = row.Cells[1].Value.ToString();
            up_man_descrption.Text = row.Cells[2].Value.ToString();
            up_man_location.Text = row.Cells[3].Value.ToString();
            up_man_type.Text = row.Cells[4].Value.ToString();
            up_man_licesnse.Text = row.Cells[5].Value.ToString();

        }

        private void add_cus_Click(object sender, EventArgs e)
        {
            SqlConnection con = new SqlConnection("Data Source=ALI-SHAHID;Initial Catalog=BMAS;Integrated Security=True");
            con.Open();

            SqlCommand command = new SqlCommand("UPDATE MANUFACTURER SET Man_Name=@a, Man_Description=@b, Man_Location=@c, Man_Type=@d, Man_License=@e" +
                " WHERE Man_ID=@e", con);
            command.Parameters.AddWithValue("@a", up_man_name.Text.ToString());
            command.Parameters.AddWithValue("@b", up_man_descrption.Text.ToString());
            command.Parameters.AddWithValue("@c", up_man_location.Text.ToString());
            command.Parameters.AddWithValue("@d", up_man_licesnse.Text.ToString());
            command.Parameters.AddWithValue("@e", up_man_id.Text.ToString());

            command.ExecuteNonQuery();

            con.Close();
            MessageBox.Show("Record Has been Updated", "Update", MessageBoxButtons.OK, MessageBoxIcon.Information);
            this.Close();
        }

        private void dataGridView_Manufacturer_CellDoubleClick(object sender, DataGridViewCellEventArgs e)
        {
            DataGridViewRow row = dataGridView_Manufacturer.Rows[e.RowIndex];

            string to_delete = row.Cells[0].Value.ToString();

            SqlConnection con = new SqlConnection("Data Source=ALI-SHAHID;Initial Catalog=BMAS;Integrated Security=True");
            con.Open();

            SqlCommand command = new SqlCommand("DELETE from MANUFACTURER where Man_ID=@a", con);

            command.Parameters.AddWithValue("@a", to_delete);

            command.ExecuteNonQuery();
            MessageBox.Show("Record has been Deleted", "Deleted", MessageBoxButtons.OK, MessageBoxIcon.Information);


            con.Close();

            this.Close();
        }

        
    }
}
