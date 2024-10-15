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
    public partial class Delete_Employee : Form
    {
        public Delete_Employee()
        {
            InitializeComponent();
        }

        private void Delete_Employee_Load(object sender, EventArgs e)
        {
            // TODO: This line of code loads data into the 'bMASDataSet1.EMPLOYEE' table. You can move, or remove it, as needed.
            this.eMPLOYEETableAdapter.Fill(this.bMASDataSet1.EMPLOYEE);

        }

        private void dataGridView2_Del_Emp_CellMouseDoubleClick(object sender, DataGridViewCellMouseEventArgs e)
        {
            DataGridViewRow row = dataGridView2_Del_Emp.Rows[e.RowIndex];

            string to_delete = row.Cells[0].Value.ToString();

            SqlConnection con = new SqlConnection("Data Source=ALI-SHAHID;Initial Catalog=BMAS;Integrated Security=True");
            con.Open();

            SqlCommand command = new SqlCommand("DELETE from EMPLOYEE where Emp_ID=@a", con);

            command.Parameters.AddWithValue("@a", to_delete);

            command.ExecuteNonQuery();
            MessageBox.Show("Record has been Deleted", "Deleted", MessageBoxButtons.OK, MessageBoxIcon.Information);


            con.Close();

            this.Close();
        }
    }
}
