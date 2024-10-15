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
    public partial class Delete_Customer : Form
    {
        public Delete_Customer()
        {
            InitializeComponent();
        }

        private void Delete_Customer_Load(object sender, EventArgs e)
        {
            // TODO: This line of code loads data into the 'bMASDataSet1.CUSTOMER' table. You can move, or remove it, as needed.
            this.cUSTOMERTableAdapter.Fill(this.bMASDataSet1.CUSTOMER);

        }

       
        private void dataGridView1_CellDoubleClick(object sender, DataGridViewCellEventArgs e)
        {
            DataGridViewRow row = dataGridView1.Rows[e.RowIndex];

            string to_delete= row.Cells[0].Value.ToString();

            SqlConnection con = new SqlConnection("Data Source=ALI-SHAHID;Initial Catalog=BMAS;Integrated Security=True");
            con.Open();

            SqlCommand command = new SqlCommand("DELETE from CUSTOMER where Cus_ID=@a", con);

            command.Parameters.AddWithValue("@a", to_delete);

            command.ExecuteNonQuery();
            MessageBox.Show("Record has been Deleted", "Deleted", MessageBoxButtons.OK, MessageBoxIcon.Information);
            
           
            con.Close();

            this.Close();

        }
    }
}
