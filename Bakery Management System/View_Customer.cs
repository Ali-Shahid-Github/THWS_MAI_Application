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
    public partial class View_Customer : Form
    {
        public View_Customer()
        {
            InitializeComponent();
        }

        private void View_Customer_Load(object sender, EventArgs e)
        {
            // TODO: This line of code loads data into the 'bMASDataSet1.CUSTOMER' table. You can move, or remove it, as needed.
            this.cUSTOMERTableAdapter.Fill(this.bMASDataSet1.CUSTOMER);
            // TODO: This line of code loads data into the 'bMASDataSet1.CUSTOMER' table. You can move, or remove it, as needed.

            // TODO: This line of code loads data into the 'bMASDataSet1.CUSTOMER' table. You can move, or remove it, as needed.
            //    this.cUSTOMERTableAdapter.Fill(this.bMASDataSet1.CUSTOMER);

        }

        private void add_cus_Click(object sender, EventArgs e)
        {
            SqlConnection con = new SqlConnection("Data Source=ALI-SHAHID;Initial Catalog=BMAS;Integrated Security=True");
            con.Open();

            SqlCommand command = new SqlCommand("UPDATE CUSTOMER SET Cus_Name=@a,Cus_Location=@b, Cus_ContactNo=@c WHERE Cus_ID=@d", con);
            command.Parameters.AddWithValue("@a", up_cus_name.Text.ToString());
            command.Parameters.AddWithValue("@b", up_cus_location.Text.ToString());
            command.Parameters.AddWithValue("@c", up_cus_contact.Text.ToString());
            command.Parameters.AddWithValue("@d", up_cus_id.Text.ToString());

            command.ExecuteNonQuery();

            con.Close();
            MessageBox.Show("Record Has been Updated", "Update", MessageBoxButtons.OK, MessageBoxIcon.Information);
            this.Close();
        }

        private void dataGridView1_RowEnter(object sender, DataGridViewCellEventArgs e)
        {
            DataGridViewRow row = dataGridView1.Rows[e.RowIndex];

            up_cus_id.Text = row.Cells[0].Value.ToString();
            up_cus_location.Text = row.Cells[2].Value.ToString();
            up_cus_contact.Text = row.Cells[3].Value.ToString();
            up_cus_name.Text = row.Cells[1].Value.ToString();
        }

        private void dataGridView1_CellContentClick(object sender, DataGridViewCellEventArgs e)
        {

        }
    }
}
